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
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
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
			$invt = $this->db->query("SELECT invitation_id as id FROM invitation WHERE code='$detail->t_code'")->row();
			if (!empty($invt)) {
				// jika sudah ada, maka akan menampilkan data tamu undangan
				$guest = $this->invitation->getInvitedGuest($invt->id);
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
			} else {
				// jika belum, maka akan data tamu undangan masih kosong
				$data['guest'] = array();
			}
			$data['title'] = 'Setting Undangan';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_setting_undangan';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
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
		} else {
			// Validasi Upload Sampul
			if (empty($_FILES['cover_img']['name'][1])) {
				$this->form_validation->set_rules('cover_img[1]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi Upload Cover
			if (empty($_FILES['cover_img']['name'][2])) {
				$this->form_validation->set_rules('cover_img[2]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi Upload Cover
			if (empty($_FILES['music_bg']['name'])) {
				$this->form_validation->set_rules('music_bg', 'Music', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi foto mempelai pria
			if (empty($_FILES['groom_img']['name'])) {
				$this->form_validation->set_rules('groom_img', 'Foto Mempelai Pria', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// validasi foto mempelai wanita
			if (empty($_FILES['bride_img']['name'])) {
				$this->form_validation->set_rules('bride_img', 'Foto Mempelai Wanita', 'required', ['required' => 'Anda harus upload {field}']);
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
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {

				$id = $this->process_data_undangan();
				$this->insert_acara($id);
				sweetAlert("Berhasil", "Data undangan telah diinput", "success");
				redirect('admin/undangan/detail/' . $this->input->post('code'));
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function process_data_undangan()
	{
		$this->db->trans_start();
		// aksi upload cover dan sampul
		$cover_img = $_FILES['cover_img']['name'][1];
		if ($cover_img) {
			$this->imageConf('images');
			$this->check_storage('images');
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
		}

		$cover_img = $_FILES['cover_img']['name'][2];
		if ($cover_img) {
			$this->imageConf('images');
			$this->check_storage('images');
			if (!empty($_FILES['cover_img']['name'][1])) {
				$_FILES['file']['name'] = $_FILES['cover_img']['name'][2];
				$_FILES['file']['type'] 	= $_FILES['cover_img']['type'][2];
				$_FILES['file']['tmp_name'] = $_FILES['cover_img']['tmp_name'][2];
				$_FILES['file']['error'] 	= $_FILES['cover_img']['error'][2];
				$_FILES['file']['size'] 	= $_FILES['cover_img']['size'][2];
				if ($this->upload->do_upload('file')) {
					$upload_img = $this->upload->data();
					$this->db->set('cover_image_2', $upload_img['file_name']);
				}
			}
		}

		// aksi upload backgroun music
		$music_bg = $_FILES['music_bg']['name'];
		if ($music_bg) {
			$config['upload_path'] = './storage/invitations/music/';
			$config['allowed_types'] = 'mp3';
			$config['max_size'] = 50000;
			$config['file_name'] = $music_bg;
			$this->check_storage('music');
			$this->load->library('upload', $config);
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

		// aksi upload foto mempelai pria
		$groom_img = $_FILES['groom_img']['name'];
		if ($groom_img) {
			$this->imageConf('images');
			$this->check_storage('images');
			if ($this->upload->do_upload('groom_img')) {
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 500, 'height' => 500];
				$this->compreesImage('images', $dataUpload['file_name'], $resolution);
				$this->db->set('groom_img',  $dataUpload['file_name']);
			}
		}

		// aksi upload foto mempelai wanita
		$bride_img = $_FILES['bride_img']['name'];
		if ($bride_img) {
			$this->imageConf('images');
			$this->check_storage('images');
			if ($this->upload->do_upload('bride_img')) {
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 500, 'height' => 500];
				$this->compreesImage('images', $dataUpload['file_name'], $resolution);
				$this->db->set('bride_img',  $dataUpload['file_name']);
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

		$this->db->insert('invitation', $data);
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
		}
		$this->db->insert('wedding');
		$this->db->trans_complete();
	}

	public function update_data_undangan($code)
	{
		$data['title'] = 'Edit Data Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_data_undangan';
		$data['invt'] = $this->invitation->getDataUndanganByCode($code);
		$data['detail'] = $this->master->getDetailPenugasan($code);
		// var_dump($data);
		// die;
		if (isset($_POST['update'])) {
			if (empty($_FILES['cover_img_update']['name'][1])) {
				$this->form_validation->set_rules('cover_img_update[1]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi Upload Cover
			if (empty($_FILES['cover_img_update']['name'][2])) {
				$this->form_validation->set_rules('cover_img_update[2]', 'Foto Sampul', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi Upload Cover
			if (empty($_FILES['music_bg_update']['name'])) {
				$this->form_validation->set_rules('music_bg_update', 'Music', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// Validasi foto mempelai pria
			if (empty($_FILES['groom_img_update']['name'])) {
				$this->form_validation->set_rules('groom_img_update', 'Foto Mempelai Pria', 'required', ['required' => 'Anda harus upload {field}']);
			}

			// validasi foto mempelai wanita
			if (empty($_FILES['bride_img_update']['name'])) {
				$this->form_validation->set_rules('bride_img_update', 'Foto Mempelai Wanita', 'required', ['required' => 'Anda harus upload {field}']);
			}

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
			} else {
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	// config upload image
	public function imageConf($dirName = NULL)
	{
		$conf['upload_path']   = './storage/invitations/' . $dirName . '/';
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
		$config['source_image'] = './storage/invitations/' . $dirName . '/' . $fileName;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
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
