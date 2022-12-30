<?php

class TestimonyController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Testimony';
		$data['content'] = 'marketplace/contents/testimoni/v_testimoni';
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
