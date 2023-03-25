<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
		checkSuperAdmin();
	}

	public function index()
	{
		if (isset($_GET['code']) and !empty($_GET['code'])) {
			$code = $_GET['code'];
			$detail = $this->master->getDetailPenugasan($code);
			if ($detail) {
				// status undangan
				if ($detail->t_desc == 0) {
					$data['desc'] = '<td class="text-danger">Belum Dikerjakan</td>';
				} elseif ($detail->t_desc == 1) {
					$data['desc'] = '<td class="text-warning">Proses Pengerjaan</td>';
				} elseif ($detail->t_desc == 2) {
					$data['desc'] = '<td class="text-success">Sudah Dikerjakan</td>';
				}
				// get invitation info
				$undangan = $this->db->query("SELECT invitation_id as id, slug FROM invitation WHERE code='$detail->t_code'")->row();
				$data['invite'] = null;
				$data['slug'] = null;
				if (!empty($undangan)) {
					$data['invite'] = $undangan->id;
					$data['slug'] = $undangan->slug;
				}
				// parsing data ke view
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
					$invt['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
					$new_invt[] = $invt;
				}
				$data['invite'] = $new_invt;
			}
			$total_data = array(
				'admin' => $this->master->getRowData('admin', ['level' => 'admin', 'status' => 1]),
				'customer' => $this->master->getRowData('customer', []),
				'order' => $this->master->getRowData('transaction', ['admin_id' => 0]),
				'model' => $this->master->getRowData('model_invitation', [])
			);
			$data['total'] = $total_data;
			$data['title'] = 'Dashboard Super Admin';
			$data['content'] = 'super_admin/contents/dashboard/v_dashboard';
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		}
	}
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/SuperAdmin/Dashboard.php */
