<?php

class Login extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Login Super Admin';
		$this->load->view('super_admin/contents/login/v_login', $data, FALSE);
	}

}

?>