<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		$data['title'] = 'Profile';
		$data['content'] = 'admin/contents/profile/v_profile';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update_password()
	{
		$data['title'] = 'Edit Password';
		$data['content'] = 'admin/contents/profile/v_edit_password';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update_profile()
	{
		$data['title'] = 'Edit Profile';
		$data['content'] = 'admin/contents/profile/v_edit_profile';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
