<?php

class MasterData extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function model_undangan()
	{
		if (isset($_GET['category']) and !empty($_GET['category'])) {
			$category = $_GET['category'];
			$model = $this->master->getUndanganByCategory($category);
			$data['model'] = array();
			if (!empty($model)) {
				foreach ($model as $key => $value) {
					$val['id'] = $value->model_id;
					$val['cover_1'] = base_url('storage/model_undangan_sampul/') . $value->cover_1;
					$val['cover_2'] = base_url('storage/model_undangan_sampul/') . $value->cover_2;
					$val['name'] = $value->name;
					$val['type'] = $value->type;
					$val['category'] = $value->category;
					$val['price'] = $value->price;
					$val['view'] = $value->view_model;
					$val['create'] = date('d-m-Y H:i', strtotime($value->create_time)) . " WIB";
					$val['update'] = ($value->update_time != $value->create_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . " WIB" : '-';
					$val['order'] = $this->master->getSumOrder('model_id', $value->model_id);
					$result[] = $val;
				}
				$data['model'] = $result;
			}
		} else {
			$model = $this->master->getAllModelUndangan();
			$data['model'] = array();
			if (!empty($model)) {
				foreach ($model as $key => $value) {
					$val['id'] = $value->model_id;
					$val['cover_1'] = base_url('storage/model_undangan_sampul/') . $value->cover_1;
					$val['cover_2'] = base_url('storage/model_undangan_sampul/') . $value->cover_2;
					$val['name'] = $value->name;
					$val['type'] = $value->type;
					$val['category'] = $value->category;
					$val['price'] = $value->price;
					$val['view'] = $value->view_model;
					$val['create'] = date('d-m-Y H:i', strtotime($value->create_time)) . " WIB";
					$val['update'] = ($value->update_time != $value->create_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . " WIB" : '-';
					$val['order'] = $this->master->getSumOrder('model_id', $value->model_id);
					$result[] = $val;
				}
				$data['model'] = $result;
			}
		}
		$data['title'] = 'Model Undangan';
		$data['content'] = 'admin/contents/master_data/data_model_undangan/v_data_model_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function admin()
	{
		$no = 1;
		$admin = $this->master->getDataAdmin();
		$data['admin'] = array();
		if ($admin) {
			foreach ($admin as $row => $value) {
				$adm['nomor'] = $no++;
				$adm['code'] = $value->code;
				$adm['name'] = $value->name;
				$adm['phone'] = $value->phone;
				$adm['address'] = $value->address;
				$adm['status'] =  ($value->status == 0) ? 'Tidak Aktif' : 'Aktif';
				$adm['created'] = date('d-m-Y H:i', strtotime($value->create_time)) . ' WIB';
				$adm['updated'] = ($value->create_time != $value->update_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . ' WIB' : '-';
				$data_admin[] = $adm;
			}
			$data['admin'] = $data_admin;
		}
		$data['title'] = 'Data Admin';
		$data['content'] = 'admin/contents/master_data/data_admin/v_data_admin';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detail_admin()
	{

		$code = $this->input->get('code');
		$admin = $this->master->getAdminByCode($code);
		if ($admin) {
			$data['admin'] = $admin;
			$history = $this->master->getHistoryAdmin($admin->code)->result();
			$data['history'] = array();
			$nomor = 1;
			if ($history) {
				foreach ($history as $row) {
					$result['nomor'] = $nomor++;
					$result['code'] = $row->t_code;
					$result['date'] = date('d-m-Y H:i', strtotime($row->t_date));
					$result['customer'] = $row->cs_name;
					$result['type'] = $row->m_type;
					$result['category'] = $row->m_category;
					$result['model'] = $row->m_name;
					$result['admin'] = $row->adm_name;
					if ($row->t_desc == 0) {
						$cls = 'text-danger';
						$desc = 'Belum Dikerjakan';
					} elseif ($row->t_desc == 1) {
						$cls = 'text-warning';
						$desc = 'Proses Pengerjaan';
					} elseif ($row->t_desc == 2) {
						$cls = 'text-success';
						$desc = 'Sudah Dikerjakan';
					}
					$result['clss'] = $cls;
					$result['desc'] = $desc;
					$result['status'] = ($row->t_status < 1) ? 'Tidak Aktif' : 'Aktif';
					$data_history[] = $result;
				}
				$data['history'] = $data_history;
			}
			$data['title'] = 'Detail Admin ' . (!empty($admin)) ? $admin->name : '';
			$data['content'] = 'admin/contents/master_data/data_admin/v_detail_admin';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
