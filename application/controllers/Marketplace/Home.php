<?php

class Home extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Marketplace',
			'content' => 'marketplace/contents/home/v_home'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
