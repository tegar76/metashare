<?php

class LoveStoryController extends CI_Controller
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
		$data['code'] = $code;
		$data['title'] = 'Tambah Perjalanan Cinta';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_perjalanan_cinta';
		$this->load->view('admin/layouts/wrapper', $data, false);
		if ($_POST) {
			$check = $this->invitation->checkDataUndangan($code);
			if (empty($check)) {
				sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
				redirect('admin/undangan/detail/' . $code);
			} else {
				$this->form_validation->set_rules([
					[
						'field' => 'title[]',
						'label' => 'Tahap Perjalanan Cinta',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => 'Kolom {field} tidak boleh kosong',
							'xss_clean' => 'Masukkan nilai tidak sah'
						]

					],
					[
						'field' => 'date[]',
						'label' => 'Tanggal Perjalanan Cinta',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => 'Kolom {field} tidak boleh kosong',
							'xss_clean' => 'Masukkan nilai tidak sah'
						]

					],
					[
						'field' => 'text[]',
						'label' => 'Certia Perjalanan Cinta',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => 'Kolom {field} tidak boleh kosong',
							'xss_clean' => 'Masukkan nilai tidak sah'
						]

					]
				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('admin/layouts/wrapper', $data, false);
				} else {
					$loveStory = $this->input->post('title', true);
					$this->invitation->insertLoveStory($loveStory, $check->invitation_id);
					sweetAlert("Berhasil", "Perjalanan Cinta berhasil di input", "success");
					redirect('admin/undangan/detail/' . $data['code']);
				}
			}
		}
	}

	public function detail()
	{
		if (isset($_GET['code']) and isset($_GET['id'])) {
			$id = $this->input->get('id');
			$stories = $this->db->get_where('love_story', ['invitation_id' => $id])->result();
			$data['stories'] = array();
			if ($stories) {
				$nomor = 1;
				foreach ($stories as $story) {
					$row['number'] = $nomor++;
					$row['title'] = $story->title;
					$row['date'] = date('d-m-Y', strtotime($story->date));
					$row['text'] = $story->story;
					$row['id'] = $story->story_id;
					$result[] = $row;
				}
				$data['stories'] = $result;
			}
			$data['code'] = $this->input->get('code');
			$data['title'] = 'Edit Perjalanan Cinta';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update($id)
	{
		$data['title'] = 'Edit Perjalanan Cinta Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta_detail';
		$data['detail'] = $this->db->get_where('love_story', ['story_id' => $id])->row();
		$data['code'] = $this->db->select('code')->from('invitation')->where('invitation_id', $data['detail']->invitation_id)->get()->row();
		if (isset($_POST['update'])) {
			$this->form_validation->set_rules('title', 'Tahapan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('date', 'Tanggal' . 'trim|required|xss_clean');
			$this->form_validation->set_rules('story', 'Cerita', 'trim|required|xss_clean');
			if ($this->form_validation->run() ==  false) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {
				$update = array(
					'title' => $this->input->post('title', true),
					'date' => $this->input->post('date', true),
					'story' => $this->input->post('story', true),
				);
				$this->db->update('love_story', $update, ['story_id' => $this->input->post('id')]);
				sweetAlert("Berhasil", "Perjalanan Cinta Berhasil di Update", "success");
				redirect('admin/undangan/love-story/detail?code=' . $data['code']->code . '&id=' . $data['detail']->invitation_id);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}


	public function delete()
	{
		$id = $this->input->post('story_id');
		$this->db->delete('love_story', ['story_id' => $id]);
		$response = array(
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus perjalanan cinta',
			'success' => true
		);
		echo json_encode($response);
	}
}
