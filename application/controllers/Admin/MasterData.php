<?php

class MasterData extends CI_Controller
{
	public function dataModelUndangan()
	{
		$data['title'] = 'Data Model Undangan';
		$data['content'] = 'admin/contents/master_data/data_model_undangan/v_data_model_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function dataAdmin()
	{
		$data['title'] = 'Data Admin';
		$data['content'] = 'admin/contents/master_data/data_admin/v_data_admin';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detailAdmin()
	{
		$data['title'] = 'Detail Admin';
		$data['content'] = 'admin/contents/master_data/data_admin/v_detail_admin';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}


}

?>