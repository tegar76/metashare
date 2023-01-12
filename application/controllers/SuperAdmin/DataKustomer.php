<?php

class DataKustomer extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Data Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_data_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detailKustomer()
	{
		$data['title'] = 'Detail Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_detail_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahKustomer()
	{
		$data['title'] = 'Tambah Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_tambah_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editKustomer()
	{
		$data['title'] = 'Edit Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_edit_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}
}
