<?php

class MasterModel extends Ci_Model
{
	// function untuk menghitung jumlah row data
	public function getRowData($table = null, $where = null)
	{
		if ($table == null) {
			return false;
		}
		$query	= $this->db->get_where($table, $where);
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	// function untuk mengambil semua data transaksi customer 
	public function getCustomer()
	{
		$this->db->select("
			cs.create_time as create,
			cs.name as name_cs,
			cs.phone,
			cs.email,
			trans.transaction_id as trans_id,
			trans.active_period as act_time,
			trans.description as desc,
			trans.proof_payment proof,
			model.type,
			model.category,
			model.price,
			model.view_model as view,
			admin.name as name_adm
		");

		$this->db->from("transaction as trans");
		$this->db->join('customer as cs', 'cs.customer_id=trans.transaction_id');
		$this->db->join('model_invitation as model', 'model.model_id=trans.model_id');
		$this->db->join('admin', 'admin.admin_id=trans.admin_id');
		return $this->db->get();
	}

	// function untuk mengambil data semua admin baik super admin atau admin 
	// diurutkan berdasarkan nama secara ascending order
	public function getAdmin()
	{
		$this->db->order_by('name', 'ASC');
		return $this->db->get('admin')->result();
	}

	// function untuk mengambil data admin berdasarkan code admin
	public function getAdminByCode($code)
	{
		$this->db->where('code', $code);
		return $this->db->get('admin')->row();
	}

	//  function untuk membuat code admin otomatis
	public function createCodeAdmin()
	{
		$this->db->select('RIGHT(admin.code,3) as code', FALSE);
		$this->db->order_by('code', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('admin');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$code = intval($data->code) + 1;
		} else {
			$code = 1;
		}
		$limit = str_pad($code, 3, "0", STR_PAD_LEFT);
		$resultcode = "ADMT" . $limit;
		return $resultcode;
	}

	// function untuk input data ke tabel admin
	public function insertAdmin(array $admin)
	{
		$this->db->insert('admin', $admin);
	}

	// function untuk mengambil data model undangan 
	// diurutkan berdasarkan nama secara ascending
	public function getInvitation()
	{
		$this->db->order_by('name', 'ASC');
		return $this->db->get('model_invitation')->result();
	}

	// function untuk mengambil data admin  
	// diurutkan berdasarkan nama secara ascending
	public function getDataAdmin()
	{
		$this->db->where('level', 'admin');
		$this->db->order_by('name', 'ASC');
		return $this->db->get('admin')->result();
	}

	public function get_select2($type, $search)
	{
		if ($type == 'admin') {
			$this->db->select('admin_id, code, name, level');
			$this->db->from('admin');
			$this->db->like('code', $search);
			$this->db->like('name', $search);
			$this->db->where('level', 'admin');
			$this->db->order_by('name', 'ASC');
			$query	= $this->db->get();
			if ($query->num_rows() == null) {
				return 0;
			}
			return $query->result();
		} elseif ($type == 'invitation') {
			$this->db->select('model_id, name, type, category, price');
			$this->db->from('model_invitation');
			$this->db->like('name', $search);
			$this->db->like('type', $search);
			$this->db->like('category', $search);
			$this->db->order_by('name', 'ASC');
			$query	= $this->db->get();
			if ($query->num_rows() == null) {
				return 0;
			}
			return $query->result();
		} else {
			return false;
		}
	}

	public function getDataPenugasan()
	{
		$this->db->select("
			transaction.code,
			transaction.date,
			transaction.active,
			transaction.desc,
			transaction.status,
			customer.name as customer,
			model.category,
			model.name as model,
			admin.name as admin,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->join("admin", "admin.admin_id=transaction.admin_id");
		$this->db->order_by("transaction.date", "DESC");
		return $this->db->get()->result();
	}

	public function getDataPenugasanByDate($years, $month)
	{
		$this->db->select("
			transaction.code,
			transaction.date,
			transaction.active,
			transaction.desc,
			transaction.status,
			customer.name as customer,
			model.category,
			model.name as model,
			model.price,
			admin.name as admin,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->join("admin", "admin.admin_id=transaction.admin_id");
		$this->db->where("MONTH(transaction.date)", $month);
		$this->db->where("YEAR(transaction.date)", $years);
		$this->db->order_by("transaction.date", "DESC");
		return $this->db->get()->result();
	}

	public function getDetailPenugasan($code = null)
	{
		$this->db->select("
			customer.name as cs_name,
			customer.phone as cs_phone,
			customer.email as cs_email,
			transaction.id as t_id,
			transaction.code as t_code,
			transaction.date as t_date,
			transaction.active as t_active,
			transaction.desc as t_desc,
			transaction.status as t_status,
			transaction.proof as t_proof,
			transaction.source_order as t_source,
			model.model_id as m_id,
			model.name as m_name,
			model.type as m_type,
			model.category as m_category,
			model.price as m_price,
			model.view_model as m_view,
			admin.admin_id as adm_id,
			admin.code as adm_code,
			admin.name as adm_name,
			admin.phone as adm_phone,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->join("admin", "admin.admin_id=transaction.admin_id");
		$this->db->where('transaction.code', $code);
		return $this->db->get()->row();
	}

	public function getHistoryAdmin($code)
	{
		$this->db->select("
			customer.name as cs_name,
			transaction.code as t_code,
			transaction.date as t_date,
			transaction.desc as t_desc,
			transaction.status as t_status,
			model.name as m_name,
			model.type as m_type,
			model.category as m_category,
			admin.name as adm_name,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->join("admin", "admin.admin_id=transaction.admin_id");
		$this->db->where('admin.code', $code);
		return $this->db->get();
	}

	public function getAllModelUndangan()
	{
		$query = $this->db->get('model_invitation');
		return $query->result();
	}

	public function getUndanganByCategory($category)
	{
		$this->db->where('category', $category);
		return $this->db->get('model_invitation')->result();
	}

	public function getModelUndanganById($id)
	{
		$this->db->where('model_id', $id);
		return $this->db->get('model_invitation')->row();
	}

	public function getSumOrder(String $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->get('transaction')->num_rows();
	}

	public function getDataCustomer()
	{
		$this->db->order_by('create_time', 'desc');
		return $this->db->get('customer');
	}

	public function gerCustomerById($id)
	{
		$query = $this->db->get_where('customer', array('cus_id' => $id))->row();
		return $query;
	}

	public function getOrderanUndangan()
	{
		$this->db->select("
			transaction.code,
			transaction.date,
			customer.name as customer,
			model.type,
			model.category,
			model.name as model,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->where('admin_id', 0);
		$this->db->order_by("transaction.date", "ASC");
		return $this->db->get()->result();
	}

	public function getOrderanUndanganByCode($code)
	{
		$this->db->select("
			transaction.id,
			transaction.code,
			transaction.date,
			customer.name as customer,
			model.type,
			model.category,
			model.name as model,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->where('code', $code);
		return $this->db->get()->row();
	}

	public function getOrderanUndanganByDate($month, $years)
	{
		$this->db->select("
			transaction.code,
			transaction.date,
			customer.name as customer,
			model.type,
			model.category,
			model.name as model,
		");
		$this->db->from("transaction");
		$this->db->join("customer", "customer.cus_id=transaction.cus_id");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->where("MONTH(transaction.date)", $month);
		$this->db->where("YEAR(transaction.date)", $years);
		return $this->db->get()->result();
	}

	public function getReportMonthly($month, $years, $where = null)
	{
		$this->db->select("
			t.code,
			t.date,
			t.source_order as source,
			t.desc,
			t.status,
			c.name as customer,
			m.name as model,
			m.type,
			m.category,
			m.price,
			a.name as admin
		");
		$this->db->from('transaction as t');
		$this->db->join('customer as c', 'c.cus_id=t.cus_id');
		$this->db->join('model_invitation as m', 'm.model_id=t.model_id');
		$this->db->join('admin as a', 'a.admin_id=t.admin_id');
		$this->db->where("MONTH(t.date)", $month);
		$this->db->where("YEAR(t.date)", $years);
		if($where) {
			$this->db->where($where);
		}
		return $this->db->get()->result();
	}

	public function getCountReportData($month, $years, array $where)
	{
		$this->db->where("MONTH(t.date)", $month);
		$this->db->where("YEAR(t.date)", $years);
		$this->db->where($where);
		return $this->db->get()->num_rows();
	}
}
