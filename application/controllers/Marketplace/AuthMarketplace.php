<?php

class AuthMarketplace extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Login Marketplace';
		$this->load->view('marketplace/contents/auth/v_login', $data, FALSE);
	}

	public function signUp()
	{
		$data['title'] = 'Sign Up Marketplace';
		$this->load->view('marketplace/contents/auth/v_signup', $data, FALSE);
	}
}
