<?php

class View extends CI_Controller
{
	public function view_img()
	{
		if (!isset($_GET['code'])) {
			$data['title'] = '404 Not Found';
			$this->load->view('errors/contents/v_error_404', $data, false);
		} else {
			$query = $this->db->get_where("transaction", ['code' => $_GET['code']])->row();
			if ($query) {
				$data['title'] = 'View Image';
				$data['image'] = base_url('storage/bukti_pembayaran/' . $query->proof);
				$this->load->view('view/v_img', $data, FALSE);
			} else {
				$data['title'] = '404 Not Found';
				$this->load->view('errors/contents/v_error_404', $data, false);
			}
		}
	}
}
