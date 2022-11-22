<?php

class Pengorderan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MasterModel', 'master', true);
		checkSuperAdmin();
	}

	public function index()
	{
		if (isset($_GET['date']) and !empty($_GET['date'])) {
			$nomor	= 1;
			$year = date('Y', strtotime($_GET['date']));
			$month = date('m', strtotime($_GET['date']));
			$order = $this->master->getOrderanUndanganByDate($month, $year);
			$data['order'] = array();
			if ($order) {
				foreach ($order as $row) {
					$ord['nomor'] = $nomor++;
					$ord['code'] = $row->code;
					$ord['date'] =  date('d-m-Y H:i', strtotime($row->date)) . " WIB";
					$ord['customer'] = $row->customer;
					$ord['type'] = $row->type;
					$ord['category'] = $row->category;
					$ord['model'] = $row->model;
					$neword[] = $ord;
				}
				$data['order'] = $neword;
			}
		} else {
			$nomor	= 1;
			$order = $this->master->getOrderanUndangan();
			$data['order'] = array();
			if ($order) {
				foreach ($order as $row) {
					$ord['nomor'] = $nomor++;
					$ord['code'] = $row->code;
					$ord['date'] =  date('d-m-Y H:i', strtotime($row->date)) . " WIB";
					$ord['customer'] = $row->customer;
					$ord['type'] = $row->type;
					$ord['category'] = $row->category;
					$ord['model'] = $row->model;
					$neword[] = $ord;
				}
				$data['order'] = $neword;
			}
		}
		$data['title'] = 'Pengorderan';
		$data['content'] = 'super_admin/contents/pengorderan/v_pengorderan';
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function update($code = false)
	{
		$order = $this->master->getOrderanUndanganByCode($code);
		if (empty($order) or $code == false) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$data['order'] = $order;
			$data['admin'] = $this->master->getDataAdmin();
			$data['title'] = 'Edit Pengorderan';
			$data['content'] = 'super_admin/contents/pengorderan/v_edit_pengorderan';
			if (isset($_POST['update'])) {
				if (empty($_FILES['bukti_bayar']['name'])) {
					$this->form_validation->set_rules([
						[
							'field' => 'bukti_bayar',
							'label' => 'Bukti Pembayaran',
							'rules' => 'trim|required|xss_clean',
							'errors' => [
								'required' => 'Anda harus upload {field}',
								'xss_clean' => 'cek kembali pada {field}',
							]
						],
					]);
				}
				$this->form_validation->set_rules([
					[
						'field' => 'admin',
						'label' => 'Admin',
						'rules' => 'trim|required|xss_clean',
						'errors' => [
							'required' => 'Anda harus menugaskan {field}',
							'xss_clean' => 'cek kembali pada {field}',
						]
					],
				]);
				if ($this->form_validation->run() == false) {
					$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
				} else {
					$this->process_order();
					sweetAlert("Berhasil", "Pengorderan berhasil diupdate", "success");
					redirect('su-admin/order');
				}
			}
		}
		$this->load->view('super_admin/layouts/wrapper', $data, FALSE);
	}

	public function process_order()
	{
		$this->db->trans_start();
		$upload = $_FILES['bukti_bayar']['name'];
		if ($upload) {
			$this->imageConf('bukti_pembayaran');
			$this->check_storage('bukti_pembayaran');
			if (!$this->upload->do_upload('bukti_bayar')) :
				sweetAlert('Oopppsss', $this->upload->display_errors(), 'error');
				redirect('su-admin/order/update/' . $this->input->post('code'));
			else :
				$dataUpload = $this->upload->data();
				$resolution = ['width' => 270, 'height' => 378];
				$this->compreesImage('bukti_pembayaran', $dataUpload['file_name'], $resolution);
				$this->db->set('proof',  $dataUpload['file_name']);
			endif;
		}
		$this->db->set('admin_id', $this->input->post('admin'));
		$this->db->where(['id' => $this->input->post('id')]);
		$this->db->update('transaction');
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
}

/* End of file Pengorderan.php */
/* Location: ./application/controllers/SuperAdmin/Pengorderan.php */
