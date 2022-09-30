<?php

class PreviewModelUndangan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'PreviewModelUndangan';
		$this->load->view('preview_model_undangan/v_model_a', $data, FALSE);
	}

}

?>