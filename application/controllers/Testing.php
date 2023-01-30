<?php

class Testing extends CI_Controller
{
	public function basic()
	{
		return $this->load->view('model_undangan/demo/tema_1_basic');
	}

	public function standard()
	{
		return $this->load->view('model_undangan/demo/green-shades');
	}

	public function special()
	{
		return $this->load->view('model_undangan/demo/tema_1_special');
	}
}
