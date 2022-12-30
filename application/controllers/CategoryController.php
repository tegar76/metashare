<?php

class CategoryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home', true);
	}

	public function index()
	{
		$data['category'] = '';
		$data['model'] = array();
		if ($_REQUEST) {
			$category = $this->input->get('val');
			$data['category'] = $category;
			$data['model'] = $this->home->getDesginByCategory($category, 10);
		}
		$data['title'] = 'Kategori Undangan';
		$data['content'] = 'marketplace/contents/kategori/v_kategori';
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
