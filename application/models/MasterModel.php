<?php

class MasterModel extends Ci_Model
{
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

	public function getAdmin()
	{
		$this->db->order_by('name', 'ASC');
		return $this->db->get('admin')->result();
	}

	public function getAdminByCode($code)
	{
		$this->db->where('code', $code);
		return $this->db->get('admin')->row();
	}

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

	public function insertAdmin(array $admin)
	{
		$this->db->insert('admin', $admin);
	}

	public function getInvitation()
	{
		$this->db->order_by('name', 'ASC');
		return $this->db->get('model_invitation')->result();
	}

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
}
