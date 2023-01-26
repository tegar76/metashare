<?php

class Kategori extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Kategori Undangan',
			'content' => 'marketplace/contents/kategori/v_kategori'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}

}
