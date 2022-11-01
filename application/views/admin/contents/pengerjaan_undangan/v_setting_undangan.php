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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan') ?>">Pengerjaan undangan</a></li>
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
				<button type="button" class="btn btn-primary dropdown-toggle rounded"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-1"><i class="fa fa-plus"></i></span>
					Tambah Data ..
					<span class="ml-3"><i class="fa fa-caret-down"></i></span>
				</button>
				<div class="dropdown-menu">
					<a href="<?= base_url('Admin/PengerjaanUndangan/tambahDataUndangan')?>" class="dropdown-item" type="button"><i data-feather="server" class="feather-14 mt-n1 mr-1"></i> Data undangan</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/tambahTamuUndangan')?>" class="dropdown-item" type="button"><i data-feather="user" class="feather-14 mt-n1 mr-1"></i> Tamu Undangan</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/tambahFoto')?>" class="dropdown-item" type="button"><i data-feather="image" class="feather-14 mt-n1 mr-1"></i> Foto Galeri</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/tambahPerjalananCinta')?>" class="dropdown-item" type="button"><i data-feather="message-circle" class="feather-14 mt-n1 mr-1"></i> Perjalanan Cinta</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/tambahBerikanHadiah')?>" class="dropdown-item" type="button"><i data-feather="credit-card" class="feather-14 mt-n1 mr-1"></i> Berikan Hadiah</a>
				</div>
			</div>
			<div class="btn-group mr-3">
				<button type="button" class="btn btn-success dropdown-toggle rounded"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-1"><i class="fa fa-edit"></i></span>
					Edit Data ..
					<span class="ml-3"><i class="fa fa-caret-down"></i></span>
				</button>
				<div class="dropdown-menu mr-3">
					<a href="<?= base_url('Admin/PengerjaanUndangan/editDataUndangan')?>" class="dropdown-item" type="button"><i data-feather="server" class="feather-14 mt-n1 mr-1"></i> Data undangan</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/editTamuUndangan')?>" class="dropdown-item" type="button"><i data-feather="user" class="feather-14 mt-n1 mr-1"></i> Tamu Undangan</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/editFoto')?>" class="dropdown-item" type="button"><i data-feather="image" class="feather-14 mt-n1 mr-1"></i> Foto Galeri</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/editPerjalananCinta')?>" class="dropdown-item" type="button"><i data-feather="message-circle" class="feather-14 mt-n1 mr-1"></i> Perjalanan Cinta</a>
					<a href="<?= base_url('Admin/PengerjaanUndangan/editBerikanHadiah')?>" class="dropdown-item" type="button"><i data-feather="credit-card" class="feather-14 mt-n1 mr-1"></i> Berikan Hadiah</a>
				</div>
			</div>
			<div class="btn-group mr-3">
				<button type="button" class="btn btn-outline-success dropdown-toggle rounded"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
			<a target="_blank" href="<?= base_url('wedding/runa-ratna')?>" class="btn btn-sm btn-outline-warning px-2 d-flex align-items-center">
				<i class="fas fa-eye mr-1"></i>
				<span>Live Demo</span>
			</a>
		</div>

		<div class="card col-10">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data  Tamu Undangan</h6>
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
								<tr>
									<td>1</td>
									<td>Heru</td>
									<td>15-08-2022 17:33 WIB </td>
									<td>15-08-2022 17:33 WIB </td>
									<td>
										<div class="flex">
											<a href="" class="btn btn-sm btn-outline-warning mr-1"><i data-feather="copy" class="feather-14" data-toggle="tooltip" title="Salin" data-placement="top"></i></a>
											<a href="<?= base_url('Admin/PengerjaanUndangan/detailOrder') ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="eye" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('Admin/PengerjaanUndangan/detailOrder') ?>" class="btn btn-sm btn-success"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Setting" data-placement="top"></i></a>
										</div>
									</td>
								</tr>
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
