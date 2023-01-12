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
	   	isAdminLogin();
		$invitation = $this->invitation->getInvitation();
		$no = 1;
		$data['invitation'] = array();
		if ($invitation) {
			foreach ($invitation as $key => $value) {
				$row['nomor'] = $no++;
				$row['username'] = $value->username;
				$row['customer'] = $value->name;
				$row['type'] = $value->type;
				$row['category'] = $value->category;
				$row['model'] = $value->model;
				$row['desc'] = '';
				$row['active'] = ($value->status > 0) ? 'Aktif' : 'Tidak Aktif';
				$row['period'] = date('d-m-Y H:i', strtotime($value->period)) . " WIB";
				$row['id'] = $value->id;
				$result[] = $row;
			}
			$data['invitation'] = $result;
		}
		$data['title'] = 'Data Undangan';
		$data['content'] = 'admin/contents/undangan/v_data_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function add_guest_invite($code)
	{

	    isAdminLogin();
		if ($code == false) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
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
