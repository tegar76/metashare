<?php

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home', true);
	}

	public function index()
	{
		$data['specials'] = $this->home->getDesginByCategory('special', 8);
		$data['standards'] = $this->home->getDesginByCategory('standard', 8);
		$data['basics'] = $this->home->getDesginByCategory('basic', 8);
		$data['title'] = 'Metashare Marketplace';
		$data['content'] = 'marketplace/contents/home/v_home';
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
