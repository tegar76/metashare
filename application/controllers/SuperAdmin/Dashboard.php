<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		if (isset($_GET['code'])) {
			$code = $_GET['code'];
			$detail = $this->master->getDetailPenugasan($code);
			var_dump($detail);
			die;
		}
		$nomor	= 1;
		$invite	= $this->master->getDataPenugasan();
		$data['invite'] = array();
		if ($invite) {
			foreach ($invite as $row => $value) {
				$invt['nomor'] = $nomor++;
				$invt['code'] = $value->code;
				$invt['date'] = date('d-m-Y H:i', strtotime($value->date)) . " WIB";
				$invt['customer'] = $value->customer;
				$invt['category'] = $value->category;
				$invt['model'] = $value->model;
				$invt['admin'] = $value->admin;
				if ($value->desc == 0) {
					$desc = 'Belum Dikerjakan';
				} elseif ($value->desc == 1) {
					$desc = 'Proses Pengerjaan';
				} elseif ($value->desc == 2) {
					$desc = 'Sudah Dikerjakan';
				}
				$invt['desc'] = $desc;
				if ($value->status < 1) {
					$status = 'Tidak Aktif';
				} else {
					$status = 'Aktif';
				}
				$invt['status'] = $status;
				$new_invt[] = $invt;
			}
			$data['invite'] = $new_invt;
		}
		var_dump($data);
		die;
		$data['title'] = 'Dashboard Super Admin';
		$data['content'] = 'super_admin/contents/dashboard/v_dashboard';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}
}
