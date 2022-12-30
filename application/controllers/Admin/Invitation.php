<?php

class Invitation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
		$this->load->model('InvitationModel', 'invitation', true);
		$this->load->model('AdminModel', 'admin', true);
	}

	public function index()
	{
	}

	public function add_guest_invite($code)
	{
		$data['title'] = 'Tambah Tamu Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_tamu_undangan';
		$data['code'] = $code;
		$check = $this->invitation->checkDataUndangan($this->input->post('code'));
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/invitation');
		} else {
			$this->form_validation->set_rules([
				[
					'field' => 'guest[]',
					'label' => 'Nama Tamu Undangan',
					'rules' => 'trim|required|xss_clean|max_length[25]|min_length[3]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 3 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 25 karakter)',
					]
				],
			]);
			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {
				$guest = $this->input->post('guest', TRUE);
				$this->invitation->insertTamuUndangan($guest, $check->invitation_id);
				sweetAlert("Berhasil", "Data Tamu Undangan berhasil di input", "success");
				redirect('admin/invitation');
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
