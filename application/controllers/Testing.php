<?php

class Testing extends CI_Controller
{
	public function basic()
	{
		return $this->load->view('model_undangan/demo/BC_0007_demo');
	}

	public function standard()
	{
		return $this->load->view('model_undangan/demo/demo');
	}

	public function special()
	{
		return $this->load->view('model_undangan/demo/SP_0005_demo');
	}
}
