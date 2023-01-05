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
		$data['special'] = $this->home->getDesginByCategory('special', 8);
		$data['standard'] = $this->home->getDesginByCategory('standard', 8);
		$data['basic'] = $this->home->getDesginByCategory('basic', 8);
		$data['title'] = 'Metashare Marketplace';
		$data['content'] = 'marketplace/contents/home/v_home';
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
