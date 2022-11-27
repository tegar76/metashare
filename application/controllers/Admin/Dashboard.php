<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['content'] = 'admin/contents/dashboard/v_dashboard';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
