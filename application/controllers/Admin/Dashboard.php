<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
		$this->load->model('AdminModel', 'admin', true);
		$this->userAdmin = $this->admin->getAdmin();
	}

	public function index()
	{
		$nomor	= 1;
		$invite	= $this->admin->getPenugasanAdmin(['desc' => 0]);
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
				}
				$invt['clss'] = $cls;
				$invt['desc'] = $desc;
				$invt['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
				$invt['id'] = $value->id;
				$new_invt[] = $invt;
			}
			$data['invite'] = $new_invt;
		}

		$total_data = array(
			'invtNotYet' => $this->admin->getRowData(0),
			'invtProcess' => $this->admin->getRowData(1),
			'invtFinish' => $this->admin->getRowData(2),
			'cusActive' => $this->admin->getCustomerActive()->num_rows()
		);
		$data['total'] = $total_data;
		$data['title'] = 'Dashboard';
		$data['content'] = 'admin/contents/dashboard/v_dashboard';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function konfirmasi()
	{
		$id = $this->input->post('id');
		$this->db->set('desc', 1);
		$this->db->where('id', $id);
		$this->db->update('transaction');
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah mengkonfirmasi',
			'success' => true
		];
		echo json_encode($reponse);
	}
}
