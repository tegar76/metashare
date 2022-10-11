<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard Super Admin';
		$data['content'] = 'super_admin/contents/dashboard/v_dashboard';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}
}
