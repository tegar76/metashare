<?php

class Testing extends CI_Controller
{
	public function basic()
	{
		return $this->load->view('model_undangan/demo/tema_1_basic');
	}

	public function standard()
	{
		return $this->load->view('model_undangan/demo/ST_0006_demo');
	}

	public function special()
	{
		return $this->load->view('model_undangan/demo/SP_0005_demo');
	}
}
