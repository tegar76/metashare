<?php

class MasterData extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
	}

	public function model_undangan()
	{
		$data['title'] = 'Data Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/v_data_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahModelUndangan()
	{
		$data['title'] = 'Tambah Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/v_tambah_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function editModelUndangan()
	{
		$data['title'] = 'Edit Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/v_edit_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	# Master Data Admin
	public function data_admin()
	{
		$no = 1;
		$admin = $this->master->getDataAdmin();
		$data['admin'] = array();
		if ($admin) {
			foreach ($admin as $row => $value) {
				$adm['nomor'] = $no++;
				$adm['code'] = $value->code;
				$adm['name'] = $value->name;
				$adm['phone'] = $value->phone;
				$adm['address'] = $value->address;
				$adm['status'] =  ($value->status == 0) ? 'Tidak Aktif' : 'Aktif';
				$adm['created'] = date('d-m-Y H:i', strtotime($value->create_time)) . ' WIB';
				$adm['updated'] = ($value->create_time != $value->update_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . ' WIB' : '-';
				$data_admin[] = $adm;
			}
			$data['admin'] = $data_admin;
		}
		$data['title'] = 'Data Admin';
		$data['content'] = 'super_admin/contents/master_data/v_data_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detail_admin()
	{
		$code = $this->input->get('code');
		$admin = $this->master->getAdminByCode($code);
		if ($admin) {
			$data['admin'] = $admin;
			$data['title'] = 'Detail Admin ' . (!empty($admin)) ? $admin->name : '';
			$data['content'] = 'super_admin/contents/master_data/v_detail_admin';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambah_admin()
	{
		$data['title'] = 'Tambah Admin';
		$data['content'] = 'super_admin/contents/master_data/v_tambah_admin';
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
				'field' => 'address',
				'label' => 'Alamat',
				'rules' => 'trim|required|xss_clean|min_length[8]|max_length[200]',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
					'max_length' => '{field} terlalu panjang (maksimal 200 karakter)',
				]
			]
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		} else {
			$admin = array(
				'code'	=> $this->master->createCodeAdmin(),
				'name'	=> htmlspecialchars($this->input->post('name', true)),
				'phone'	=> htmlspecialchars($this->input->post('phone', true)),
				'email'	=> htmlspecialchars($this->input->post('email', true)),
				'address'	=> htmlspecialchars($this->input->post('address', true))
			);
			$this->master->insertAdmin($admin);
			sweetAlert("Berhasil", "Data admin berhasil ditambahkan", "success");
			redirect('su-admin/master-data/data_admin');
		}
	}

	public function update_admin($code = false)
	{
		$admin = $this->master->getAdminByCode($code);
		if ($code == false or empty($admin)) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$data['admin'] = $admin;
			$data['title'] = 'Edit Admin';
			$data['content'] = 'super_admin/contents/master_data/v_edit_admin';
			if (isset($_POST['update'])) {

				if ($data['admin']->email != $this->input->post('email_update', true)) {
					$rules = 'trim|required|xss_clean|valid_email|is_unique[admin.email]';
					$errors = [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'valid_email' => '{field} yang anda masukan harus valid',
						'is_unique' => '{field} sudah digunakan, gunakan alamat email lain'
					];
				} else {
					$rules = 'trim|required|xss_clean|valid_email';
					$errors = [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'valid_email' => '{field} yang anda masukan harus valid',
					];
				}

				$this->form_validation->set_rules([
					[
						'field' => 'name_update',
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
						'field' => 'phone_update',
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
						'field' => 'email_update',
						'label' => 'Alamat Email',
						'rules' => $rules,
						'errors' => $errors
					],
					[
						'field' => 'address_update',
						'label' => 'Alamat',
						'rules' => 'trim|required|xss_clean|min_length[8]|max_length[200]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 200 karakter)',
						]
					],
					[
						'field' => 'status',
						'label' => 'Status Admin',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|xss_clean|min_length[8]',
						'errors' => [
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek'
						]
					],
					[
						'field' => 'conf_pass',
						'label' => 'Konfirmasi Password',
						'rules' => 'trim|xss_clean|min_length[8]|matches[password]',
						'errors' => [
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek',
							'matches' => '{field} tidak sesuai'
						]
					],
				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
				} else {
					$pass	= htmlspecialchars($this->input->post('conf_pass', true));
					$newpass = password_hash($pass, PASSWORD_DEFAULT);
					if ($admin->password != $newpass) {
						$this->db->set('password', $newpass);
					}
					$admin = array(
						'name'	=> htmlspecialchars($this->input->post('name_update', true)),
						'phone'	=> htmlspecialchars($this->input->post('phone_update', true)),
						'email'	=> htmlspecialchars($this->input->post('email_update', true)),
						'address' => htmlspecialchars($this->input->post('address_update', true)),
						'status' => htmlspecialchars($this->input->post('status', true)),
						'update_time' => date('Y-m-d H:i:s'),
					);

					$this->db->set($admin);
					$this->db->where('admin_id', $this->input->post('id_admin', true));
					$this->db->update('admin');
					sweetAlert("Berhasil", "Data admin berhasil diupdate", "success");
					redirect('su-admin/master-data/data_admin');
				}
			}
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function delete_admin()
	{
		$code = $this->input->post('code', true);
		$this->db->delete('admin', ['code' => $code]);
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus data admin',
			'success' => true
		];
		echo json_encode($reponse);
	}
}
