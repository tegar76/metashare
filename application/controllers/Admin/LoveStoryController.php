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
		$data['title'] = 'Edit Perjalanan Cinta';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update()
	{
		$data['title'] = 'Edit Perjalanan Cinta Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
