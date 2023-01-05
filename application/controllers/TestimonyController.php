<?php

class TestimonyController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home', true);
	}

	public function index()
	{
		$data['title'] = 'Testimony';
		$data['content'] = 'marketplace/contents/testimoni/v_testimoni';
		$testimony = $this->home->getTestimony()->result();
		$data['testimony'] = array();
		if ($testimony) {
			foreach ($testimony as $test) {
				$row['name'] = $test->name;
				$row['img'] = ($test->image == 'default.jpg') ?  base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg') : base_url('storage/profile_customer/' . $test->image);
				$row['text'] = $test->message;
				$row['model'] = $test->model;
				$row['date'] = date('Y-m-d H:i:s');
				$row['id'] = $test->id;
				$new[] = $row;
			}
			$data['testimony'] = $new;
		}
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
