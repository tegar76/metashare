<?php

class ProfileController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$cutomer = $this->db->get_where('customer', ['email' => $this->session->userdata('email')])->row();
		$totalOrder = $this->db->get_where('transaction', ['cus_id' => $cutomer->cus_id])->num_rows();
		$data['customer'] = $cutomer;
		$data['totalOrder'] = $totalOrder;
		$data['title'] = 'Profile';
		$data['content'] = 'marketplace/contents/profile/v_profile';
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function update()
	{
		$customer = $this->db->get_where('customer', ['email' => $this->session->userdata('email')])->row();
		$data['customer'] = $customer;
		$data['title'] = 'Profile';
		$data['content'] = 'marketplace/contents/profile/v_edit_profile';
		if (isset($_POST['update'])) {
			if ($customer->email != $_POST['email_update']) {
				$rules = 'trim|required|xss_clean|valid_email|is_unique[customer.email]';
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
			]);
			$this->form_validation->set_rules('current_password', 'Password Lama', 'callback_password_check');
			$this->form_validation->set_rules([
				[
					'field' => 'new_password',
					'label' => 'Password Baru',
					'rules' => 'trim|xss_clean|required|min_length[8]',
					'errors' => [
						'xss_clean' => 'cek kembali pada {field}',
						'required' => '{field} harus diisi',
						'min_length' => '{field} terlalu pendek'
					]
				],
				[
					'field' => 'confirm_password',
					'label' => 'Konfirmasi Password Baru',
					'rules' => 'trim|xss_clean|required|min_length[8]|matches[new_password]',
					'errors' => [
						'xss_clean' => 'cek kembali pada {field}',
						'required' => '{field} harus diisi',
						'min_length' => '{field} terlalu pendek',
						'matches' => '{field} tidak sesuai'
					]
				],
			]);

			if ($this->form_validation->run() === false) {
				$this->load->view('marketplace/layouts/wrapper', $data, false);
			} else {
				$pass	= htmlspecialchars($this->input->post('confirm_password', true));
				$newpass = password_hash($pass, PASSWORD_DEFAULT);
				if ($customer->password != $newpass) {
					$this->db->set('password', $newpass);
				}
				$customer = array(
					'name'	=> htmlspecialchars($this->input->post('name_update', true)),
					'phone'	=> htmlspecialchars($this->input->post('phone_update', true)),
					'email'	=> htmlspecialchars($this->input->post('email_update', true)),
					'update_time' => date('Y-m-d H:i:s'),
				);
				$this->db->set($customer);
				$this->db->where('cus_id', $this->input->post('id', true));
				$this->db->update('customer');
				sweetAlert("Berhasil", "Profile berhasil diupdate", "success");
				redirect('profile');
			}
		}
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function password_check($str)
	{
		$customer = $this->db->get_where('customer', ['email' => $this->session->userdata('email')])->row();
		if (!password_verify($str, $customer->password)) {
			$this->form_validation->set_message('password_check', '{field} salah!');
			return false;
		}
		return true;
	}

	public function do_upload()
	{
		$data = $_POST['image'];
		$image_array_1 = explode(";", $data);
		$image_array_2 = explode(",", $image_array_1[1]);
		$data = base64_decode($image_array_2[1]);
		$temp_file_path = tempnam(sys_get_temp_dir(), 'androidtempimage');
		file_put_contents($temp_file_path, $data);
		$image_info = getimagesize($temp_file_path);
		$_FILES['userfile'] = array(
			'name' => uniqid() . '.' . preg_replace('!\w+/!', '', $image_info['mime']),
			'tmp_name' => $temp_file_path,
			'size'  => filesize($temp_file_path),
			'error' => UPLOAD_ERR_OK,
			'type'  => $image_info['mime'],
		);

		$cutomer = $this->db->get_where('customer', ['email' => $this->session->userdata('email')])->row();
		$conf['upload_path']   = './storage/profile_customer/';
		$conf['allowed_types'] = 'gif|jpg|png|jpeg';
		$conf['max_size']      = 2048;
		$conf['overwrite']     = true;
		$conf['encrypt_name'] = true;
		$this->load->library('upload', $conf);
		if ($this->upload->do_upload('userfile', true)) {
			if ($cutomer->image != 'default.jpg') {
				@unlink(FCPATH . './storage/profile_customer/' . $cutomer->image);
			}
			$newProfile = $this->upload->data('file_name');
			$this->db->set('image', $newProfile);
			$this->db->where(['email' => $cutomer->email]);
			$this->db->update('customer');
			$file_path =  base_url() .  'storage/profile_customer/' . $newProfile;
			echo $file_path;
		}
	}
}
