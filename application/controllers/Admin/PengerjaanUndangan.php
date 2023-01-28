<?php

class PengerjaanUndangan extends CI_Controller
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
		if (isset($_GET['code']) and !empty($_GET['code'])) {
			$code = $_GET['code'];
			$detail = $this->master->getDetailPenugasan($code);
			if ($detail) {
				if ($detail->t_desc == 0) {
					$data['desc'] = '<td class="text-danger">Belum Dikerjakan</td>';
				} elseif ($detail->t_desc == 1) {
					$data['desc'] = '<td class="text-warning">Proses Pengerjaan</td>';
				} elseif ($detail->t_desc == 2) {
					$data['desc'] = '<td class="text-success">Sudah Dikerjakan</td>';
				}
				$data['detail'] = $detail;
				$data['title'] = 'Detail Order';
				$data['content'] = 'admin/contents/pengerjaan_undangan/v_detail_order';
			} else {
				$data['title'] = '404 Not Found';
				$data['content'] = 'errors/contents/error_404';
			}
			$this->load->view('admin/layouts/wrapper', $data, FALSE);
		} else {
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
	}

	public function detail()
	{
		$data['title'] = 'Detail Order';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_detail_order';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function settings($code = false)
	{
		if ($code == false) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$check = $this->invitation->getDetailInvitation($code);
			if (!empty($check)) {
				$guest = $this->invitation->getInvitedGuest($check->id);
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
				$data['guest'] = array();
			}
			$data['title'] = 'Setting Undangan';
			$data['content'] = 'admin/contents/pengerjaan_undangan/v_setting_undangan';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahDataUndangan()
	{
		$data['title'] = 'Tambah Data Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_data_undangan';
		// Validasi Upload Sampul
		if (empty($_FILES['sampul_img']['name'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'sampul_img',
					'label' => 'Sampul',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => 'Anda harus upload {field}',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
			]);
		}
		// Validasi Upload Cover
		if (empty($_FILES['cover']['name'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'cover_img',
					'label' => 'Cover',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => 'Anda harus upload {field}',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
			]);
		}
		// Validasi Upload Cover
		if (empty($_FILES['song_bg']['name'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'song_bg',
					'label' => 'Lagu',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => 'Anda harus upload {field}',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
			]);
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
			// Validasi Waktu Pelaksanaan Akad
			[
				'field' => 'akad_date',
				'label' => 'Tanggal Akad Nikah',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'akad_time',
				'label' => 'Waktu AKad Nikah',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'akad_address',
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
				'field' => 'akad_maps',
				'label' => 'Link Google Maps Pelaksanaan Akad Nikah',
				'rules' => 'trim|required|xss_clean|max_length[45]|valid_url',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					'valid_url' => '{field} harus valid'
				]
			],
			// Validasi Waktu Pelaksanaan Resepsi
			[
				'field' => 'resepsi_date',
				'label' => 'Tanggal Resepsi Pernikahan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'resepsi_time',
				'label' => 'Waktu Resepsi Pernikahan',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'resepsi_address',
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
				'field' => 'resepsi_maps',
				'label' => 'Link Google Maps Pelaksanaan Resepsi Pernikahan',
				'rules' => 'trim|required|xss_clean|max_length[45]|valid_url',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
					'valid_url' => '{field} harus valid'
				]
			],
			// Validasi Pelaksanaan Tasyakuran
			[
				'field' => 'tasyakur_date',
				'label' => 'Tanggal Tasyakuran',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'tasyakur_time',
				'label' => 'Waktu Tasyakuran',
				'rules' => 'trim|required|xss_clean',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],
			[
				'field' => 'tasyakur_address',
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
				'field' => 'tasyakur_maps',
				'label' => 'Link Google Maps Pelaksanaan Tasyakuran',
				'rules' => 'trim|required|xss_clean|max_length[45]|valid_url',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'max_length' => '{field} terlalu panjang (maksimal 45 karakter)',
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
				'rules' => 'trim|required|xss_cleanl',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
				]
			],

		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/layouts/wrapper', $data, FALSE);
		} else {
			var_dump($_POST);
			die;
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function EditDataUndangan()
	{
		$data['title'] = 'Edit Data Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_data_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahTamuUndangan()
	{
		$data['title'] = 'Tambah Tamu Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_tamu_undangan';
		$check = $this->invitation->checkDataUndangan('ASDA1414222');
		if (empty($check)) {
			sweetAlert("Warning!", "Data Undangan harus diinput terlebih dahulu", "warning");
			redirect('admin/invitation');
		} else {
			$this->form_validation->set_rules([
				[
					'field' => 'guest[]',
					'label' => 'Nama Tamu Undangan',
					'rules' => 'trim|required|xss_clean|max_length[25]|min_length[3]',
					'errors' => [
						'required' => '{field} harus diisi',
						'xss_clean' => 'cek kembali pada {field}',
						'min_length' => '{field} terlalu pendek (minimal 3 karakter)',
						'max_length' => '{field} terlalu panjang (maksimal 25 karakter)',
					]
				],
			]);
			if ($this->form_validation->run() == false) {
				$this->load->view('admin/layouts/wrapper', $data, FALSE);
			} else {
				$guest = $this->input->post('guest', TRUE);
				$this->invitation->insertTamuUndangan($guest, $check->invitation_id);
				sweetAlert("Berhasil", "Data Tamu Undangan berhasil di input", "success");
				redirect('admin/invitation');
			}
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editTamuUndangan()
	{
		$data['title'] = 'Edit Tamu Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_tamu_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahFoto()
	{
		$data['title'] = 'Tambah Foto';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_foto';
		$this->form_validation->set_rules([
			[
				'field' => 'link_video',
				'label' => 'Link Video Goole Drive',
				'rules' => 'trim|required|xss_clean|prep_url',
				'errors' => [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}',
					'prep_url' => '{field} harus valid'
				]
			]
		]);
		if (empty($_FILES['photo']['name'])) {
			$this->form_validation->set_rules([
				[
					'field' => 'photo[]',
					'label' => 'Foto',
					'rules' => 'trim|required|xss_clean',
					'errors' => [
						'required' => 'Anda harus upload {field}',
						'xss_clean' => 'cek kembali pada {field}',
					]
				],
			]);
		}
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/layouts/wrapper', $data, FALSE);
		} else {
			var_dump($_POST);
			die;
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editFoto()
	{
		$data['title'] = 'Edit Foto Galeri';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function EditFotoDetail()
	{
		$data['title'] = 'Edit Foto Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_foto_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahPerjalananCinta()
	{
		$data['title'] = 'Tambah Perjalanan Cinta';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_perjalanan_cinta';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editPerjalananCinta()
	{
		$data['title'] = 'Edit Perjalanan Cinta';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editPerjalananCintaDetail()
	{
		$data['title'] = 'Edit Perjalanan Cinta Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_perjalanan_cinta_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahBerikanHadiah()
	{
		$data['title'] = 'Tambah Berikan hadiah';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_berikan_hadiah';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editBerikanHadiah()
	{
		$data['title'] = 'Edit Berikan hadiah';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function editBerikanHadiahDetail()
	{
		$data['title'] = 'Edit Berikan Hadiah Detail';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_edit_berikan_hadiah_detail';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}
}
