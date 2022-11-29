<?php

class RiwayatOrder extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Riwayat Order',
			'content' => 'marketplace/contents/riwayat_order/v_riwayat_order'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}

	public function detailOrder()
	{
		$data = [
			'title' => 'Detail Order',
			'content' => 'marketplace/contents/riwayat_order/v_detail_order'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}

	public function tamuUndangan()
	{
		$data = [
			'title' => 'Data Tamu Undangan',
			'content' => 'marketplace/contents/riwayat_order/v_tamu_undangan'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}

	public function pesanBahagia()
	{
		$data = [
			'title' => 'Pesan Bahagia',
			'content' => 'marketplace/contents/riwayat_order/v_pesan_bahagia'
		];
		$this->load->view('marketplace/layouts/wrapper', $data, FALSE);
	}
}
