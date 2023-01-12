<?php

class Undangan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		isAdminLogin();
		$this->load->model('MasterModel', 'master', true);
		$this->load->model('InvitationModel', 'invitation', true);
		$this->load->model('AdminModel', 'admin', true);
	}

	public function index()
	{
		$nomor	= 1;
		$invite	= $this->admin->getPenugasanAdmin(['desc !=' => 0]);
		$data['invite'] = array();
		if ($invite) {
			foreach ($invite as $row => $value) {
				$invt['nomor'] = $nomor++;
				$invt['code'] = $value->code;
				$invt['date'] = date('d-m-Y H:i', strtotime($value->date)) . " WIB";
				$invt['customer'] = $value->customer;
				$invt['category'] = $value->category;
				$invt['model'] = $value->model;
				$invt['admin'] = $value->admin;
				if ($value->desc == 1) {
					$cls = 'text-warning';
					$desc = 'Proses Pengerjaan';
				} elseif ($value->desc == 2) {
					$cls = 'text-success';
					$desc = 'Sudah Dikerjakan';
				}
				$invt['clss'] = $cls;
				$invt['desc'] = $desc;
				$invt['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
				$invt['id'] = $value->id;
				$new_invt[] = $invt;
			}
			$data['invite'] = $new_invt;
		}

		$data['title'] = 'Pengerjaan Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_pengerjaan_undangan';
		$this->load->view('admin/layouts/wrapper', $data, false);
	}

	public function detail($code = false)
	{
		$detail = $this->master->getDetailPenugasan($code);
		if ($code == false or empty($detail)) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			// cek detaul undangan
			if ($detail) {
				if ($detail->t_desc == 0) {
					$data['desc'] = '<td class="text-danger">Belum Dikerjakan</td>';
				} elseif ($detail->t_desc == 1) {
					$data['desc'] = '<td class="text-warning">Proses Pengerjaan</td>';
				} elseif ($detail->t_desc == 2) {
					$data['desc'] = '<td class="text-success">Sudah Dikerjakan</td>';
				}
				$data['detail'] = $detail;
			}

			// cek apakah data undangan sudah diinput atau belum
			$invt = $this->db->query("SELECT invitation_id as id, slug FROM invitation WHERE code='$detail->t_code'")->row();
			if (!empty($invt)) {
				// jika sudah ada, maka akan menampilkan data tamu undangan
				$guest = $this->invitation->getInvitedGuest($invt->id);
				$data['invtId'] = $invt->id;
				$data['guest'] = array();
				if ($guest) {
					$no = 1;
					foreach ($guest as $value) {
						$row['nomor'] = $no++;
						$row['name'] = $value->name;
						$row['create'] = date('d-m-Y H:i', strtotime($value->create_at)) . " WIB";
						$row['update'] =  ($value->create_at != $value->update_at) ? date('d-m-Y H:i', strtotime($value->update_at)) . " WIB" : '-';
						$row['id'] = $value->guest_id;
						$result[] = $row;
					}
					$data['guest'] = $result;
				}
				$data['slug'] = $invt->slug;
			} else {
				// jika belum, maka akan data tamu undangan masih kosong
				$data['slug'] = null;
				$data['invtId'] = null;
				$data['guest'] = array();
			}
			$data['title'] = 'Setting Undangan';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_setting_undangan';
		}
		$this->load->view('admin/layouts/wrapper', $data, false);
	}

	public function create_data_undangan($code = false)
	{
		$data['detail'] = $this->master->getDetailPenugasan($code);
		$data['title'] = 'Tambah Data Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_data_undangan';
		$check = $this->db->get_where('invitation', ['code' => $this->input->post('code', true)]);
		if ($check->num_rows() > 0) {
			sweetAlert("Peringatan", "Data undangan sudah diinput", "warning");
			redirect('admin/undangan/detail/' . $this->input->post('code'));
			die;
		} else {
			if ($data['detail']->m_category == 'special') {
				if (empty($_FILES['cover_img']['name'][1])) {
					$this->form_validation->set_rules('cover_img[1]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
				}
			}

			// Validasi Upload Cover
			if (empty($_FILES['cover_img']['name'][2])) {
				$this->form_validation->set_rules('cover_img[2]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi Upload Cover
			if (empty($_FILES['music_bg']['name'])) {
				$this->form_validation->set_rules('music_bg', 'Music', 'required', ['required' => 'Anda harus upload {field}']);
			}

			$this->form_validation->set_rules([
				// Validasi Nama Panggilan Mempelai Pria dan Wanita
				[
					'field' => 'groom_nickname',
					'label' => 'Nama Panggilan Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[15]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 15 karakter)',
					]
				],
				[
					'field' => 'bride_nickname',
					'label' => 'Nama Panggilan Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[15]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 15 karakter)',
					]
				],
				// Validasi Data Mempelai Pria
				[
					'field' => 'groom_name',
					'label' => 'Nama Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'groom_address',
					'label' => 'Alamat Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[75]|min_length[8]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 75 karakter)',
					]
				],
				[
					'field' => 'groom_father',
					'label' => 'Ayah Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'groom_mother',
					'label' => 'Ibu Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'groom_son',
					'label' => 'Putra Ke-',
					'rules' => 'trim|required|xss_clean|max_length[12]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 12 karakter)',
					]
				],
				[
					'field' => 'groom_ig',
					'label' => 'Instagram Mempelai Pria',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				// Validasi Data Mempelai Wanita
				[
					'field' => 'bride_name',
					'label' => 'Nama Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'bride_address',
					'label' => 'Alamat Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[75]|min_length[8]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 75 karakter)',
					]
				],
				[
					'field' => 'bride_father',
					'label' => 'Ayah Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'bride_mother',
					'label' => 'Ibu Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],
				[
					'field' => 'bride_daughter',
					'label' => 'Putri Ke-',
					'rules' => 'trim|required|xss_clean|max_length[12]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 12 karakter)',
					]
				],
				[
					'field' => 'bride_ig',
					'label' => 'Instagram Mempelai Wanita',
					'rules' => 'trim|required|xss_clean|max_length[45]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					]
				],

				// Validasi Pelaksanaan Tasyakuran
				[
					'field' => 'tanggalAcara[tasyakur]',
					'label' => 'Tanggal Tasyakuran',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'jamAcara[tasyakur]',
					'label' => 'Waktu Tasyakuran',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'alamatAcara[tasyakur]',
					'label' => 'Alamat Pelaksanaan Tasyakuran',
					'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
					]
				],
				[
					'field' => 'mapsAcara[tasyakur]',
					'label' => 'Link Google Maps Pelaksanaan Tasyakuran',
					'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
						'valid_url' => '{field} harus valid'
					]
				],
				// Validasi Waktu Pelaksanaan Akad
				[
					'field' => 'tanggalAcara[akad]',
					'label' => 'Tanggal Akad Nikah',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'jamAcara[akad]',
					'label' => 'Waktu AKad Nikah',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'alamatAcara[akad]',
					'label' => 'Alamat Pelaksanaan Akad Nikah',
					'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
					]
				],
				[
					'field' => 'mapsAcara[akad]',
					'label' => 'Link Google Maps Pelaksanaan Akad Nikah',
					'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
						'valid_url' => '{field} harus valid'
					]
				],
				// Validasi Waktu Pelaksanaan Resepsi
				[
					'field' => 'tanggalAcara[resepsi]',
					'label' => 'Tanggal Resepsi Pernikahan',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'jamAcara[resepsi]',
					'label' => 'Waktu Resepsi Pernikahan',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'alamatAcara[resepsi]',
					'label' => 'Alamat Pelaksanaan Resepsi Pernikahan',
					'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
					]
				],
				[
					'field' => 'mapsAcara[resepsi]',
					'label' => 'Link Google Maps Pelaksanaan Resepsi Pernikahan',
					'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
						'valid_url' => '{field} harus valid'
					]
				],
				// Settings Masa Aktif Undangan
				[
					'field' => 'active_date',
					'label' => 'Tanggal Masa Aktif',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
				[
					'field' => 'active_time',
					'label' => 'Jam Masa Aktif',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],

			]);
			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layouts/wrapper', $data, false);
			} else {
				$id = $this->process_data_undangan();
				$this->insert_acara($id);
				sweetAlert("Berhasil", "Data undangan telah diinput", "success");
				redirect('admin/undangan/detail/' . $this->input->post('code'));
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, false);
	}

	public function process_data_undangan()
	{
		$this->db->trans_start();
		// config upload image
		$confImg['upload_path']   = './storage/invitations/uploads/';
		$confImg['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$confImg['max_size']      = 2000;
		$confImg['overwrite']     = true;
		$confImg['encrypt_name'] = true;
		$this->load->library('upload', $confImg);
		$this->upload->initialize($confImg);
		$this->check_storage('uploads');
		// cek  kategori model undangan special
		if ($_POST['kategori'] == 'special') {
			# upload foto sampul
			if (!empty($_FILES['cover_img']['name'][1])) {
				$_FILES['file']['name'] = $_FILES['cover_img']['name'][1];
				$_FILES['file']['type'] 	= $_FILES['cover_img']['type'][1];
				$_FILES['file']['tmp_name'] = $_FILES['cover_img']['tmp_name'][1];
				$_FILES['file']['error'] 	= $_FILES['cover_img']['error'][1];
				$_FILES['file']['size'] 	= $_FILES['cover_img']['size'][1];
				if ($this->upload->do_upload('file')) {
					$upload_img = $this->upload->data();
					$this->db->set('cover_image_1', $upload_img['file_name']);
				}
			}

			# upload foto mempelai pria
			$groom_img = $_FILES['groom_img']['name'];
			if (!empty($groom_img)) {
				if ($this->upload->do_upload('groom_img')) {
					$dataUpload = $this->upload->data();
					$resolution = ['width' => 500, 'height' => 500];
					$this->compreesImage('uploads', $dataUpload['file_name'], $resolution);
					$this->db->set('groom_img', $dataUpload['file_name']);
				}
			}

			# upload foto mempelai wanita
			$bride_img = $_FILES['bride_img']['name'];
			if (isset($bride_img)) {
				if ($this->upload->do_upload('bride_img')) {
					$dataUpload = $this->upload->data();
					$resolution = ['width' => 500, 'height' => 500];
					$this->compreesImage('uploads', $dataUpload['file_name'], $resolution);
					$this->db->set('bride_img', $dataUpload['file_name']);
				}
			}
		}

		# upload foto sampul
		if (!empty($_FILES['cover_img']['name'][1])) {
			$_FILES['file']['name'] = $_FILES['cover_img']['name'][2];
			$_FILES['file']['type'] = $_FILES['cover_img']['type'][2];
			$_FILES['file']['tmp_name'] = $_FILES['cover_img']['tmp_name'][2];
			$_FILES['file']['error'] = $_FILES['cover_img']['error'][2];
			$_FILES['file']['size'] = $_FILES['cover_img']['size'][2];
			if ($this->upload->do_upload('file')) {
				$upload_img = $this->upload->data();
				$this->db->set('cover_image_2', $upload_img['file_name']);
			}
		}

		if (isset($_FILES['music_bg']['name'])) {
			$music = $_FILES['music_bg']['name'];
			$config['upload_path'] = './storage/invitations/uploads/';
			$config['allowed_types'] = 'mp3|m4a|mpg|mpeg|ogg|mp4';
			$config['max_size'] = 0;
			$config['file_name'] = $music;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!empty($_FILES['music_bg']['name'])) {
				$_FILES['file']['name'] = $_FILES['music_bg']['name'];
				$_FILES['file']['type'] 	= $_FILES['music_bg']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['music_bg']['tmp_name'];
				$_FILES['file']['error'] 	= $_FILES['music_bg']['error'];
				$_FILES['file']['size'] 	= $_FILES['music_bg']['size'];
				if ($this->upload->do_upload('file')) {
					$music = $this->upload->data('file_name');
					$this->db->set('music_bg', $music);
				}
			}
		}

		$slug = $_POST['groom_nickname'] . ' ' . $_POST['bride_nickname'];
		$slug = url_title($slug, 'dash', true);
		$data = array(
			'groom_name' => $this->input->post('groom_name', true),
			'groom_nickname' => $this->input->post('groom_nickname', true),
			'groom_address' => $this->input->post('groom_address', true),
			'groom_father' => $this->input->post('groom_father', true),
			'groom_mother' => $this->input->post('groom_mother', true),
			'groom_ig' => $this->input->post('groom_ig', true),
			'groom_son' => $this->input->post('groom_son', true),
			'bride_name' => $this->input->post('bride_name', true),
			'bride_nickname' => $this->input->post('bride_nickname', true),
			'bride_address' => $this->input->post('bride_address', true),
			'bride_father' => $this->input->post('bride_father', true),
			'bride_mother' => $this->input->post('bride_mother', true),
			'bride_ig' => $this->input->post('bride_ig', true),
			'bride_daughter' => $this->input->post('bride_daughter', true),
			'slug' => $slug,
			'code' => $this->input->post('code', true)
		);

		$this->db->set($data);
		$this->db->insert('invitation');
		$invitation_id = $this->db->insert_id();

		// update masa aktif undangan
		$active_date = $this->input->post('active_date', true);
		$active_time = $this->input->post('active_time', true);
		if ($active_date and $active_time) {
			$active = $active_date . ' ' . $active_time;
			$this->db->where('code', $this->input->post('code', true));
			$this->db->update('transaction', ['active' => $active]);
		}

		$this->db->trans_complete();
		return $invitation_id;
	}

	public function insert_acara($id)
	{
		$this->db->trans_start();
		$acara = $this->input->post();
		if ($acara['tanggalAcara']['tasyakur']) {
			$tasyakur = array(
				'title' => 'Tasyakuran',
				'date' => $acara['tanggalAcara']['tasyakur'],
				'address' => $acara['alamatAcara']['tasyakur'],
				'time' => $acara['jamAcara']['tasyakur'],
				'maps' => $acara['mapsAcara']['tasyakur'],
				'invitation_id' => $id
			);
			$this->db->set($tasyakur);
			$this->db->insert('wedding');
		}

		if ($acara['tanggalAcara']['akad']) {
			$akad = array(
				'title' => 'Akad Nikah',
				'date' => $acara['tanggalAcara']['akad'],
				'address' => $acara['alamatAcara']['akad'],
				'time' => $acara['jamAcara']['akad'],
				'maps' => $acara['mapsAcara']['akad'],
				'invitation_id' => $id
			);
			$this->db->set($akad);
			$this->db->insert('wedding');
		}

		if ($acara['tanggalAcara']['resepsi']) {
			$resepsi = array(
				'title' => 'Resepsi Pernikahan',
				'date' => $acara['tanggalAcara']['resepsi'],
				'address' => $acara['alamatAcara']['resepsi'],
				'time' => $acara['jamAcara']['resepsi'],
				'maps' => $acara['mapsAcara']['resepsi'],
				'invitation_id' => $id
			);
			$this->db->set($resepsi);
			$this->db->insert('wedding');
		}
		$this->db->trans_complete();
	}

	public function update_data_undangan($code)
	{
		$check = $this->db->get_where('invitation', ['code' => $code]);
		if (empty($check->num_rows())) {
			sweetAlert("Peringatan", "Data undangan belum diinput", "warning");
			redirect('admin/undangan/detail/' . $code);
			die;
		} else {
			$data['title'] = 'Edit Data Undangan';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_update_data_undangan';
			$data['invt'] = $this->invitation->getDataUndanganByCode($code);
			$data['detail'] = $this->master->getDetailPenugasan($code);
			$data['acara_tasyakur'] = $this->invitation->getAcaraByUndangan('tasyakur', $data['invt']->invitation_id);
			$data['acara_akad'] = $this->invitation->getAcaraByUndangan('akad', $data['invt']->invitation_id);
			$data['acara_resepsi'] = $this->invitation->getAcaraByUndangan('resepsi', $data['invt']->invitation_id);
			if (isset($_POST['update'])) {
				$this->form_validation->set_rules([
					// Validasi Nama Panggilan Mempelai Pria dan Wanita
					[
						'field' => 'groom_nickname_update',
						'label' => 'Nama Panggilan Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[15]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 15 karakter)',
						]
					],
					[
						'field' => 'bride_nickname_update',
						'label' => 'Nama Panggilan Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[15]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 15 karakter)',
						]
					],
					// Validasi Data Mempelai Pria
					[
						'field' => 'groom_name_update',
						'label' => 'Nama Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'groom_address_update',
						'label' => 'Alamat Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[75]|min_length[8]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 75 karakter)',
						]
					],
					[
						'field' => 'groom_father_update',
						'label' => 'Ayah Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'groom_mother_update',
						'label' => 'Ibu Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'groom_son_update',
						'label' => 'Putra Ke-',
						'rules' => 'trim|required|xss_clean|max_length[12]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 12 karakter)',
						]
					],
					[
						'field' => 'groom_ig_update',
						'label' => 'Instagram Mempelai Pria',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					// Validasi Data Mempelai Wanita
					[
						'field' => 'bride_name_update',
						'label' => 'Nama Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'bride_address_update',
						'label' => 'Alamat Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[75]|min_length[8]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 8 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 75 karakter)',
						]
					],
					[
						'field' => 'bride_father_update',
						'label' => 'Ayah Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'bride_mother_update',
						'label' => 'Ibu Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],
					[
						'field' => 'bride_daughter_update',
						'label' => 'Putri Ke-',
						'rules' => 'trim|required|xss_clean|max_length[12]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 12 karakter)',
						]
					],
					[
						'field' => 'bride_ig_update',
						'label' => 'Instagram Mempelai Wanita',
						'rules' => 'trim|required|xss_clean|max_length[45]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
						]
					],

					// Validasi Pelaksanaan Tasyakuran
					[
						'field' => 'tanggalAcaraUpdate[tasyakur]',
						'label' => 'Tanggal Tasyakuran',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'jamAcaraUpdate[tasyakur]',
						'label' => 'Waktu Tasyakuran',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'alamatAcaraUpdate[tasyakur]',
						'label' => 'Alamat Pelaksanaan Tasyakuran',
						'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
						]
					],
					[
						'field' => 'mapsAcaraUpdate[tasyakur]',
						'label' => 'Link Google Maps Pelaksanaan Tasyakuran',
						'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
							'valid_url' => '{field} harus valid'
						]
					],
					// Validasi Waktu Pelaksanaan Akad
					[
						'field' => 'tanggalAcaraUpdate[akad]',
						'label' => 'Tanggal Akad Nikah',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'jamAcaraUpdate[akad]',
						'label' => 'Waktu AKad Nikah',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'alamatAcaraUpdate[akad]',
						'label' => 'Alamat Pelaksanaan Akad Nikah',
						'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
						]
					],
					[
						'field' => 'mapsAcaraUpdate[akad]',
						'label' => 'Link Google Maps Pelaksanaan Akad Nikah',
						'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
							'valid_url' => '{field} harus valid'
						]
					],
					// Validasi Waktu Pelaksanaan Resepsi
					[
						'field' => 'tanggalAcaraUpdate[resepsi]',
						'label' => 'Tanggal Resepsi Pernikahan',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'jamAcaraUpdate[resepsi]',
						'label' => 'Waktu Resepsi Pernikahan',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'alamatAcaraUpdate[resepsi]',
						'label' => 'Alamat Pelaksanaan Resepsi Pernikahan',
						'rules' => 'trim|required|xss_clean|max_length[100]|min_length[10]',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'min_length' => '{field} terlalu pendek (minimal 10 karakter)',
							'max_length' => '{field} terlalu panjang (maksimal 100 karakter)',
						]
					],
					[
						'field' => 'mapsAcaraUpdate[resepsi]',
						'label' => 'Link Google Maps Pelaksanaan Resepsi Pernikahan',
						'rules' => 'trim|required|xss_clean|max_length[225]|valid_url',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
							'max_length' => '{field} terlalu panjang (maksimal 225 karakter)',
							'valid_url' => '{field} harus valid'
						]
					],
					// Settings Masa Aktif Undangan
					[
						'field' => 'active_date_update',
						'label' => 'Tanggal Masa Aktif',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
					[
						'field' => 'active_time_update',
						'label' => 'Jam Masa Aktif',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => '{field} harus diisi',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],

				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('admin/layouts/wrapper', $data, false);
				} else {
					$this->do_update();
					$this->update_acara();
					sweetAlert("Berhasil", "Data undangan telah diupdate", "success");
					redirect('admin/undangan/detail/' . $this->input->post('code'));
				}
			}
			$this->load->view('admin/layouts/wrapper', $data, false);
		}
	}

	public function do_update()
	{
		$this->db->trans_start();
		$code = $this->input->post('code');
		$dataInvt = $this->invitation->getDataUndanganByCode($code);

		// config upload image
		$confImg['upload_path']   = './storage/invitations/uploads/';
		$confImg['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$confImg['max_size']      = 2000;
		$confImg['overwrite']     = true;
		$confImg['encrypt_name'] = true;
		$this->load->library('upload', $confImg);
		$this->upload->initialize($confImg);
		$this->check_storage('uploads');
		// aksi upload cover dan sampul
		if ($_POST['kategori'] == 'special') {
			if (!empty($_FILES['cover_img_update']['name'][1])) {
				$_FILES['file']['name'] = $_FILES['cover_img_update']['name'][1];
				$_FILES['file']['type'] 	= $_FILES['cover_img_update']['type'][1];
				$_FILES['file']['tmp_name'] = $_FILES['cover_img_update']['tmp_name'][1];
				$_FILES['file']['error'] 	= $_FILES['cover_img_update']['error'][1];
				$_FILES['file']['size'] 	= $_FILES['cover_img_update']['size'][1];
				if ($this->upload->do_upload('file')) {
					if ($dataInvt->cover_image_1 != 'cover_image_1.svg	') {
						@unlink(FCPATH . './storage/invitations/uploads/' . $dataInvt->cover_image_1);
					}
					$new_cover = $this->upload->data('file_name');
					$this->db->set('cover_image_1', $new_cover);
				}
			}

			// aksi upload foto mempelai pria
			if (!empty($_FILES['groom_img_update']['name'])) {
				if ($this->upload->do_upload('groom_img_update')) {
					if ($dataInvt->groom_img != 'groom_img.png') {
						@unlink(FCPATH . './storage/invitations/uploads/' . $dataInvt->groom_img);
					}
					$new_image = $this->upload->data('file_name');
					$resolution = ['width' => 500, 'height' => 500];
					$this->compreesImage('uploads', $new_image, $resolution);
					$this->db->set('groom_img', $new_image);
				}
			}

			// aksi upload foto mempelai wanita
			if (!empty($_FILES['bride_img_update']['name'])) {
				if ($this->upload->do_upload('bride_img_update')) {
					if ($dataInvt->bride_img != 'bride_img.png') {
						@unlink(FCPATH . './storage/invitations/uploads/' . $dataInvt->bride_img);
					}
					$new_image = $this->upload->data('file_name');
					$resolution = ['width' => 500, 'height' => 500];
					$this->compreesImage('uploads', $new_image, $resolution);
					$this->db->set('bride_img', $new_image);
				}
			}
		}

		if (!empty($_FILES['cover_img_update']['name'][2])) {
			$_FILES['file']['name'] = $_FILES['cover_img_update']['name'][2];
			$_FILES['file']['type'] = $_FILES['cover_img_update']['type'][2];
			$_FILES['file']['tmp_name'] = $_FILES['cover_img_update']['tmp_name'][2];
			$_FILES['file']['error'] = $_FILES['cover_img_update']['error'][2];
			$_FILES['file']['size']	= $_FILES['cover_img_update']['size'][2];
			if ($this->upload->do_upload('file')) {
				if ($dataInvt->cover_image_2 != 'cover_image_2.svg') {
					@unlink(FCPATH . './storage/invitations/uploads/' . $dataInvt->cover_image_2);
				}
				$new_cover = $this->upload->data('file_name');
				$this->db->set('cover_image_2', $new_cover);
			}
		}

		// aksi upload backgroun music
		if (isset($_FILES['music_bg_update']['name'])) {
			$music = $_FILES['music_bg_update']['name'];
			$config['upload_path'] = './storage/invitations/uploads/';
			$config['allowed_types'] = 'mp3|m4a|mpg|mpeg|ogg|mp4';
			$config['max_size'] = 0;
			$config['file_name'] = $music;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!empty($_FILES['music_bg_update']['name'])) {
				$_FILES['file']['name'] = $_FILES['music_bg_update']['name'];
				$_FILES['file']['type'] 	= $_FILES['music_bg_update']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['music_bg_update']['tmp_name'];
				$_FILES['file']['error'] 	= $_FILES['music_bg_update']['error'];
				$_FILES['file']['size'] 	= $_FILES['music_bg_update']['size'];
				if ($this->upload->do_upload('file')) {
					if ($dataInvt->music_bg != 'default_music.mp3') {
						@unlink(FCPATH . './storage/invitations/uploads/' . $dataInvt->music_bg);
					}
					$music_new = $this->upload->data('file_name');
					$this->db->set('music_bg', $music_new);
				}
			}
		}

		$slug = $_POST['groom_nickname_update'] . ' ' . $_POST['bride_nickname_update'];
		$slug = url_title($slug, 'dash', true);
		$data = array(
			'groom_name' => $this->input->post('groom_name_update', true),
			'groom_nickname' => $this->input->post('groom_nickname_update', true),
			'groom_address' => $this->input->post('groom_address_update', true),
			'groom_father' => $this->input->post('groom_father_update', true),
			'groom_mother' => $this->input->post('groom_mother_update', true),
			'groom_ig' => $this->input->post('groom_ig_update', true),
			'groom_son' => $this->input->post('groom_son_update', true),
			'bride_name' => $this->input->post('bride_name_update', true),
			'bride_nickname' => $this->input->post('bride_nickname_update', true),
			'bride_address' => $this->input->post('bride_address_update', true),
			'bride_father' => $this->input->post('bride_father_update', true),
			'bride_mother' => $this->input->post('bride_mother_update', true),
			'bride_ig' => $this->input->post('bride_ig_update', true),
			'bride_daughter' => $this->input->post('bride_daughter_update', true),
			'slug' => $slug,
			'code' => $this->input->post('code', true)
		);

		$this->db->set($data);
		$this->db->where('invitation_id', $this->input->post('invitationId'));
		$this->db->update('invitation');

		// update masa aktif undangan
		$active_date = $this->input->post('active_date_update', true);
		$active_time = $this->input->post('active_time_update', true);
		if ($active_date and $active_time) {
			$active = $active_date . ' ' . $active_time;
			$this->db->where('code', $this->input->post('code', true));
			$this->db->update('transaction', ['active' => $active]);
		}
		$this->db->trans_complete();
	}

	public function update_acara()
	{
		$this->db->trans_start();
		$acara = $this->input->post();
		if ($acara['tanggalAcaraUpdate']['tasyakur']) {
			$tasyakur = array(
				'title' => 'Tasyakuran',
				'date' => $acara['tanggalAcaraUpdate']['tasyakur'],
				'address' => $acara['alamatAcaraUpdate']['tasyakur'],
				'time' => $acara['jamAcaraUpdate']['tasyakur'],
				'maps' => $acara['mapsAcaraUpdate']['tasyakur'],
			);
			$this->db->set($tasyakur);
			$this->db->where('wedding_id', $_POST['tasyakur_id']);
			$this->db->update('wedding');
		}

		if ($acara['tanggalAcaraUpdate']['akad']) {
			$akad = array(
				'title' => 'Akad Nikah',
				'date' => $acara['tanggalAcaraUpdate']['akad'],
				'address' => $acara['alamatAcaraUpdate']['akad'],
				'time' => $acara['jamAcaraUpdate']['akad'],
				'maps' => $acara['mapsAcaraUpdate']['akad'],
			);
			$this->db->set($akad);
			$this->db->where('wedding_id', $_POST['akad_id']);
			$this->db->update('wedding');
		}

		if ($acara['tanggalAcaraUpdate']['resepsi']) {
			$resepsi = array(
				'title' => 'Resepsi Pernikahan',
				'date' => $acara['tanggalAcaraUpdate']['resepsi'],
				'address' => $acara['alamatAcaraUpdate']['resepsi'],
				'time' => $acara['jamAcaraUpdate']['resepsi'],
				'maps' => $acara['mapsAcaraUpdate']['resepsi'],
			);
			$this->db->set($resepsi);
			$this->db->where('wedding_id', $_POST['resepsi_id']);
			$this->db->update('wedding');
		}
		$this->db->trans_complete();
	}

	public function update_processing()
	{
		$update = $this->input->get('update');
		if ($update == 'desc') {
			$desc = $this->input->post('desc', true);
			if ($desc == 1) {
				$this->db->set('desc', 2);
				$message = 'Sudah Dikerjakan';
			} elseif ($desc == 2) {
				$this->db->set('desc', 1);
				$message = 'Dalam Proses Pengerjaan';
			}
			$this->db->where('code', $this->input->post('code', true));
			$this->db->update('transaction');
			$response = array(
				'csrfName' => $this->security->get_csrf_token_name(),
				'csrfHash' => $this->security->get_csrf_hash(),
				'message' => $message,
				'success' => true
			);
		} else if ($update == 'status') {
			$status = $this->input->post('status', true);
			if ($status == 0) {
				$this->db->set('status', 1);
				$message = 'Aktif';
			} else if ($status > 0) {
				$this->db->set('status', 0);
				$message = 'Tidak Aktif';
			}
			$this->db->where('code', $this->input->post('code', true));
			$this->db->update('transaction');
			$response = array(
				'csrfName' => $this->security->get_csrf_token_name(),
				'csrfHash' => $this->security->get_csrf_hash(),
				'message' => $message,
				'success' => true
			);
		}
		echo json_encode($response);
	}

	// config upload image
	public function imageConf($dirName = null)
	{
		$conf['upload_path']   = './storage/invitations/' . $dirName . '/';
		$conf['allowed_types'] = 'gif|jpg|png|jpeg|svg';
		$conf['max_size']      = 2000;
		$conf['overwrite']     = true;
		$conf['encrypt_name'] = true;
		$this->load->library('upload', $conf);
		$this->image_lib->initialize($conf);
	}

	public function compreesImage($dirName, $fileName, $resolution)
	{
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = './storage/invitations/' . $dirName . '/' . $fileName;
		$config['create_thumb'] = false;
		$config['maintain_ratio'] = true;
		$config['width']     = $resolution['width'];
		$config['height']   = $resolution['height'];

		$this->image_lib->clear();
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}
	// end of config upload image

	public function check_storage($dir)
	{
		if (!is_dir('storage')) {
			mkdir('./storage', 0777, true);
		}

		$dir_exist = true;

		if (!is_dir('storage/invitations')) {
			mkdir('./storage/invitations', 0777, true);
			$dir_exist = false; // dir not exist
		}

		if (!is_dir('storage/invitations/' . $dir)) {
			mkdir('./storage/invitations/' . $dir, 0777, true);
			$dir_exist = false; // dir not exist
		}
		return $dir_exist;
	}
}
