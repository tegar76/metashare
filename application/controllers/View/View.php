<?php

class View extends CI_Controller
{
	public function viewImg()
	{
		$data['title'] = 'View Image';
		$this->load->view('view/v_img', $data, FALSE);
	}

}

?>