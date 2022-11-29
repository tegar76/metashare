<?php

class Testimoni extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Testimoni',
			'content' => 'marketplace/contents/testimoni/v_testimoni'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
