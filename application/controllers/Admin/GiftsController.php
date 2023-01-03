<?php

class GiftsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
		$this->load->model('InvitationModel', 'invitation', true);
		$this->load->model('AdminModel', 'admin', true);
	}

	public function create($code)
	{
		$data['code'] = $code;
		$data['title'] = 'Tambah Berikan hadiah';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_berikan_hadiah';
		$check = $this->invitation->checkDataUndangan($code);
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/undangan/detail/' . $code);
		} else {
			if (empty($_FILES['qr_code']['name'])) {
				$this->form_validation->set_rules('qr_code[]', 'QR Code  ', 'trim|required|xss_clean');
			}
			$this->form_validation->set_rules('bank[]', 'Jenis Bank', 'trim|required|xss_clean');
			$this->form_validation->set_rules('noRek[]', 'Nomor Rekening', 'trim|required|xss_clean|numeric');
			$this->form_validation->set_rules('name[]', 'Nama Penerima', 'trim|required|xss_clean');
			if ($this->form_validation->run() === false) {
				$this->load->view('admin/layouts/wrapper', $data, false);
			} else {
				$gifts = $this->input->post('noRek', true);
				$this->invitation->insertGifts($gifts, $check->invitation_id);
				sweetAlert("Berhasil", "Hadiah berhasil di input", "success");
				redirect('admin/undangan/detail/' . $data['code']);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detail()
	{
		if (isset($_GET['code']) and isset($_GET['id'])) {
			$id = $this->input->get('id');
			$gifts = $this->db->get_where('gifts', array('invitation_id' => $id))->result();
			$data['gifts'] = array();
			if ($gifts) {
				$number = 1;
				foreach ($gifts as $gift) {
					$row['number'] = $number++;
					$row['bank'] = $gift->name_bank;
					$row['account_number'] = $gift->number_account;
					$row['name'] = $gift->name;
					$row['qr_code'] =  base_url('storage/invitations/gifts/') . $gift->qr_code;
					$row['id'] = $gift->git_id;
					$result[] = $row;
				}
				$data['gifts'] = $result;
			}
			$data['code'] = $this->input->get('code');
			$data['title'] = 'Edit Berikan hadiah';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function update($id)
	{
		$data['title'] = 'Edit Berikan Hadiah Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah_detail';
		$data['gift'] = $this->db->get_where('gifts', array('git_id' => $id))->row();
		$invtId = $data['gift']->invitation_id;
		$data['code'] = $this->db->query("SELECT code FROM invitation WHERE invitation_id='$invtId'")->row();
		if(isset($_POST['update'])) {
			$this->form_validation->set_rules('bank', 'Jenis Bank', 'trim|required|xss_clean');
			$this->form_validation->set_rules('noRek', 'Nomor Rekening', 'trim|required|xss_clean|numeric');
			$this->form_validation->set_rules('name', 'Nama Penerima', 'trim|required|xss_clean');
			if ($this->form_validation->run() === false) {
				$this->load->view('admin/layouts/wrapper', $data, false);
			} else {
				$this->invitation->updateGift();
				sweetAlert("Berhasil", "Hadiah berhasil di update", "success");
				redirect('admin/undangan/gifts/detail?code=' . $data['code']->code . '&id=' . $invtId);
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('gifts', ['git_id' => $id]);
		$response = array(
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus berikan hadiah',
			'success' => true
		);
		echo json_encode($response);
	}
	
}
