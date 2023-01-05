<?php

class Home_model extends CI_Model
{
	public function getDesginByCategory($category, $limit)
	{
		return $this->db->where('category', $category)
			->limit($limit)
			->get('model_invitation')
			->result();
	}

	public function getHistoryOrder($customer)
	{
		$this->db->select("
			transaction.code,
			transaction.active,
			transaction.desc,
			transaction.source_order as source,
			transaction.status,
			model.name as model,
			model.category,
		");
		$this->db->from("transaction");
		$this->db->join("model_invitation as model", "model.model_id=transaction.model_id");
		$this->db->order_by("transaction.date", "DESC");
		$this->db->where('cus_id', $customer);
		return $this->db->get()->result();
	}

	public function createCodeTransaksi()
	{
		$this->db->select('RIGHT(transaction.code,3) as code', FALSE);
		$this->db->order_by('code', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('transaction');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$code = intval($data->code) + 1;
		} else {
			$code = 1;
		}
		$date = date('Ymd');
		$user = $this->session->userdata('id');
		$limit = str_pad($code, 3, "0", STR_PAD_LEFT);
		$resultcode = "META" . $user . $date . $limit;
		return $resultcode;
	}

	public function getTestimony()
	{
		$this->db->select('
			test.id,
			test.message,
			test.date,
			customer.name,
			customer.image,
			design.name as model
		');
		$this->db->from('testimony as test');
		$this->db->join('customer', 'customer.cus_id=test.cus_id');
		$this->db->join('model_invitation as design', 'design.model_id=test.model_id');
		$this->db->order_by('test.date', 'DESC');
		return $this->db->get();
	}
}
