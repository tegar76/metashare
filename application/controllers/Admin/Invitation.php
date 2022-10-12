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
		isAdminLogin();
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
		isAdminLogin();
		if ($id == false) {
			$data['title'] = '404 Not Found';
			$data['content'] = 'errors/contents/error_404';
		} else {
			$invt = $this->invitation->getDetailInvitation($id);
			$guest = $this->invitation->getInvitedGuest($invt->id);
			$data['guest'] = array();
			if ($guest) {
				$no = 1;
				foreach ($guest as $row) {
					$val['nomor'] = $no++;
					$val['name'] = $row->name;
					$val['slug'] = $invt->slug;
					$restult[] = $val;
				}
				$data['guest'] = $restult;
			}
			$data['title'] = 'Detail';
			$data['content'] = 'admin/contents/undangan/v_detail_undangan';
		}
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

	public function wedding($slug = false)
	{
		$invt = $this->invitation->getInvitationBySlug('runa-ratna');
		if ($slug == false or empty($invt)) {
			$data['title'] = '404 Not Found';
			$this->load->view('errors/contents/v_error_404', $data, FALSE);
		} else {
			$photo = $this->invitation->getPhotoPreWedding(1);
			foreach ($photo as $key => $value) {
				$img['id'] = $value->gallery_id;
				$img['img'] = 	base_url('assets/img/' .  $value->photo);
				$imgs[] = $img;
			}
			if (isset($_GET['to'])) {
				$data['guest'] = $this->input->get('to');
			} else {
				$data['guest'] = null;
			}
			$data['invt_id'] = $invt->invitation_id;
			$data['message'] = $this->db->get_where('message', ['invitation_id' => 1])->num_rows();
			$data['photo'] = $imgs;
			$this->load->view('tamu/v_tamu', $data);
		}
	}

	public function get_message()
	{
		$output = '';
		$req = $_REQUEST;
		$where = array(
			'invitation_id' => 1,
		);
		$query 	= $this->db->order_by('create_time', 'DESC')->get_where('message', $where);
		$result	= $query->result();
		foreach ($result as $key => $val) {
			$inisial = substr($val->name, 0, 1);
			if ($val->status == 2) {
				$bgcolor = 'text-green-500';
			} elseif ($val->status == 1) {
				$bgcolor = 'text-red-400';
			} elseif ($val->status == 0) {
				$bgcolor = 'text-yellow-400';
			}
			$output .= '
			<div class="flex mt-3">
				<div class="mr-3">
					<div class="flex w-9 h-9 font-semibold border border-slate-300 shadow-lg ' . $bgcolor . ' text-center rounded-full items-center justify-center">' . $inisial . '</div>
				</div>
				<div>
					<div>
						<p class="font-semibold opacity-60 tracking-wide text-base-sm lg:text-base-md">' . $val->name . '</p>
						<p class="text-sm text-slate-500 mb-1">' . date('d-m-Y H:i', strtotime($val->create_time)) . '</p>
						<p class="text-base-sm tracking-wide text-slate-700 text-justify mr-2">' . $val->message . '</p>
					</div>
				</div>
			</div>
			';
		}
		echo json_encode([$output]);
	}

	public function submit_message()
	{
		$reponse = [
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash(),
			'success' => False,
			'messages' => []
		];

		$this->form_validation->set_rules('pesan', 'Pesan Bahagia', 'trim|required|xss_clean', [
			'required' => '{field} harus diisi',
			'xss_clean' => 'cek kembali pada {field}'
		]);
		$this->form_validation->set_rules('konfirmasiHadir', 'Konfirmasi Kehadiran', 'trim|required|xss_clean', [
			'required' => '{field} harus diisi',
			'xss_clean' => 'cek kembali pada {field}'
		]);
		if ($this->form_validation->run() == FALSE) {
			$reponse['messages'] = '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>';
		} else {
			$this->invitation->insertMessage();
			$reponse = [
				'csrfName' => $this->security->get_csrf_token_name(),
				'csrfHash' => $this->security->get_csrf_hash(),
				'success' => true
			];
		}
		echo json_encode($reponse);
	}

	public function view_photo()
	{
		$data['gallery'] = $this->db->get_where('photo_gallery', ['gallery_id' => $this->input->post('id')])->row();
		$html = $this->load->view('tamu/view_photo', $data);
		$reponse = [
			'url' => $html,
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash()
		];
		echo json_encode($reponse);
	}
}
