<?php

class Invitations extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('InvitationModel', 'invitation', true);
		$this->bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$this->months = array(1 => "january", "february", "march", "april", "may", "june", "juli", "august", "september", "october", "november", "december");
		$this->hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	}

	public function index()
	{
	}

	public function demo()
	{
		if (!isset($_GET['model'])) {
			$data['title'] = '404 Not Found';
			$this->load->view('errors/contents/v_error_404', $data, FALSE);
		} else {
			$query = $this->db->get_where("model_invitation", ['view_model' => $_GET['model']])->row();
			if ($query) {
				$data['title'] = 'PreviewModelUndangan';
				$messages = $this->db->order_by('create_time', 'DESC')
					->limit(8)
					->get_where('message', [
						'invitation_id' => 0
					]);
				$data['messageNum'] = $messages->num_rows();
				$view = 'model_undangan/demo/' . $query->view_model . '_demo';
				if (file_exists(APPPATH . 'views/' . $view  . '.php')) {
					$this->load->view($view, $data, false);
				} else {
					$data['title'] = '404 Not Found';
					$this->load->view('errors/contents/v_error_404', $data, false);
				}
			} else {
				$data['title'] = '404 Not Found';
				$this->load->view('errors/contents/v_error_404', $data, false);
			}
		}
	}


	public function preview($id, $slug = null)
	{
		$invitation = $this->invitation->getInvitationBySlug($id, $slug);
		if (empty($slug) or empty($invitation)) {
			$data['title'] = '404 Not Found';
			$this->load->view('errors/contents/v_error_404', $data, FALSE);
		} else {
			$dateNow = date('Y-m-d H:i:s');
			$active = $this->db->query("SELECT active, status FROM transaction WHERE code='$invitation->code'")->row();
			if (strtotime($dateNow) <= strtotime($active->active) and $active->status > 0) {

				// query untuk mengambil data model undangan dan masa aktif undangan
				$design = $this->invitation->getDesignUndangan($invitation->code);

				// untuk menambi nama tamu undangan menggunakan method get
				if (isset($_GET['to'])) {
					$data['guest'] = $this->input->get('to');
				} else {
					$data['guest'] = '';
				}

				// untuk mengambil data foto prewedding
				$photos	= $this->invitation->getPhotoPreWedding($invitation->invitation_id);
				foreach ($photos as $photo) {
					$img['id'] = $photo->gallery_id;
					$img['img'] = 	base_url('storage/invitations/gallery/' .  $photo->photo);
					$imgs[] = $img;
				}
				$data['photos'] = $imgs;
				$data['invitation']	= $invitation; // untuk menampilkan data undangan
				$data['message'] = $this->db->get_where('message', ['invitation_id' => $invitation->invitation_id])->num_rows(); // untuk menghitung jumlah pesan bahagia yang masuk

				$tasyakur = $this->invitation->getAcaraByUndangan('tasyakur', $invitation->invitation_id);
				$akad = $this->invitation->getAcaraByUndangan('akad', $invitation->invitation_id);
				$resepsi = $this->invitation->getAcaraByUndangan('resepsi', $invitation->invitation_id);
				$acara = [
					'tasyakur' => [
						'nama' => $tasyakur->title,
						'tanggal' => $this->dateConvert($tasyakur->date),
						'waktu' =>  date('H:i', strtotime($tasyakur->time)) . ' WIB',
						'alamat' => $tasyakur->address,
						'maps' => $tasyakur->maps
					],
					'akad' => [
						'nama' => $akad->title,
						'tanggal' => $this->dateConvert($akad->date),
						'waktu' =>  date('H:i', strtotime($akad->time)) . ' WIB',
						'alamat' => $akad->address,
						'maps' => $akad->maps
					],
					'resepsi' => [
						'nama' => $resepsi->title,
						'tanggal' => $this->dateConvert($resepsi->date),
						'waktu' =>  date('H:i', strtotime($resepsi->time)) . ' WIB',
						'alamat' => $resepsi->address,
						'maps' => $resepsi->maps
					],
				];
				$data['acara'] = $acara;
				$data['countdown'] = $this->dateConvertCountDown($akad->date, $akad->time);
				$data['akadDate'] = [
					'tanggal' => date('d', strtotime($akad->date)),
					'bulan' => $this->bulan[(int)date('m', strtotime($akad->date))],
					'tahun' => date('Y', strtotime($akad->date))
				];
				$data['loveStories'] = $this->db->get_where('love_story', ['invitation_id' => $invitation->invitation_id])->result();
				$data['gifts'] = $this->invitation->getJoinGiftBank(['invitation_id' => $invitation->invitation_id])->result();

				// kondisi untuk mengecek apakah ada file model undangan tersebut atau tidak
				$view = 'model_undangan/previews/' . $design->view . '_preview';
				if (file_exists(APPPATH . 'views/' . $view  . '.php')) {
					// jika ada maka akan ditampilkan beserta data-data undangan
					$this->load->view($view, $data, false);
				} else {
					// jika tidak maka akan tampil halaman notfound 4040
					$data['title'] = '404 Not Found';
					$this->load->view('errors/contents/v_error_404', $data, false);
				}
			} else {
				$data['title'] = '404 Not Found';
				$this->load->view('errors/contents/v_error_404', $data, FALSE);
			}
		}
	}

	public function dateConvert($date)
	{
		$hari = $this->hari[(int)date('w', strtotime($date))];
		$tanggal = date('d', strtotime($date));
		$bulan = $this->bulan[(int)date('m', strtotime($date))];
		$tahun = date('Y', strtotime($date));
		$result = $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun;
		return $result;
	}

	public function dateConvertCountDown($dates, $time)
	{
		$date = date('d', strtotime($dates));
		$month = $this->months[(int)date('m', strtotime($dates))];
		$year = date('Y', strtotime($dates));
		$time = date('H:i:s', strtotime($time));
		return $month . ' ' . $date . ', ' . $year . ' ' . $time;
	}

	public function get_message()
	{
		$output = '';
		$where = array(
			'invitation_id' => $_GET['id'],
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
				$bgcolor = 'text-yellow-500';
			}
			$output .= '
			<div class="flex mt-3">
				<div class="mr-3">
					<div class="flex w-9 h-9 font-semibold border border-slate-300 shadow-lg ' . $bgcolor . ' text-center rounded-full items-center justify-center">' . $inisial . '</div>
				</div>
				<div>
					<div>
						<p class="font-semibold opacity-60 tracking-wide text-base-sm lg:text-base-md">' . $val->name . '</p>
						<p class="text-xs text-slate-500 mb-1">' . date('d-m-Y H:i', strtotime($val->create_time)) . '</p>
						<p class="text-base-xs tracking-wide text-slate-700 text-justify mr-2">' . $val->message . '</p>
					</div>
				</div>
			</div>
			';
		}
		echo json_encode([$output]);
	}

	public function get_message_standard()
	{
		$output = '';
		$where = array(
			'invitation_id' => $_GET['id'],
		);
		$query 	= $this->db->order_by('create_time', 'DESC')->get_where('message', $where);
		$result	= $query->result();
		foreach ($result as $key => $val) {
			$inisial = substr($val->name, 0, 1);
			if ($val->status == 2) {
				$bgcolor = 'avatar-nama-hadir avtr';
			} elseif ($val->status == 1) {
				$bgcolor = 'avatar-nama-tdkHadir avtr';
			} elseif ($val->status == 0) {
				$bgcolor = 'avatar-nama-blmTahu avtr';
			}
			$output .= '
			<div class="dtl-pesan">
			<table border="0">
				<tr>
					<td width="10" rowspan="3">
						<div class="' . $bgcolor . '">
							<p>' . $inisial . '</p>
						</div>
					</td>
					<td>
						<div class="nama">
							<p>' . $val->name . '</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="tgl-kirim">
							<p>' . date('d-m-Y H:i', strtotime($val->create_time)) . ' WIB</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="ucapan">
							<p>' . $val->message . '</p>
						</div>
					</td>
				</tr>
			</table>
			<hr>
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
		$html = $this->load->view('model_undangan/previews/zoom_photo', $data);
		$reponse = [
			'url' => $html,
			'csrfName' => $this->security->get_csrf_token_name(),
			'csrfHash' => $this->security->get_csrf_hash()
		];
		echo json_encode($reponse);
	}

	public function get_message_demo_special()
	{
		$output = '';
		$query 	= $this->db->order_by('create_time', 'DESC')
			->limit(8)
			->get_where('message', [
				'invitation_id' => 0
			]);
		$result	= $query->result();
		foreach ($result as $key => $val) {
			$inisial = substr($val->name, 0, 1);
			if ($val->status == 2) {
				$bgcolor = 'text-green-500';
			} elseif ($val->status == 1) {
				$bgcolor = 'text-red-400';
			} elseif ($val->status == 0) {
				$bgcolor = 'text-yellow-500';
			}
			$output .= '
			<div class="flex mt-3">
				<div class="mr-3">
					<div class="flex w-9 h-9 font-semibold border border-slate-300 shadow-lg ' . $bgcolor . ' text-center rounded-full items-center justify-center">' . $inisial . '</div>
				</div>
				<div>
					<div>
						<p class="font-semibold opacity-60 tracking-wide text-base-sm lg:text-base-md">' . $val->name . '</p>
						<p class="text-xs text-slate-500 mb-1">' . date('d-m-Y H:i', strtotime($val->create_time)) . '</p>
						<p class="text-base-xs tracking-wide text-slate-700 text-justify mr-2">' . $val->message . '</p>
					</div>
				</div>
			</div>
			';
		}
		echo json_encode([$output]);
	}

	public function get_message_demo_standard()
	{
		$output = '';
		$query 	= $this->db->order_by('create_time', 'DESC')
			->limit(8)
			->get_where('message', [
				'invitation_id' => 0
			]);
		$result	= $query->result();
		foreach ($result as $key => $val) {
			$inisial = substr($val->name, 0, 1);
			if ($val->status == 2) {
				$bgcolor = 'avatar-nama-hadir avtr';
			} elseif ($val->status == 1) {
				$bgcolor = 'avatar-nama-tdkHadir avtr';
			} elseif ($val->status == 0) {
				$bgcolor = 'avatar-nama-blmTahu avtr';
			}
			$output .= '
			<div class="dtl-pesan">
			<table border="0">
				<tr>
					<td width="10" rowspan="3">
						<div class="' . $bgcolor . '">
							<p>' . $inisial . '</p>
						</div>
					</td>
					<td>
						<div class="nama">
							<p>' . $val->name . '</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="tgl-kirim">
							<p>' . date('d-m-Y H:i', strtotime($val->create_time)) . ' WIB</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="ucapan">
							<p>' . $val->message . '</p>
						</div>
					</td>
				</tr>
			</table>
			<hr>
		</div>
			';
		}
		echo json_encode([$output]);
	}

	public function get_count_message()
	{
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			$id = 0;
		}

		$messages = $this->db->order_by('create_time', 'DESC')
			->limit(8)
			->get_where('message', [
				'invitation_id' => $id
			])->num_rows();
		echo json_encode($messages);
	}
}
