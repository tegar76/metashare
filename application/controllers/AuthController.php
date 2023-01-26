<?php

class AuthController extends CI_Controller
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
				redirect(base_url());
			} else {
				$this->session->unset_userdata('backToken');
				redirect('logout');
			}
		}
	}

	public function index()
	{
		$this->checkToken();
		if ($_POST) {
			$this->login();
		} else {
			$data['title'] = 'Login Marketplace';
			$this->load->view('marketplace/contents/auth/v_login', $data, FALSE);
		}
	}

	public function login()
	{
		$data = $this->input->post();
		$user = $this->auth->getCustomerByEmail($data['email']);
		if ($user) {
			if (password_verify($data['password'], $user->password)) {
				if ($user->status != '1') {
					sweetAlert("Login Gagal", "Akun anda saat ini tidak aktif", "warning");
					redirect('login');
				} else {
					$sess_ = [
						'id' => $user->cus_id,
						'fullName' => $user->name,
						'email' 	=> $user->email,
						'phone' => $user->phone,
						'photo'	=> $user->image,
						'status' => $user->status,
						'backToken' => crypt($user->name, ''),
						'level'		=> 'customer',
						'logged_in'	=> true
					];
					$this->session->set_userdata($sess_);
					$this->auth->registToken($forToken = ['access_token' => $sess_['backToken']]);
					sweetAlert("Selamat Datang $user->name", "", "success");
					redirect(base_url());
				}
			} else {
				$this->session->set_flashdata('message', 'password salah');
				$data['title'] = 'Login Marketplace';
				$this->load->view('marketplace/contents/auth/v_login', $data, FALSE);
			}
		} else {
			sweetAlert("Login Gagal", "Akun tidak tersedia, silahkan registrasi terlebih dahulu untuk melanjutkan", "warning");
			redirect('login');
		}
	}

	public function register()
	{
		if ($_REQUEST) {
			$this->signup();
		} else {
			$data['title'] = 'Sign Up Marketplace';
			$this->load->view('marketplace/contents/auth/v_signup', $data, FALSE);
		}
	}

	public function signup()
	{
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'trim|required|min_length[3]|max_length[50]', [
			'required' => '{field} tidak boleh kosong',
			'min_length' => '{field} minimal 3 karakter',
			'max_length' => '{field} maximum 50 karakter'
		]);
		$this->form_validation->set_rules('phone', 'Nomor Telepon', 'trim|required|numeric|min_length[8]|max_length[18]', [
			'required' => '{field} tidak boleh kosong!',
			'numeric' => '{field} harus berupa angka!',
			'min_length' => '{field} minimal 8 karakter!',
			'max_length' => '{field} maximum 18 karakter!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[customer.email]', [
			'required' => '{field} tidak boleh kosong!',
			'valid_email' => '{field} yang anda masukan tidak valid!',
			'is_unique' => '{field} sudah terdaftar, gunakan email lain!'

		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]', [
			'required' => '{field} tidak boleh kosong',
			'min_length' => '{field} minimal 8 karakter',
		]);
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|min_length[8]|matches[password]', [
			'required' => '{field} tidak boleh kosong',
			'min_length' => '{field} minimal 8 karakter',
			'matches' => '{field} tidak sesuai!'
		]);
		if ($this->form_validation->run() === false) {
			$data['title'] = 'Sign Up Marketplace';
			$this->load->view('marketplace/contents/auth/v_signup', $data, FALSE);
		} else {
			$data = $this->input->post();
			$this->auth->registerCustomer($data);
			sweetAlert("Registrasi Berhasil", "Silahkan login terlebih dahulu", "success");
			redirect('login', 'refresh');
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
