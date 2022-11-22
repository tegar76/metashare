<?php

// coming son
class LaporanBulanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		$data['title'] = 'Laporan Bulanan';
		$data['content'] = 'super_admin/contents/laporan_bulanan/v_laporan_bulanan';
		$this->form_validation->set_rules([
			[
				'field' => 'date',
				'label' => 'Bulan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada kolom {field}'
				]
			],
			[
				'field' => 'format_report',
				'label' => 'Format Laporan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada kolom {field}'
				]
			]
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		} else {
			var_dump($_POST);
			die;
		}
	}

	public function cetakLaporanBulanan()
	{
		$date = $this->input->post('date');
		$format = $this->input->post('format_report');
		$month = date('m', strtotime($date));
		$year = date('Y', strtotime($date));
		if ($format == 'pdf') {
			$nomor	= 1;
			$result	= $this->master->getDataPenugasanByDate($year, $month);
			$data['report'] = array();
			if ($result) {
				foreach ($result as $row => $value) {
					$report['nomor'] = $nomor++;
					$report['code'] = $value->code;
					$report['date'] = date('d-m-Y H:i', strtotime($value->date)) . " WIB";
					$report['customer'] = $value->customer;
					$report['category'] = $value->category;
					$report['model'] = $value->model;
					$report['price'] = $value->price;
					$report['admin'] = $value->admin;
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
					$report['clss'] = $cls;
					$report['desc'] = $desc;
					$report['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
					$new_report[] = $report;
				}
			}
		} else if ($format == 'excel') {
		}
		$data['title'] = 'Cetak Laporan Bulanan';
		$this->load->view('super_admin/contents/laporan_bulanan/v_cetak_laporan_bulanan', $data, FALSE);
	}
}
