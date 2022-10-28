<?php

class MasterData extends CI_Controller
{
	public function dataModelUndangan()
	{
		$data['title'] = 'Data Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_data_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahModelUndangan()
	{
		$data['title'] = 'Tambah Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_tambah_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editModelUndangan()
	{
		$data['title'] = 'Edit Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_edit_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function dataAdmin()
	{
		$data['title'] = 'Data Admin';
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_data_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detailAdmin()
	{
		$data['title'] = 'Detail Admin';
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_detail_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahAdmin()
	{
		$data['title'] = 'Tambah Admin';
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_tambah_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editAdmin()
	{
		$data['title'] = 'Edit Admin';
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_edit_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function dataKustomer()
	{
		$data['title'] = 'Data Kustomer';
		$data['content'] = 'super_admin/contents/master_data/data_kustomer/v_data_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editKustomer()
	{
		$data['title'] = 'Edit Kustomer';
		$data['content'] = 'super_admin/contents/master_data/data_kustomer/v_edit_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}


}

?>