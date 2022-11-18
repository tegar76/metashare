<?php

class Penugasan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
		checkSuperAdmin();
	}

	public function index()
	{
		$nomor	= 1;
		$invite	= $this->master->getDataPenugasan();
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
				if ($value->desc == 0) {
					$cls = 'text-danger';
					$desc = 'Belum Dikerjakan';
				} elseif ($value->desc == 1) {
					$cls = 'text-warning';
					$desc = 'Proses Pengerjaan';
				} elseif ($value->desc == 2) {
					$cls = 'text-success';
					$desc = 'Sudah Dikerjakan';
				}
				$invt['clss'] = $cls;
				$invt['desc'] = $desc;
				$invt['status'] = ($value->status < 1) ? 'Tidak Aktif' : 'Aktif';
				$new_invt[] = $invt;
			}
			$data['invite'] = $new_invt;
		}
		$data['title'] = 'Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function detail()
	{
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
			$data['title'] = 'Detail Penugasan';
			$data['content'] = 'super_admin/contents/penugasan/v_detail_penugasan';
		} else {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function update($code = false)
	{
		$detail = $this->master->getDetailPenugasan($code);
		if (empty($detail) or $code == false) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$data['detail'] = $detail;
			$data['admin'] = $this->master->getDataAdmin();
			$data['title'] = 'Edit Penugasan';
			$data['content'] = 'super_admin/contents/penugasan/v_edit_penugasan';
			if (isset($_POST['update'])) {
				$this->form_validation->set_rules('admin_update', 'Admin', 'xss_clean|required|trim', [
					'required' => '{field} harus diisi',
					'xss_clean' => 'cek kembali pada {field}'
				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
				} else {
					$this->db->set('admin_id', $this->input->post('admin_update', true));
					$this->db->where(['code' => $this->input->post('code', true)]);
					$this->db->update('transaction');
					sweetAlert("Berhasil", "Data penugasan berhasil diupdate", "success");
					redirect('su-admin/penugasan');
				}
			}
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function delete_penugasan()
	{
		$code = $this->input->post('code', true);
		$this->db->delete('transaction', ['code' => $code]);
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'message' => 'Anda telah menghapus data penugasan',
			'success' => true
		];
		echo json_encode($reponse);
	}

	public function tambahPenugasan()
	{
		$data['title'] = 'Tambah Penugasan';
		$data['content'] = 'super_admin/contents/penugasan/v_tambah_penugasan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}
}

/* End of file Penugasan.php */
/* Location: ./application/controllers/SuperAdmin/Penugasan.php */
