<?php

class Tema extends CI_Controller
{
	public function tema1Special()
	{
		$this->load->view('testing/tema1_special', FALSE);
	}

	public function tema1Standard()
	{
		$this->load->view('testing/tema1_standard', FALSE);
	}

	public function tema2()
	{
		$this->load->view('testing/tema2', FALSE);
	}
}
