<?php

class PreviewModelUndangan extends CI_Controller
{
	public function index()
	{
		if (!isset($_GET['model'])) {
			$data['title'] = '404 Not Found';
			$this->load->view('errors/contents/v_error_404', $data, FALSE);
		} else {
			$query = $this->db->get_where("model_invitation", ['view_model' => $_GET['model']])->row();
			if ($query) {
				$data['title'] = 'PreviewModelUndangan';
				$view = 'preview_model_undangan/' . $query->view_model . '_preview';
				if (file_exists(APPPATH . 'views/' . $view  . '.php')) {
					$this->load->view($view, $data, FALSE);
				} else {
					$data['title'] = '404 Not Found';
					$this->load->view('errors/contents/v_error_404', $data, FALSE);
				}
			} else {
				$data['title'] = '404 Not Found';
				$this->load->view('errors/contents/v_error_404', $data, FALSE);
			}
		}
	}
}
