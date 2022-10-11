<?php

class Errors extends CI_Controller
{
	public function error404()
	{
		$data['title'] = '404 Not Found';
		$this->load->view('errors/contents/v_error_404', $data, FALSE);
	}

}
