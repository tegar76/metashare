<?php


class GalleryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
		$this->load->model('InvitationModel', 'invitation', true);
		$this->load->model('AdminModel', 'admin', true);
	}

	public function create($code)
	{
		$data['title'] = 'Tambah Foto';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_foto';
		$data['code'] = $code;
		$check = $this->invitation->checkDataUndangan($code);
		$data['invt'] = $check;
		$data['category'] = $this->invitation->getCategoriByCode($code)->category;
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/undangan/detail/' . $code);
		} else {
			$this->form_validation->set_rules([
				[
					'field' => 'link_video',
					'label' => 'Link Video Goole Drive',
					'rules' => 'trim|required|xss_clean|prep_url',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'prep_url' => '{field} harus valid'
					]
				]
			]);
			if (empty($_FILES['photo']['name'])) {
				$this->form_validation->set_rules([
					[
						'field' => 'photo[]',
						'label' => 'Foto',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => 'Anda harus upload {field}',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
				]);
			}
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {

				// insert link video googledrive
				$linkVideo = $this->input->post('link_video', true);
				$this->db->update('invitation', [
					'link_video' => $linkVideo
				], [
					'invitation_id' => $this->input->post('invtId', true)
				]);

				// upload foto
				$photos = $_FILES['photo']['name'];
				if ($photos) {
					if (!is_dir('storage/invitations/gallery/')) {
						mkdir('./storage/invitations/gallery/', 0777, true);
					}
					$conf['upload_path']   = './storage/invitations/gallery/';
					$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
					$conf['max_size']      = 2000;
					$conf['overwrite']     = TRUE;
					$conf['encrypt_name'] = TRUE;
					$this->load->library('upload', $conf);
					$this->upload->initialize($conf);
					$count = count($photos);
					for ($i = 0; $i < $count; $i++) {
						if (!empty($_FILES['photo']['name'][$i])) {
							$_FILES['file']['name'] = $_FILES['photo']['name'][$i];
							$_FILES['file']['type'] 	= $_FILES['photo']['type'][$i];
							$_FILES['file']['tmp_name'] = $_FILES['photo']['tmp_name'][$i];
							$_FILES['file']['error'] 	= $_FILES['photo']['error'][$i];
							$_FILES['file']['size'] 	= $_FILES['photo']['size'][$i];
							if ($this->upload->do_upload('file')) {
								$images = $this->upload->data();
								$upload = array(
									'photo' => $images['file_name'],
									'file_type' => $images['file_ext'],
									'file_size' => $images['file_size'],
									'invitation_id' => $this->input->post('invtId')
								);
								$this->db->insert('photo_gallery', $upload);
							}
						}
					}
				}
				sweetAlert("Berhasil", "Foto berhasil di input", "success");
				redirect('admin/undangan/detail/' . $data['code']);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detail()
	{
		if (isset($_GET['code']) and isset($_GET['id'])) {
			$id = $this->input->get('id');
			$videos = $this->db->select('link_video as link, invitation_id as id')->from('invitation')->where('invitation_id', $id)->get()->row();
			$photos = $this->db->get_where('photo_gallery', ['invitation_id' => $id])->result();
			$data['photos'] = array();
			if ($photos) {
				foreach ($photos as $photo) {
					$row['img'] = base_url() . 'storage/invitations/gallery/' . $photo->photo;
					$row['id'] = $photo->gallery_id;
					$result[] = $row;
				}
				$data['photos'] = $result;
			}
			$data['videos'] = $videos;
			$data['code'] = $this->input->get('code');
			$data['title'] = 'Edit Foto Galeri';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update_video()
	{
		if (isset($_POST['update_video'])) {
			$linkVideo = $this->input->post('link_video', true);
			$id  = $this->input->post('id', true);
			$code = $this->input->post('code', true);
			$this->db->update('invitation', [
				'link_video' => $linkVideo
			], [
				'invitation_id' => $id
			]);
			sweetAlert("Berhasil", "Link video berhasil di update", "success");
			redirect('admin/undangan/gallery/detail?code=' . $code . '&id=' . $id);
		}
	}

	public function update($id)
	{
		$data['title'] = 'Edit Foto Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto_detail';
		$data['photo'] = $this->db->get_where('photo_gallery', ['gallery_id' => $id])->row();
		$invtId = $data['photo']->invitation_id;
		$data['code'] = $this->db->query("SELECT code FROM invitation WHERE invitation_id='$invtId'")->row();
		if ($_REQUEST) {
			if (empty($_FILES['photo_update']['name'])) {
				$this->form_validation->set_rules('photo_update', 'Foto', 'trim|required|xss_clean', [
					'required' => 'Anda harus upload {field}',
					'xss_clean' => 'cek kembali pada {field}'
				]);
			}
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {

				$new_photos = $_FILES['photo_update']['name'];
				$old_photo = $this->db->get_where('photo_gallery', ['gallery_id' => $this->input->post('gallery_id')])->row();
				if ($new_photos) {
					if (!is_dir('storage/invitations/gallery/')) {
						mkdir('./storage/invitations/gallery/', 0777, true);
					}
					$conf['upload_path']   = './storage/invitations/gallery/';
					$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
					$conf['max_size']      = 2000;
					$conf['overwrite']     = TRUE;
					$conf['encrypt_name'] = TRUE;
					$this->load->library('upload', $conf);
					$this->upload->initialize($conf);
					$_FILES['file']['name'] = $_FILES['photo_update']['name'];
					$_FILES['file']['type'] 	= $_FILES['photo_update']['type'];
					$_FILES['file']['tmp_name'] = $_FILES['photo_update']['tmp_name'];
					$_FILES['file']['error'] 	= $_FILES['photo_update']['error'];
					$_FILES['file']['size'] 	= $_FILES['photo_update']['size'];
					if ($this->upload->do_upload('file')) {
						@unlink(FCPATH . './storage/invitations/gallery/' . $old_photo->photo);
						$update = array(
							'photo' => $this->upload->data('file_name'),
							'file_type' => $this->upload->data('file_ext'),
							'file_size' => $this->upload->data('file_size'),
						);
						$this->db->update('photo_gallery', $update, ['gallery_id' => $this->input->post('photo_id')]);
					}
				}
				sweetAlert("Berhasil", "Foto berhasil di update", "success");
				redirect('admin/undangan/gallery/detail?code=' . $data['code']->code . '&id=' . $invtId);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function delete()
	{
		$photo = $this->db->get_where('photo_gallery', ['gallery_id' => $this->input->post('gallery_id')])->row();
		if (file_exists(FCPATH . '/storage/invitations/gallery/' . $photo->photo)) {
			@unlink(FCPATH . './storage/invitations/gallery/' . $photo->photo);
			$this->db->delete('photo_gallery', ['gallery_id' => $this->input->post('gallery_id')]);
			$reponse = [
				'csrfName' => $this->security->get_csrf_token_name(),
				'csrfHash' => $this->security->get_csrf_hash(),
				'message' => 'Anda telah menghapus data customer',
				'success' => true
			];
		}
		echo json_encode($reponse);
	}
}
