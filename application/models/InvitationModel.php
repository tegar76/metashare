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
		$this->db->where('invitation_id', $id);
		return $this->db->get('photo_gallery')->result();
	}

	public function getInvitationBySlug($id, $slug)
	{
		$this->db->where("invitation_id", $id);
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
		// check folder exists 
		if (!is_dir('storage/invitations/gifts')) {
			mkdir('./storage/invitations/gifts', 0777, true);
		}

		$conf['upload_path']   = './storage/invitations/gifts/';
		$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$conf['max_size']      = 2000;
		$conf['overwrite']     = TRUE;
		$conf['encrypt_name'] = true;
		$this->load->library('upload', $conf);
		$this->upload->initialize($conf);
		$_FILES['file']['name'] = $_FILES['qr_code']['name'];
		$_FILES['file']['type'] 	= $_FILES['qr_code']['type'];
		$_FILES['file']['tmp_name'] = $_FILES['qr_code']['tmp_name'];
		$_FILES['file']['error'] 	= $_FILES['qr_code']['error'];
		$_FILES['file']['size'] 	= $_FILES['qr_code']['size'];
		if ($this->upload->do_upload('file')) {
			$qr_code = $this->upload->data('file_name');
			$result = array(
				'name' => $this->input->post('name'),
				'number_account' =>  $this->input->post('rekening'),
				'qr_code' => $qr_code,
				'invitation_id' => $invt_id,
				'bank_id' => $this->input->post('bank')
			);
			$this->db->insert('gifts', $result);
		}
		$this->db->trans_complete();
	}


	public function updateGift()
	{
		$this->db->trans_start();
		// check folder exists 
		if (!is_dir('storage/invitations/gifts')) {
			mkdir('./storage/invitations/gifts', 0777, true);
		}

		$gift = $this->db->get_where('gifts', array('id' => $this->input->post('id')))->row();

		$uploadQR = $_FILES['qr_code']['name'];
		if ($uploadQR) {
			$conf['upload_path']   = './storage/invitations/gifts/';
			$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
			$conf['max_size']      = 2000;
			$conf['overwrite']     = TRUE;
			$conf['encrypt_name'] = true;
			$this->load->library('upload', $conf);
			if ($this->upload->do_upload('qr_code')) {
				@unlink(FCPATH . './storage/invitations/gifts/' . $gift->qr_code);
				$qr_code = $this->upload->data('file_name');
				$this->db->set('qr_code', $qr_code);
			}
		}

		$update = array(
			'name' => $this->input->post('name', true),
			'number_account' => $this->input->post('noRek', true),
		);

		$this->db->set($update);
		$this->db->where('id', $this->input->post('id'))->update('gifts');
		$this->db->trans_complete();
	}

	public function getDataUndanganByCode($code)
	{
		$query = $this->db->get_where('invitation', array('code' => $code));
		return $query->row();
	}

	public function getAcaraByUndangan($type, $id)
	{
		if ($type == 'tasyakur') {
			$this->db->where('title', 'Tasyakuran');
		} else if ($type == 'akad') {
			$this->db->where('title', 'Akad Nikah');
		} else if ($type == 'resepsi') {
			$this->db->where('title', 'Resepsi Pernikahan');
		}
		$this->db->where('invitation_id', $id);
		return $this->db->get('wedding')->row();
	}

	public function getDesignUndangan($code)
	{
		$this->db->select('
			design.name,
			design.view_model as view,
			design.category,
			design.type,
			trans.active
		');
		$this->db->from('model_invitation as design');
		$this->db->join('transaction as trans', 'trans.model_id=design.model_id');
		$this->db->where('code', $code);
		return $this->db->get()->row();
	}

	public function getCategoriByCode($code)
	{
		$this->db->select('
			model.category
		');
		$this->db->from('model_invitation as model');
		$this->db->join('transaction', 'transaction.model_id=model.model_id');
		$this->db->where('code', $code);
		return $this->db->get()->row();
	}

	public function getJoinGiftBank($where)
	{
		$this->db->select('
			gifts.id,
			gifts.name as recipient,
			gifts.number_account as account,
			gifts.qr_code as qr,
			gifts.invitation_id,
			banks.name as bank,
			banks.icon,
			banks.digit
		');
		$this->db->from('gifts');
		$this->db->join('banks', 'banks.id=gifts.bank_id');
		$this->db->where($where);
		return $this->db->get();
	}
}
