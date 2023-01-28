<?php

class PreviewUndangan extends CI_Controller
{
	public function demo()
	{
		$data = [
			'title' => 'Demo',
		];
		$this->load->view('preview_undangan/demo/v_demo', $data, FALSE);
	}

    public function pratinjau()
	{
		$data = [
			'title' => 'Pratinjau',
		];
		$this->load->view('preview_undangan/pratinjau/v_pratinjau', $data, FALSE);
	}

}
