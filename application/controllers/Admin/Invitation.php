<?php

class Invitation extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('InvitationModel', 'invitation', true);
	}

	public function index()
	{
		$invitation = $this->invitation->getInvitation();
		$no = 1;
		$data['invitation'] = array();
		if ($invitation) {
			foreach ($invitation as $key => $value) {
				$row['nomor'] = $no++;
				$row['username'] = $value->username;
				$row['customer'] = $value->name;
				$row['type'] = $value->type;
				$row['category'] = $value->category;
				$row['model'] = $value->model;
				$row['desc'] = '';
				$row['active'] = ($value->status > 0) ? 'Aktif' : 'Tidak Aktif';
				$row['period'] = date('d-m-Y H:i', strtotime($value->period)) . " WIB";
				$row['id'] = $value->id;
				$result[] = $row;
			}
			$data['invitation'] = $result;
		}
		$data['title'] = 'Data Undangan';
		$data['content'] = 'admin/contents/undangan/v_data_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function detail($id = false)
	{
		if ($id == false) {
			show_404();
		} else {
			$invt = $this->invitation->getDetailInvitation($id);
			$guest = $this->invitation->getInvitedGuest($invt->id);
			// var_dump($guest);
			// die;
			$data['guest'] = array();
			if ($guest) {
				$no = 1;
				foreach ($guest as $row) {
					$val['nomor'] = $no++;
					$val['name'] = $row->name;
					$val['create'] = '';
					$val['update'] = '';
					$val['slug'] = $invt->slug;
					$restult[] = $val;
				}
				$data['guest'] = $restult;
			}
			$data['title'] = 'Detail';
			$data['content'] = 'admin/contents/undangan/v_detail_undangan';
			$this->load->view('admin/layouts/wrapper', $data, FALSE);
		}
	}

	public function wedding($slug)
	{
	}
}
