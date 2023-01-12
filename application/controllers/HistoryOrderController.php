<?php

class HistoryOrderController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->customer = $this->db->get_where('customer', array('email' => $this->session->userdata('email')))->row();
		$this->load->model('Home_model', 'home', true);
		$this->load->model('MasterModel', 'master', true);
		$this->load->helper('auth');
		if (!is_logged_in()) {
			redirect('login');
		}
	}

	public function index()
	{
		$customer = $this->customer;
		$orders = $this->home->getHistoryOrder($customer->cus_id);
		$data['orders'] = array();
		if ($orders) {
			foreach ($orders as $order) {
				if ($order->desc == 0) {
					$status = '<div class="text-danger bg-danger/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Belum Dikerjakan</div>';
				} elseif ($order->desc == 1) {
					$status = '<div class="text-warning bg-warning/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Proses Pengerjaan</div>';
				} elseif ($order->desc == 2) {
					$status = '<div class="text-success bg-success/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Sudah Dikerjakan</div>';
				}

				$data['orders'][] = array(
					'code' => $order->code,
					'active' => ($order->active != null) ? date('d-m-Y H:i', strtotime($order->active)) . " WIB" : '-',
					'status' => $status,
					'model' => $order->model,
					'category' => 'Pernikahan Digital/' . $order->category,
					'source' => $order->source
				);
			}
		}
		$data['title'] = 'Riwayat Order';
		$data['content'] = 'marketplace/contents/riwayat_order/v_riwayat_order';
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function detail($code)
	{
		$detail = $this->master->getDetailPenugasan($code);
		if ($code == false or empty($detail)) {
			return redirect('history/order');
		} else {
			if ($detail) {
				if ($detail->t_desc == 0) {
					$data['desc'] = '<p class="col-span-2 text-danger bg-danger/20 w-fit py-[2px] px-3 rounded-lg">Belum Dikerjakan</p>';
				} elseif ($detail->t_desc == 1) {
					$data['desc'] = '<p class="col-span-2 text-warning bg-warning/20 w-fit py-[2px] px-3 rounded-lg">Proses Pengerjaan</p>';
				} elseif ($detail->t_desc == 2) {
					$data['desc'] = '   <p class="col-span-2 text-success bg-success/20 w-fit py-[2px] px-3 rounded-lg">Sudah Dikerjakan</p>';
				}
				$data['detail'] = $detail;
			}
			$invt = $this->db->query("SELECT slug, invitation_id as id FROM invitation WHERE code='$detail->t_code'")->row();
			if (!empty($invt)) {
				$data['guest'] = $this->db->get_where('invited_guest', ['invitation_id' => $invt->id])->num_rows();
				$data['message'] =  $this->db->get_where('message', ['invitation_id' => $invt->id])->num_rows();
				$data['invtId'] = $invt->id;
				$data['invt'] = $invt;
			} else {
				$data['guest'] = 0;
				$data['message'] = 0;
				$data['invtId'] = null;
				$data['invt'] = null;
			}

			$data['testimony'] = $this->db->get_where('testimony', array(
				'cus_id' => $this->session->userdata('id'),
				'model_id' => $detail->m_id
			))->row();
		}

		if ($_REQUEST) {
			$testimony = array(
				'message' => $_POST['testimony'],
				'cus_id' => $_POST['customer'],
				'model_id' => $_POST['model'],
			);
			$this->db->insert('testimony', $testimony);
			sweetAlert('Success', 'Terima kasih atas masukan anda', 'success');
			return redirect('history/order/' . $code . '/detail');
		}
		$data['title'] = 'Detail Order';
		$data['content'] = 'marketplace/contents/riwayat_order/v_detail_order';
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function invited_guest()
	{
		$data['guest'] = array();
		if ($_REQUEST) {
			$id = $_GET['id'];
			$guest = $this->db->query("SELECT * FROM invited_guest WHERE invitation_id='$id'")->result();
			$invt = $this->db->query("SELECT slug FROM invitation WHERE invitation_id='$id'")->row();
			$data['slug'] = $invt->slug;
			$data['guest'] = $guest;
			$data['nomor'] = 1;
		}
		$data['code'] = $_GET['code'];
		$data['title'] = 'Data Tamu Undangan';
		$data['content'] = 'marketplace/contents/riwayat_order/v_tamu_undangan';
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function messages()
	{
		$data['message'] = array();
		if ($_REQUEST) {
			$id = $_GET['id'];
			$message = $this->db->order_by('create_time', 'desc')->get_where('message', array('invitation_id' => $id));
			$output = array();
			if (!empty($message)) {
				foreach ($message->result() as $key => $val) {
					$inisial = substr($val->name, 0, 1);
					if ($val->status == 2) {
						$bgcolor = 'text-success';
					} elseif ($val->status == 1) {
						$bgcolor = 'text-danger';
					} elseif ($val->status == 0) {
						$bgcolor = 'text-warning';
					}
					$output[$key] = '
					<div class="mr-3 flex items-center">
                        <div class="flex w-9 h-9 font-semibold border border-slate-300 shadow-lg ' . $bgcolor . ' text-center rounded-full items-center justify-center">' . $inisial . '</div>
                    </div>
                    <div>
                        <div>
                            <p class="tracking-wide text-base-sm lg:text-base-md text-slate-500 mb-1">' . $val->name . '</p>
                            <p class="text-xs text-slate-400 mb-1">' . date('d-m-Y H:i', strtotime($val->create_time)) . '</p>
                            <p class="text-base-xs tracking-wide text-slate-500/80 text-justify mr-2">' . $val->message . '</p>
							</div>
							</div>
							';
				}
				$data['message'] = $output;
			}
			$data['rowMessage'] = $message->num_rows();
		}
		$data['code'] = $_GET['code'];
		$data['title'] = 'Pesan Bahagia';
		$data['content'] = 'marketplace/contents/riwayat_order/v_pesan_bahagia';
		$this->load->view('marketplace/layouts/wrapper', $data, false);
	}

	public function order_now()
	{
		if ($_REQUEST) {
			$code = $this->home->createCodeTransaksi();
			$order = array(
				'code' => $code,
				'cus_id' => $this->session->userdata('id'),
				'model_id' => $this->input->post('model_id')
			);
			$this->db->insert('transaction', $order);
			$model = $this->db->get_where('model_invitation', ['model_id' => $this->input->post('model_id')])->row();
			$message = "Saya tertarik dan saya ingin mengorder model undangan pernikahan digital, dengan spesifikasinya sbb : %0A
				Model : $model->name %0A
				Jenis  : $model->type %0A
				Kategori : $model->category %0A
				Harga : Rp. $model->price";
			$response = [
				'success' => true,
				'message' => $message
			];

			echo json_encode($response);
		}
	}
}
