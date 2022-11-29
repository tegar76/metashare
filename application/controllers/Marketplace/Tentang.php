<?php

class Tentang extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Tentang Kami',
			'content' => 'marketplace/contents/tentang/v_tentang'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
