<?php

class Penugasan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detailPenugasan()
	{
		$data['title'] = 'Detail Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_detail_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahPenugasan()
	{
		$data['title'] = 'Tambah Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_tambah_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editPenugasan()
	{
		$data['title'] = 'Edit Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_edit_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}
}
