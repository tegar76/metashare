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

	public function getDetailInvitation($code)
	{
		$this->db->select("
			slug,
			invitation_id as id
		");
		$this->db->where("code", $code);
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

	public function checkDataUndangan($code)
	{
		$query = $this->db->get_where('invitation', array('code' => $code));
		return $query->row();
	}

	public function insertTamuUndangan($guest, $invt_id)
	{
		$this->db->trans_start();
		$result = array();
		foreach ($guest as $key => $val) {
			$result[] = array(
				'name'   => $_POST['guest'][$key],
				'invitation_id' => $invt_id
			);
		}
		$this->db->insert_batch('invited_guest', $result);
		$this->db->trans_complete();
	}

	public function insertLoveStory($loveStory, $invt_id)
	{
		$this->db->trans_start();
		$result = array();
		foreach ($loveStory as $key => $val) {
			$result[] = array(
				'title' => $_POST['title'][$key],
				'date' => $_POST['date'][$key],
				'story' => $_POST['text'][$key],
				'invitation_id' => $invt_id
			);
		}
		$this->db->insert_batch('love_story', $result);
		$this->db->trans_complete();
	}

	public function insertGifts($gifts, $invt_id)
	{
		$this->db->trans_start();
		$result = array();
		// check folder exists 
		if (!is_dir('storage/invitations/gifts')) {
			mkdir('./storage/invitations/gifts', 0777, true);
		}

		$conf['upload_path']   = './storage/invitations/gifts/';
		$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$conf['max_size']      = 2000;
		$conf['overwrite']     = TRUE;
		$this->load->library('upload', $conf);
		$qr = count($_FILES['qr_code']['name']);
		for ($i = 0; $i < $qr; $i++) {
			$_FILES['file']['name'] = $_FILES['qr_code']['name'][$i];
			$_FILES['file']['type'] 	= $_FILES['qr_code']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['qr_code']['tmp_name'][$i];
			$_FILES['file']['error'] 	= $_FILES['qr_code']['error'][$i];
			$_FILES['file']['size'] 	= $_FILES['qr_code']['size'][$i];
			if ($this->upload->do_upload('file')) {
				$qr_code = $this->upload->data('file_name');
				$result[] = array(
					'name' => $_POST['name'][$i],
					'name_bank' => $_POST['bank'][$i],
					'number_account' => $_POST['noRek'][$i],
					'qr_code' => $qr_code,
					'invitation_id' => $invt_id
				);
			}
		}
		$this->db->insert_batch('gifts', $result);
		$this->db->trans_complete();
	}

	public function getDataUndanganByCode($code)
	{
		$query = $this->db->get_where('invitation', array('code' => $code));
		return $query->row();
	}
}
