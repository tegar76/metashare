<?php

// coming son
class LaporanBulanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Laporan Bulanan';
		$data['content'] = 'super_admin/contents/laporan_bulanan/v_laporan_bulanan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function cetakLaporanBulanan()
	{
		$data['title'] = 'Cetak Laporan Bulanan';
		$this->load->view('super_admin/contents/laporan_bulanan/v_cetak_laporan_bulanan', $data, FALSE);
	}
}
