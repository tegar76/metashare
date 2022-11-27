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

	public function settings()
	{
		$guest = $this->invitation->getInvitedGuest();
		$data['title'] = 'Setting Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_setting_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function tambahDataUndangan()
	{
		$data['title'] = 'Tambah Data Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_tambah_data_undangan';
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
