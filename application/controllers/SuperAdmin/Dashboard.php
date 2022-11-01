<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		checkSuperAdmin();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		if (isset($_GET['code']) and !empty($_GET['code'])) {
			$code = $_GET['code'];
			$detail = $this->master->getDetailPenugasan($code);
			if ($detail) {
				if ($detail->t_desc == 0) {
					$data['desc'] = '<td class="text-danger">Belum Dikerjakan</td>';
				} elseif ($detail->t_desc == 1) {
					$data['desc'] = '<td class="text-warning">Proses Pengerjaan</td>';
				} elseif ($detail->t_desc == 2) {
					$data['desc'] = '<td class="text-success">Sudah Dikerjakan</td>';
				}
				$data['detail'] = $detail;
				$data['title'] = 'Detail Penugasan';
				$data['content'] = 'super_admin/contents/penugasan/v_detail_penugasan';
			} else {
				$data['title'] = '404 Not Found';
				$data['content'] = 'errors/contents/error_404';
			}
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		} else {
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
						$cls = 'text-danger';
						$desc = 'Belum Dikerjakan';
					} elseif ($value->desc == 1) {
						$cls = 'text-warning';
						$desc = 'Proses Pengerjaan';
					} elseif ($value->desc == 2) {
						$cls = 'text-success';
						$desc = 'Sudah Dikerjakan';
					}
					$invt['clss'] = $cls;
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
			$data['title'] = 'Dashboard Super Admin';
			$data['content'] = 'super_admin/contents/dashboard/v_dashboard';
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		}
	}
}
