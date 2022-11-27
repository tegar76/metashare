<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel', 'auth', true);
	}

	// function untuk mengecek token login dari user admin
	public function checkToken()
	{
		if ($this->session->userdata('backToken')) {
			if ($this->auth->checkToken($this->session->userdata('backToken'))) {
				redirect('admin/dashboard');
			} else {
				$this->session->unset_userdata('backToken');
				redirect('admin/logout');
			}
		}
	}

	public function index()
	{
		$this->checkToken();
		$data['title'] = 'Login Admin';
		$this->form_validation->set_rules([
			[
				'field' => 'username',
				'label' => 'username',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi!',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'password',
				'label' => 'password',
				'rules' => 'trim|required|xss_clean|min_length[8]',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'min_length' => '{field} yang ada masukan minimal 8 karakter'
				]
			],
		]);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Admin';
			$this->load->view('admin/contents/login/v_login', $data, FALSE);
		} else {
			$this->process();
		}
	}

	public function process()
	{
		$data = $this->input->post();
		$admin = $this->auth->getAdminByCode($data['username']);
		if ($admin) {
			if (password_verify($data['password'], $admin->password)) {
				if ($admin->level != 'admin') {
					sweetAlert("Login Gagal", "Anda tidak memiliki akses untuk masuk", "error");
					redirect('admin/login');
				} else if ($admin->status != '1') {
					sweetAlert("Login Gagal", "Akun anda saat ini tidak aktif, mohon hubungi Super Admin untuk mengaktifkan", "error");
					redirect('admin/login');
				} else {
					$sess_ = [
						'fullName' => $admin->name,
						'email' 	=> $admin->email,
						'backToken' => crypt($admin->name, ''),
						'level'		=> $admin->level,
						'logged_in'	=> true
					];
					$this->session->set_userdata($sess_);
					$this->auth->registToken($forToken = ['access_token' => $sess_['backToken']]);
					sweetAlert("Selamat Datang $admin->name", "Semoga hari anda menyenangkan :)", "success");
					redirect('admin/dashboard');
				}
			} else {
				$this->session->set_flashdata('message', 'password salah');
				$data['title'] = 'Login Admin';
				$this->load->view('admin/contents/login/v_login', $data, FALSE);
			}
		} else {
			sweetAlert("Login Gagal", "Akun admin tidak tersedia", "error");
			redirect('admin/login');
		}
	}

	public function logout()
	{
		$this->auth->deleteToken($this->session->userdata('backToken'));
		$this->session->sess_destroy();
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'success' => true
		];
		echo json_encode($reponse);
	}
}
