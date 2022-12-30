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
}
