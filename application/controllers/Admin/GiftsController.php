<?php

class GiftsController extends CI_Controller
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
		$data['title'] = 'Tambah Berikan hadiah';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_berikan_hadiah';
		$check = $this->invitation->checkDataUndangan($code);
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/undangan/detail/' . $code);
		} else {
			if (empty($_FILES['qr_code']['name'])) {
				$this->form_validation->set_rules('qr_code[]', 'QR Code  ', 'trim|required|xss_clean');
			}
			$this->form_validation->set_rules('bank[]', 'Jenis Bank', 'trim|required|xss_clean');
			$this->form_validation->set_rules('noRek[]', 'Nomor Rekening', 'trim|required|xss_clean|numeric');
			$this->form_validation->set_rules('name[]', 'Nama Penerima', 'trim|required|xss_clean');
			if ($this->form_validation->run() === false) {
				$this->load->view('admin/layouts/wrapper', $data, false);
			} else {
				$gifts = $this->input->post('noRek', true);
				$this->invitation->insertGifts($gifts, $check->invitation_id);
				sweetAlert("Berhasil", "Hadiah berhasil di input", "success");
				redirect('admin/undangan/detail/' . $data['code']);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detail()
	{
		$data['title'] = 'Edit Berikan hadiah';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update()
	{
		$data['title'] = 'Edit Berikan Hadiah Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
