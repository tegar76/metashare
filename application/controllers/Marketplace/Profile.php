<?php

class Profile extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Profile',
			'content' => 'marketplace/contents/profile/v_profile'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}

	public function editProfile()
	{
		$data = [
			'title' => 'Edit Profile',
			'content' => 'marketplace/contents/profile/v_edit_profile'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}

