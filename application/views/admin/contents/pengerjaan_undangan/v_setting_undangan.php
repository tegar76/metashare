<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-7 align-self-center">
				<h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb m-0 p-0">
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- *************************************************************** -->

		<div class="d-flex mb-4">
			<div class="btn-group mr-3">
				<button type="button" class="btn btn-primary dropdown-toggle rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-1"><i class="fa fa-plus"></i></span>
					Tambah Data ..
					<span class="ml-3"><i class="fa fa-caret-down"></i></span>
				</button>
				<div class="dropdown-menu">
					<a href="<?= base_url('admin/undangan/create/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="server" class="feather-14 mt-n1 mr-1"></i> Data undangan</a>
					<a href="<?= base_url('admin/undangan/tamu/create/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="user" class="feather-14 mt-n1 mr-1"></i> Tamu Undangan</a>
					<a href="<?= base_url('admin/undangan/gallery/create/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="image" class="feather-14 mt-n1 mr-1"></i> Foto Galeri</a>
					<a href="<?= base_url('admin/undangan/love-story/create/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="message-circle" class="feather-14 mt-n1 mr-1"></i> Perjalanan Cinta</a>
					<a href="<?= base_url('admin/undangan/gifts/create/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="credit-card" class="feather-14 mt-n1 mr-1"></i> Berikan Hadiah</a>
				</div>
			</div>
			<div class="btn-group mr-3">
				<button type="button" class="btn btn-success dropdown-toggle rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-1"><i class="fa fa-edit"></i></span>
					Edit Data ..
					<span class="ml-3"><i class="fa fa-caret-down"></i></span>
				</button>
				<div class="dropdown-menu mr-3">
					<a href="<?= base_url('admin/undangan/update/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="server" class="feather-14 mt-n1 mr-1"></i> Data undangan</a>
					<a href="<?= base_url('admin/undangan/gallery/detail/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="image" class="feather-14 mt-n1 mr-1"></i> Foto Galeri</a>
					<a href="<?= base_url('admin/undangan/love-story/detail/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="message-circle" class="feather-14 mt-n1 mr-1"></i> Perjalanan Cinta</a>
					<a href="<?= base_url('admin/undangan/gifts/detail/' . $detail->t_code) ?>" class="dropdown-item" type="button"><i data-feather="credit-card" class="feather-14 mt-n1 mr-1"></i> Berikan Hadiah</a>
				</div>
			</div>
			<div class="btn-group mr-3">
				<button type="button" class="btn btn-outline-success dropdown-toggle rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-1"><i class="fa fa-edit"></i></span>
					Konfirmasi Pengerjaan
					<span class="ml-3"><i class="fa fa-caret-down"></i></span>
				</button>
				<div class="dropdown-menu mr-3">
					<div class="d-flex align-items-center">
						<span class="dropdown-item disabled">Proses Pengerjaan</span>
						<div>
							<label class="switch dropdown-item mt-2">
								<input type="checkbox" checked>
								<span class="slider round"></span>
							</label>
						</div>
						<span class="dropdown-item disabled">Sudah Dikerjakan</span>
					</div>
				</div>
			</div>
			<!-- <a target="_blank" href="<?= base_url('wedding/runa-ratna') ?>" class="btn btn-sm btn-outline-warning px-2 d-flex align-items-center">
				<i class="fas fa-eye mr-1"></i>
				<span>Live Demo</span>
			</a> -->
		</div>

		<div class="card py-2 px-4">
			<table class="table">
				<tbody>
					<tr class="table-borderless">
						<th scope="row" class="text-primary col-4">Data Konsumen</th>
						<td></td>
					</tr>
					<tr class="table-borderless">
						<th scope="row">Nama Konsumen</th>
						<td><?= $detail->cs_name ?></td>
					</tr>
					<tr>
						<th scope="row">No Telepon</th>
						<td><?= $detail->cs_phone ?></td>
					</tr>
					<tr>
						<th scope="row">Email</th>
						<td><?= $detail->cs_email ?></td>
					</tr>
					<tr>
						<th scope="row" class="text-primary">Data Transaksi</th>
						<td></td>
					</tr>
					<tr class="table-borderless">
						<th scope="row">Tanggal</th>
						<td><?= date('d-m-Y H:i', strtotime($detail->t_date)) . " WIB" ?></td>
					</tr>
					<tr>
						<th scope="row">Kode</th>
						<td><?= $detail->t_code ?></td>
					</tr>
					<tr>
						<th scope="row">Jenis Undangan</th>
						<td><?= $detail->m_type ?></td>
					</tr>
					<tr>
						<th scope="row">Kategori</th>
						<td><?= $detail->m_category ?></td>
					</tr>
					<tr>
						<th scope="row">Model Undangan</th>
						<td><a target="_blank" href="<?= base_url('preview?model=' . $detail->m_view) ?>" class="text-link-detail" data-toggle="tooltip" title="Lihat" data-placement="right"><?= $detail->m_name ?></a></td>
					</tr>
					<tr>
						<th scope="row">Harga</th>
						<td>Rp. <?= $detail->m_price ?></td>
					</tr>
					<tr>
						<th scope="row">Masa Aktif</th>
						<td>-</td>
					</tr>
					<tr>
						<th scope="row">Keterangan</th>
						<?= $desc ?>
						<!-- *** nama class : belum dikerjakan = text-danger, proses pengerjaan = text-warning, sudah dikerjakan = text-success -->
					</tr>
					<tr>
						<th scope="row">Status</th>
						<td><?= ($detail->t_status < 1) ? 'Tidak Aktif' : 'Aktif' ?></td>
					</tr>
					<tr>
						<th scope="row">Bukti Pembayaran</th>
						<td><a target="_blank" href="<?= base_url('views/view_img?code=' . $detail->t_code) ?>"><img src="<?= base_url('assets/icons/icon_file_img.svg') ?>" alt="" width="25" data-toggle="tooltip" title="Lihat" data-placement="right"></a></td>
					</tr>
					<tr>
						<th scope="row">Sumber Order</th>
						<td><?= $detail->t_source ?></td>
					</tr>
					<tr>
						<th scope="row" class="text-primary">Data Admin Yang Menangani</th>
						<td></td>
					</tr>
					<tr class="table-borderless">
						<th scope="row">Kode</th>
						<td><?= $detail->adm_code ?></td>
					</tr>
					<tr>
						<th scope="row">Nama</th>
						<td><?= $detail->adm_name ?></td>
					</tr>
					<tr>
						<th scope="row">No Telepon</th>
						<td><?= $detail->adm_phone ?></td>
					</tr>
				</tbody>
			</table>
			<hr class="mt-n3">
			<div class="d-flex mb-2 ml-2">
				<a target="_blank" href="<?= base_url('PreviewUndangan/pratinjau') ?>" class="btn btn-sm btn-outline-primary px-2">
					<i class="fas fa-eye mr-1"></i>
					<span class="mb-1">Pratinjau</span>
				</a>
			</div>
		</div>

		<div class="card col-10">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data Tamu Undangan</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 1%;">No</th>
								<th style="width: 8%;">Nama</th>
								<th style="width: 6%;">Dibuat</th>
								<th style="width: 6%;">Diubah</th>
								<th style="width: 4%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($guest as $row) : ?>
								<tr>
									<td><?= $row['nomor'] ?></td>
									<td><?= $row['name'] ?></td>
									<td><?= $row['create'] ?></td>
									<td><?= $row['update'] ?></td>
									<td>
										<div class="flex">
											<a href="" class="btn btn-sm btn-outline-warning mr-1"><i data-feather="copy" class="feather-14" data-toggle="tooltip" title="Salin" data-placement="top"></i></a>
											<a href="" class="btn btn-sm btn-primary mr-1"><i data-feather="eye" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('admin/undangan/tamu/update/' . $row['id']) ?>" class="btn btn-sm btn-success"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Setting" data-placement="top"></i></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
