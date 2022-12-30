<?php

class GuestInvitedController extends CI_Controller
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
		$data['title'] = 'Tambah Tamu Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_tamu_undangan';
		$data['code'] = $code;
		$check = $this->invitation->checkDataUndangan($code);
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/undangan/detail/' . $code);
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
				redirect('admin/undangan/detail/' . $data['code']);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update($id)
	{
		$data['title'] = 'Edit Tamu Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_tamu_undangan';
		$data['guest'] = $this->db->get_where('invited_guest', ['guest_id' => $id])->row();
		if (isset($_POST['update'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'guest_update',
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
				$update = array(
					'name' => $this->input->post('guest_update', true),
					'update_at' => date('Y-m-d H:i:s')
				);
				$this->db->set($update);
				$this->db->where(['guest_id' => $this->input->post('id', true)]);
				$this->db->update('invited_guest');
				SweetAlert("Berhasil", "Tamu Undangan berhasil diupdate", "success");
				redirect('admin/undangan');
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
