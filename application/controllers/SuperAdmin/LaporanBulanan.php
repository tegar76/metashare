<?php

// coming son
class LaporanBulanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);		
		checkSuperAdmin();
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
			$this->cetakLaporanBulanan();

			// $date = $this->input->post('date');
			// $month = date('m', strtotime($date));
			// $year = date('Y', strtotime($date));
			// $result = $this->master->getReportMonthly($month, $year);
			// var_dump($result);
			// die;
		}
	}

	public function cetakLaporanBulanan()
	{
		$date = $this->input->post('date');
		$format = $this->input->post('format_report');
		$month = date('m', strtotime($date));
		$year = date('Y', strtotime($date));
		$dateObj = DateTime::createFromFormat('!m', $month);
		$monthname = $dateObj->format('F');
		$date_report = $monthname . ' ' . $year;
		$totalData = array(
			'special' => count($this->master->getReportMonthly($month, $year, ['category' => 'special'])),
			'standard' => count($this->master->getReportMonthly($month, $year, ['category' => 'standard'])),
			'basic' => count($this->master->getReportMonthly($month, $year, ['category' => 'basic'])),
			'marketplace' => count($this->master->getReportMonthly($month, $year, ['source_order' => 'MARKETPLACE'])),
			'shopee' => count($this->master->getReportMonthly($month, $year, ['source_order' => 'shopee'])),
			'lazada' => count($this->master->getReportMonthly($month, $year, ['source_order' => 'lazada'])),
			'tokopedia' => count($this->master->getReportMonthly($month, $year, ['source_order' => 'tokopedia'])),
			'finished' => count($this->master->getReportMonthly($month, $year, ['desc' => 2])),
			'processed' => count($this->master->getReportMonthly($month, $year, ['desc' => 1])),
			'unprocessed' => count($this->master->getReportMonthly($month, $year, ['desc' => 0]))
		);
		if ($format == 'pdf') {
			$nomor	= 1;
			$result	= $this->master->getReportMonthly($month, $year);
			$data['title'] = 'Cetak Laporan Bulanan';
			$data['report'] = array();
			$data['totalRow'] = $totalData;
			$data['date_report'] = $date_report;
			$data['export_date'] = date('d-m-Y H:i');
			$data['total'] = 0;
			$total = 0;
			if ($result) {
				foreach ($result as $row => $value) {
					$report['nomor'] = $nomor++;
					$report['code'] = $value->code;
					$report['date'] = date('d-m-Y H:i', strtotime($value->date)) . " WIB";
					$report['source'] = $value->source;
					$report['customer'] = $value->customer;
					$report['type'] = $value->type;
					$report['category'] = $value->category;
					$report['model'] = $value->model;
					$report['price'] = $value->price;
					$report['admin'] = $value->admin;
					if ($value->desc == 0) {
						$desc = 'Belum Dikerjakan';
					} elseif ($value->desc == 1) {
						$desc = 'Proses Pengerjaan';
					} elseif ($value->desc == 2) {
						$desc = 'Sudah Dikerjakan';
					}
					$report['desc'] = $desc;
					$report['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
					$new_report[] = $report;
					$total += $value->price;
				}
				$data['report'] = $new_report;
				$data['total'] = $total;
			}
			$this->load->view('super_admin/contents/laporan_bulanan/v_cetak_laporan_bulanan', $data, FALSE);
		} else if ($format == 'excel') {
		}
	}
}
