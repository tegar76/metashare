<?php

class Profile extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Profile';
		$data['content'] = 'admin/contents/profile/v_profile';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

    public function editPassword()
	{
		$data['title'] = 'Edit Password';
		$data['content'] = 'admin/contents/profile/v_edit_password';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

    public function editProfile()
	{
		$data['title'] = 'Edit Profile';
		$data['content'] = 'admin/contents/profile/v_edit_profile';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
