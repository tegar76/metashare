<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('AdminModel', 'admin', true);
		$this->userAdmin = $this->admin->getAdmin();
	}

	public function index()
	{
		$data['admin'] = $this->userAdmin;
		$data['title'] = 'Profile';
		$data['content'] = 'admin/contents/profile/v_profile';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update_password()
	{
		$data['admin'] = $this->userAdmin;
		$data['title'] = 'Edit Password';
		$data['content'] = 'admin/contents/profile/v_edit_password';
		if (isset($_POST['update'])) {
			$this->form_validation->set_rules('old_pass', 'Password Lama', 'callback_password_check');
			$this->form_validation->set_rules([
				[
					'field' => 'password',
					'label' => 'Password Baru',
					'rules' => 'trim|xss_clean|required|min_length[8]',
					'errors' => [
						'xss_clean' => 'cek kembali pada {field}',
						'required' => '{field} harus diisi',
						'min_length' => '{field} terlalu pendek'
					]
				],
				[
					'field' => 'conf_pass',
					'label' => 'Konfirmasi Password Baru',
					'rules' => 'trim|xss_clean|required|min_length[8]|matches[password]',
					'errors' => [
						'xss_clean' => 'cek kembali pada {field}',
						'required' => '{field} harus diisi',
						'min_length' => '{field} terlalu pendek',
						'matches' => '{field} tidak sesuai'
					]
				],
			]);
			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {
				$pass	= htmlspecialchars($this->input->post('conf_pass', true));
				$newpass = password_hash($pass, PASSWORD_DEFAULT);
				if ($data['admin']->password != $newpass) {
					$this->db->set('password', $newpass);
				}
				$this->db->set('update_time', date('Y-m-d H:i:s'));
				$this->db->where('admin_id', $this->input->post('id_admin', true));
				$this->db->update('admin');
				sweetAlert("Berhasil", "Password berhasil diupdate", "success");
				redirect('admin/profile');
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function password_check($str)
	{
		$admin = $this->userAdmin;
		if (!password_verify($str, $admin->password)) {
			$this->form_validation->set_message('password_check', '{field} salah!');
			return false;
		}
		return true;
	}

	public function update_profile()
	{
		$data['admin'] = $this->userAdmin;
		$data['title'] = 'Edit Profile';
		$data['content'] = 'admin/contents/profile/v_edit_profile';
		if (isset($_POST['update'])) {
			if ($data['admin']->email != $_POST['email_update']) {
				$rules = 'trim|required|xss_clean|valid_email|is_unique[admin.email]';
				$errors = [
					'is_unique' => '{field} sudah digunakan, gunakan alamat email lain'
				];
			} else {
				$rules = 'trim|required|xss_clean|valid_email';
				$errors = [];
			}
			$this->form_validation->set_rules([
				[
					'field' => 'name_update',
					'label' => 'Nama Admin',
					'rules' => 'trim|required|xss_clean|min_length[4]|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 4 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)'
					]
				],
				[
					'field' => 'phone_update',
					'label' => 'Nomor Telepon',
					'rules' => 'trim|required|xss_clean|min_length[8]|max_length[16]|numeric',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 16 karakter)',
						'numeric' => '{field} harus berupa angka'
					]
				],
				[
					'field' => 'email_update',
					'label' => 'Alamat Email',
					'rules' => $rules,
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'valid_email' => '{field} yang anda masukan harus valid',
						$errors
					]
				],
				[
					'field' => 'address_update',
					'label' => 'Alamat',
					'rules' => 'trim|required|xss_clean|min_length[8]|max_length[200]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 200 karakter)',
					]
				],
			]);
			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {
				$admin = array(
					'name'	=> htmlspecialchars($this->input->post('name_update', true)),
					'phone'	=> htmlspecialchars($this->input->post('phone_update', true)),
					'email'	=> htmlspecialchars($this->input->post('email_update', true)),
					'address' => htmlspecialchars($this->input->post('address_update', true)),
					'update_time' => date('Y-m-d H:i:s'),
				);
				$this->db->set($admin);
				$this->db->where('admin_id', $this->input->post('id_admin', true));
				$this->db->update('admin');
				sweetAlert("Berhasil", "Profile berhasil diupdate", "success");
				redirect('admin/profile');
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
