<?php

class InvitationModel extends CI_Model
{
	public function getInvitation()
	{
		$this->db->select("
			cus.username,
			cus.name,
			cus.status,
			model.name as model,
			model.type,
			model.category,
			transaction.description as desc,
			transaction.active_period as period,
			transaction.transaction_id as id
		");
		$this->db->from('transaction');
		$this->db->join('customer as cus', 'cus.customer_id=transaction.customer_id');
		$this->db->join('model_invitation as model', 'model.model_id=transaction.model_id');
		$this->db->order_by('cus.name', 'ASC');
		return $this->db->get()->result();
	}

	public function getDetailInvitation($id)
	{
		$this->db->select("
			slug,
			invitation_id as id
		");
		$this->db->where("transaction_id", $id);
		return $this->db->get("invitation")->row();
	}

	public function getInvitedGuest($id)
	{
		$this->db->where('invitation_id', $id);
		$this->db->order_by('name', 'ASC');
		return $this->db->get('invited_guest')->result();
	}

	public function getPhotoPreWedding($id)
	{
		$this->db->where('invitaion_id', $id);
		return $this->db->get('photo_gallery')->result();
	}

	public function getInvitationBySlug($slug)
	{
		$this->db->where("slug", $slug);
		return $this->db->get("invitation")->row();
	}

	public function insertMessage()
	{
		$data = $this->input->post();
		$message = array(
			'name' => $data['guest_name'],
			'message' => $data['pesan'],
			'status' => $data['konfirmasiHadir'],
			'create_time' => date('Y-m-d H:i:s'),
			'invitation_id' => $data['invt_id']
		);
		$this->db->insert('message', $message);
	}
}
