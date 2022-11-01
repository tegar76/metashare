<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel', 'auth', true);
	}

	public function checkToken()
	{
		if ($this->session->userdata('backToken')) {
			if ($this->auth->checkToken($this->session->userdata('backToken'))) {
				redirect('su-admin/dashboard');
			} else {
				$this->session->unset_userdata('backToken');
				redirect('su-admin/logout');
			}
		}
	}

	public function index()
	{
		$this->checkToken();
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
			$this->load->view('super_admin/contents/login/v_login', $data, FALSE);
		} else {
			$this->process();
		}
	}

	public function process()
	{
		$data = $this->input->post();
		$su_admin = $this->auth->getSuperAdmin($data['username']);
		if ($su_admin) {
			if (password_verify($data['password'], $su_admin->password)) {
				$sess_ = [
					'fullName' => $su_admin->name,
					'email' 	=> $su_admin->email,
					'backToken' => crypt($su_admin->name, ''),
					'level'		=> $su_admin->level,
					'logged_in'	=> true
				];
				$this->session->set_userdata($sess_);
				$this->auth->registToken($forToken = ['access_token' => $sess_['backToken']]);
				sweetAlert("Selamat Datang $su_admin->name", "Semoga hari anda menyenangkan :)", "success");
				redirect('su-admin/dashboard');
			} else {
				$this->session->set_flashdata('message', 'password salah');
				$this->load->view('super_admin/contents/login/v_login', $data, FALSE);
			}
		} else {
			sweetAlert("Login Gagal", "Akun admin tidak tersedia", "error");
			redirect('su-admin/login');
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

/* End of file Auth.php */
/* Location: ./application/controllers/SuperAdmin/Auth.php */
