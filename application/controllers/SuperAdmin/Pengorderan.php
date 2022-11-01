<?php

class Pengorderan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pengorderan';
		$data['content'] = 'super_admin/contents/pengorderan/v_pengorderan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editPengorderan()
	{
		$data['title'] = 'Edit Pengorderan';
		$data['content'] = 'super_admin/contents/pengorderan/v_edit_pengorderan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

}
