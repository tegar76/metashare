<?php

class PengerjaanUndangan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Pengerjaan Undangan';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_pengerjaan_undangan';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

    public function detailOrder()
	{
		$data['title'] = 'Detail Order';
		$data['content'] = 'admin/contents/pengerjaan_undangan/v_detail_order';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

    public function settingUndangan()
	{
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
