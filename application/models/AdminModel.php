<?php

class AdminModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->idAdmin = $this->session->userdata('idAdmin');
	}

	public function getAdmin()
	{
		$query = $this->db->get_where('admin', ['admin_id' => $this->idAdmin]);
		return $query->row();
	}

	public function getRowData($desc)
	{
		$where = array(
			'admin_id' => $this->idAdmin,
			'desc' => $desc
		);
		$query	= $this->db->get_where('transaction', $where);
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	public function getCustomerActive()
	{
		$query = $this->db->get_where('customer', ['status' => 1]);
		return $query;
	}

	public function getPenugasanAdmin($where)
	{
		$this->db->select("
			transaction.id,
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
		$this->db->where('transaction.admin_id', $this->idAdmin);
		$this->db->where($where);
		$this->db->order_by("transaction.date", "DESC");
		return $this->db->get()->result();
	}
}
