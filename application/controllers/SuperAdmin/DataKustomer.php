<?php

class DataKustomer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function index()
	{
		$data['title'] = 'Data Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_data_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detail()
	{
		$data['title'] = 'Detail Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_detail_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function add()
	{
		$data['title'] = 'Tambah Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_tambah_kustomer';
		$data['invitation'] = $this->master->getInvitation();
		$data['admin'] = $this->master->getDataAdmin();
		$this->form_validation->set_rules([
			[
				'field' => 'name',
				'label' => 'Nama Admin',
				'rules' => 'trim|required|xss_clean|min_length[4]|max_length[45]',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'min_length' => '{field} terlalu pendek (minimal 4 karakter)',
					'max_length' => '{field} terlalu panjang (maksimal 45 karakter)'
				]
			],
			[
				'field' => 'phone',
				'label' => 'Nomor Telepon',
				'rules' => 'trim|required|xss_clean|min_length[8]|max_length[16]|numeric',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
					'max_length' => '{field} terlalu panjang (maksimal 16 karakter)',
					'numeric' => '{field} harus berupa angka'
				]
			],
			[
				'field' => 'email',
				'label' => 'Alamat Email',
				'rules' => 'trim|required|xss_clean|valid_email|is_unique[admin.email]',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'valid_email' => '{field} yang anda masukan harus valid',
					'is_unique' => '{field} sudah digunakan, gunakan alamat email lain'
				]
			],
			[
				'field' => 'model_undangan',
				'label' => 'Model Undangan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'admin',
				'label' => 'Admin',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			]
		]);
		if (empty($_FILES['bukti_bayar']['name'])) {
			$this->form_validation->set_rules('bukti_bayar', 'Bukti Pembayaran', 'required');
		}
		if ($this->form_validation->run() == false) {
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		} else {
			var_dump($_POST);
			die;
		}
	}

	public function update()
	{
		$data['title'] = 'Edit Kustomer';
		$data['content'] = 'super_admin/contents/data_kustomer/v_edit_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detail_invitation()
	{
		$id = $this->input->get('id');
		$model = $this->db->get_where('model_invitation', ['model_id' => $id])->row();
		$result = array(
			'jenis' => $model->type,
			'kategori' => $model->category,
			'harga' => $model->price
		);
		echo json_encode($result);
	}
}
