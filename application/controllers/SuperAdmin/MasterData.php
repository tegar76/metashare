<?php

class MasterData extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
		checkSuperAdmin();
	}

	public function model_undangan()
	{
		if (isset($_GET['category']) and !empty($_GET['category'])) {
			$category = $_GET['category'];
			$model = $this->master->getUndanganByCategory($category);
			$data['model'] = array();
			if (!empty($model)) {
				foreach ($model as $key => $value) {
					$val['id'] = $value->model_id;
					$val['cover_1'] = base_url('storage/model_undangan_sampul/') . $value->cover_1;
					$val['cover_2'] = base_url('storage/model_undangan_sampul/') . $value->cover_2;
					$val['name'] = $value->name;
					$val['type'] = $value->type;
					$val['category'] = $value->category;
					$val['price'] = $value->price;
					$val['view'] = $value->view_model;
					$val['create'] = date('d-m-Y H:i', strtotime($value->create_time)) . " WIB";
					$val['update'] = ($value->update_time != $value->create_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . " WIB" : '-';
					$val['order'] = $this->master->getSumOrder('model_id', $value->model_id);
					$result[] = $val;
				}
				$data['model'] = $result;
			}
		} else {
			$model = $this->master->getAllModelUndangan();
			$data['model'] = array();
			if (!empty($model)) {
				foreach ($model as $key => $value) {
					$val['id'] = $value->model_id;
					$val['cover_1'] = base_url('storage/model_undangan_sampul/') . $value->cover_1;
					$val['cover_2'] = base_url('storage/model_undangan_sampul/') . $value->cover_2;
					$val['name'] = $value->name;
					$val['type'] = $value->type;
					$val['category'] = $value->category;
					$val['price'] = $value->price;
					$val['view'] = $value->view_model;
					$val['create'] = date('d-m-Y H:i', strtotime($value->create_time)) . " WIB";
					$val['update'] = ($value->update_time != $value->create_time) ? date('d-m-Y H:i', strtotime($value->update_time)) . " WIB" : '-';
					$val['order'] = $this->master->getSumOrder('model_id', $value->model_id);
					$result[] = $val;
				}
				$data['model'] = $result;
			}
		}
		$data['title'] = 'Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_data_model_undangan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambah_model()
	{
		$data['title'] = 'Tambah Model Undangan';
		$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_tambah_model_undangan';
		$this->form_validation->set_rules([
			[
				'field' => 'type',
				'label' => 'Jenis Undangan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}'
				]
			],
			[
				'field' => 'category',
				'label' => 'Kategori Undangan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'model_name',
				'label' => 'Nama Model',
				'rules' => 'trim|required|xss_clean|min_length[4]|max_length[45]',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'min_length' => '{field} terlalu pendek (minimal 4 karakter)',
					'max_length' => '{field} terlalu panjang (maksimal 45 karakter)'
				]
			],
		]);
		if (empty($_FILES['cover01']['name']) or empty($_FILES['cover02']['name'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'cover01',
					'label' => 'Sampul Undangan',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'cover02',
					'label' => 'Cover Undangan',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				]
			]);
		}
		if ($this->form_validation->run() == false) {
			$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
		} else {
			$this->process_upload_cover();
			sweetAlert("Berhasil", "Data model berhasil ditambahkan", "success");
			redirect('su-admin/master/model_undangan?category=' . $this->input->post('category'));
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function process_upload_cover()
	{
		$this->db->trans_start();
		$uploadCover01 = $_FILES['cover01']['name'];
		if ($uploadCover01) {
			$this->imageConf('model_undangan_sampul');
			$this->check_storage('model_undangan_sampul');
			if (!$this->upload->do_upload('cover01')) :
				sweetAlert('Oopppsss', $this->upload->display_errors(), 'error');
				redirect('su-admin/master/tambah_model');
			else :
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 270, 'height' => 378];
				$this->compreesImage('model_undangan_sampul', $dataUpload['file_name'], $resolution);
				$this->db->set('cover_1',  $dataUpload['file_name']);
			endif;
		}

		$uploadCover02 = $_FILES['cover02']['name'];
		if ($uploadCover02) {
			$this->imageConf('model_undangan_sampul');
			$this->check_storage('model_undangan_sampul');
			if (!$this->upload->do_upload('cover02')) :
				sweetAlert('Oopppsss', $this->upload->display_errors(), 'error');
				redirect('su-admin/master/tambah_model');
			else :
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 270, 'height' => 378];
				$this->compreesImage('model_undangan_sampul', $dataUpload['file_name'], $resolution);
				$this->db->set('cover_2', $dataUpload['file_name']);
			endif;
		}

		$insertData = array(
			'name' => htmlspecialchars($this->input->post('model_name', true)),
			'type' => htmlspecialchars($this->input->post('type', true)),
			'category' => htmlspecialchars($this->input->post('category', true)),
			'price' => htmlspecialchars($this->input->post('price', true)),
			'view_model' => htmlspecialchars($this->input->post('code_model')) . rand(1, 99999),
		);
		$this->db->set($insertData);
		$this->db->insert('model_invitation');
		$this->db->trans_complete();
	}

	public function imageConf($dirName = NULL)
	{
		$conf['upload_path']   = './storage/' . $dirName . '/';
		$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$conf['max_size']      = 2000;
		$conf['overwrite']     = TRUE;
		$conf['encrypt_name'] = TRUE;
		$this->load->library('upload', $conf);
	}

	public function compreesImage($dirName, $fileName, $resolution)
	{
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = './storage/' . $dirName . '/' . $fileName;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['width']     = $resolution['width'];
		$config['height']   = $resolution['height'];

		$this->image_lib->clear();
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}

	public function check_storage($dir)
	{
		if (!is_dir('storage')) {
			mkdir('./storage', 0777, true);
		}

		$dir_exist = true;
		if (!is_dir('storage/' . $dir)) {
			mkdir('./storage/' . $dir, 0777, true);
			$dir_exist = false; // dir not exist
		}
		return $dir_exist;
	}

	public function update_model($id = false)
	{
		$model = $this->master->getModelUndanganById($id);
		if ($id == false or empty($model)) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$data['model'] = $model;
			$data['title'] = 'Edit Model Undangan';
			$data['content'] = 'super_admin/contents/master_data/data_model_undangan/v_edit_model_undangan';
			if ($_REQUEST) {
				$this->form_validation->set_rules([
					[
						'field' => 'category_update',
						'label' => 'Kategori Undangan',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'model_name_update',
						'label' => 'Nama Model',
						'rules' => 'trim|required|xss_clean|min_length[4]|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 4 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)'
						]
					],
				]);
			}
			if ($this->form_validation->run() == false) {
				$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
			} else {
				$this->process_update_model();
				sweetAlert("Berhasil", "Data model berhasil diupdate", "success");
				redirect('su-admin/master/model_undangan?category=' . $this->input->post('category_update'));
			}
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function process_update_model()
	{
		$id = $this->input->post('id');
		$model = $this->master->getModelUndanganById($id);
		$this->db->trans_start();
		$updateCover01 = $_FILES['cover01_update']['name'];
		if ($updateCover01) {
			$this->imageConf('model_undangan_sampul');
			$this->check_storage('model_undangan_sampul');
			if (!$this->upload->do_upload('cover01_update')) :
				sweetAlert('Oopppsss', $this->upload->display_errors(), 'error');
				redirect('su-admin/master/update_model/' . $id);
			else :
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 270, 'height' => 378];
				$this->compreesImage('model_undangan_sampul', $dataUpload['file_name'], $resolution);
				if ($model->cover_1 != 'default_1.svg') {
					@unlink(FCPATH . './storage/model_undangan_sampul/' . $model->cover_1);
				}
				$this->db->set('cover_1',  $dataUpload['file_name']);
			endif;
		}

		$updateCover02 = $_FILES['cover02_update']['name'];
		if ($updateCover02) {
			$this->imageConf('model_undangan_sampul');
			$this->check_storage('model_undangan_sampul');
			if (!$this->upload->do_upload('cover02_update')) :
				sweetAlert('Oopppsss', $this->upload->display_errors(), 'error');
				redirect('su-admin/master/update_model/' . $id);
			else :
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 270, 'height' => 378];
				$this->compreesImage('model_undangan_sampul', $dataUpload['file_name'], $resolution);
				if ($model->cover_2 != 'default_2.svg') {
					@unlink(FCPATH . './storage/model_undangan_sampul/' . $model->cover_2);
				}
				$this->db->set('cover_2', $dataUpload['file_name']);
			endif;
		}

		$update = array(
			'name' => htmlspecialchars($this->input->post('model_name_update', true)),
			'type' => htmlspecialchars($this->input->post('type_update', true)),
			'category' => htmlspecialchars($this->input->post('category_update', true)),
			'price' => htmlspecialchars($this->input->post('price', true)),
			'update_time' => date('Y-m-d H:i:s')
		);
		$this->db->set($update);
		$this->db->where(['model_id' => $this->input->post('id')]);
		$this->db->update('model_invitation');
		$this->db->trans_complete();
	}

	public function delete_model()
	{
		$id = $this->input->post('id', true);
		$model = $this->db->get_where('model_invitation', ['model_id' => $id])->row();
		if (!empty($model)) {
			@unlink(FCPATH . './storage/model_undangan_sampul/' . $model->cover_1);
			@unlink(FCPATH . './storage/model_undangan_sampul/' . $model->cover_2);
		}
		$this->db->delete('model_invitation', ['model_id' => $id]);
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus data model undangan',
			'success' => true
		];
		echo json_encode($reponse);
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
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_data_admin';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detail_admin()
	{
		$code = $this->input->get('code');
		$admin = $this->master->getAdminByCode($code);
		if ($admin) {
			$data['admin'] = $admin;
			$history = $this->master->getHistoryAdmin($admin->code)->result();
			$data['history'] = array();
			$nomor = 1;
			if ($history) {
				foreach ($history as $row) {
					$result['nomor'] = $nomor++;
					$result['code'] = $row->t_code;
					$result['date'] = date('d-m-Y H:i', strtotime($row->t_date));
					$result['customer'] = $row->cs_name;
					$result['type'] = $row->m_type;
					$result['category'] = $row->m_category;
					$result['model'] = $row->m_name;
					$result['admin'] = $row->adm_name;
					if ($row->t_desc == 0) {
						$cls = 'text-danger';
						$desc = 'Belum Dikerjakan';
					} elseif ($row->t_desc == 1) {
						$cls = 'text-warning';
						$desc = 'Proses Pengerjaan';
					} elseif ($row->t_desc == 2) {
						$cls = 'text-success';
						$desc = 'Sudah Dikerjakan';
					}
					$result['clss'] = $cls;
					$result['desc'] = $desc;
					$result['status'] = ($row->t_status < 1) ? 'Tidak Aktif' : 'Aktif';
					$data_history[] = $result;
				}
				$data['history'] = $data_history;
			}
			$data['title'] = 'Detail Admin ' . (!empty($admin)) ? $admin->name : '';
			$data['content'] = 'super_admin/contents/master_data/data_admin/v_detail_admin';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function tambah_admin()
	{
		$data['title'] = 'Tambah Admin';
		$data['content'] = 'super_admin/contents/master_data/data_admin/v_tambah_admin';
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
			redirect('su-admin/master/data_admin');
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
			$data['content'] = 'super_admin/contents/master_data/data_admin/v_edit_admin';
			if (isset($_POST['update'])) {
				if ($data['admin']->email != $_POST['email_update']) {
					$rules = 'trim|required|xss_clean|valid_email|is_unique[admin.email]';
					$errors = [
						'is_unique' => '{field} sudah digunakan, gunakan alamat email lain'
					];
				} else {
					$rules = 'trim|required|xss_clean|valid_email';
					$errors = [];
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
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'valid_email' => '{field} yang anda masukan harus valid',
							$errors
						]
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
						'field' => 'status_update',
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
						'status' => htmlspecialchars($this->input->post('status_update', true)),
						'update_time' => date('Y-m-d H:i:s'),
					);
					$this->db->set($admin);
					$this->db->where('admin_id', $this->input->post('id_admin', true));
					$this->db->update('admin');
					sweetAlert("Berhasil", "Data admin berhasil diupdate", "success");
					redirect('su-admin/master/data_admin');
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

	//  Master Data Customer
	public function customer()
	{
		$no = 1;
		$customer = $this->master->getDataCustomer()->result();
		$data['customer'] = array();
		if ($customer) {
			foreach ($customer as $row => $value) {
				$cus['nomor'] = $no++;
				$cus['name'] = $value->name;
				$cus['phone'] = $value->phone;
				$cus['email']  = $value->name;
				$cus['order']  = $this->master->getSumOrder('cus_id', $value->cus_id);
				$cus['img']  = ($value->image == 'default.jpg') ? base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg') : base_url('storage/profile_customer/' . $value->image);
				$cus['create']  = date('d-m-Y H:i', strtotime($value->create_time)) . ' WIB';
				$cus['update'] = ($value->update_time != null) ? date('d-m-Y H:i', strtotime($value->update_time)) . ' WIB' : '-';
				$cus['id'] = $value->cus_id;
				$new_cs[] = $cus;
			}
			$data['customer'] = $new_cs;
		}
		$data['title'] = 'Data Kustomer';
		$data['content'] = 'super_admin/contents/master_data/data_kustomer/v_data_kustomer';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function update_customer($id = false)
	{
		$customer = $this->master->gerCustomerById($id);
		if ($id == false or empty($customer)) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$data['customer'] = $customer;
			$data['title'] = 'Edit Kustomer';
			$data['content'] = 'super_admin/contents/master_data/data_kustomer/v_edit_kustomer';
			#aksi update
			if (isset($_POST['update'])) {
				$this->form_validation->set_rules([
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
					]
				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
				} else {
					$pass	= htmlspecialchars($this->input->post('conf_pass', true));
					$newpass = password_hash($pass, PASSWORD_DEFAULT);
					if ($customer->password != $newpass) {
						$this->db->set('password', $newpass);
					}
					$this->db->set('update_time', date('Y-m-d H:i:s'));
					$this->db->where('cus_id', $this->input->post('customer_id', true));
					$this->db->update('customer');
					sweetAlert("Berhasil", "Data customer berhasil diupdate", "success");
					redirect('su-admin/master/customer');
				}
			}
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function delete_customer()
	{
		$cus_id = $this->input->post('cus_id', true);
		$this->db->delete('customer', ['cus_id' => $cus_id]);
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus data customer',
			'success' => true
		];
		echo json_encode($reponse);
	}
}


/* End of file MasterData.php */
/* Location: ./application/controllers/SuperAdmin/MasterData.php */
