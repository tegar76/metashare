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
				// var_dump($_FILES);
				// die;
				$photos = $_FILES['photo']['name'];
				if ($photos) {
					if (!is_dir('storage/invitations/images/gallery/')) {
						mkdir('./storage/invitations/images/gallery/', 0777, true);
					}
					$conf['upload_path']   = './storage/invitations/images/gallery/';
					$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
					$conf['max_size']      = 2000;
					$conf['overwrite']     = TRUE;
					$conf['encrypt_name'] = TRUE;
					$this->load->library('upload', $conf);
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
									'invitaion_id' => $this->input->post('invtId')
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
		$data['title'] = 'Edit Foto Galeri';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update()
	{
		$data['title'] = 'Edit Foto Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
