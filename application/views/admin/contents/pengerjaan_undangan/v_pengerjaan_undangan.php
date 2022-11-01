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
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Tugas Terbaru Pengerjaan Undangan Dari Super Admin</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 5%;">Kode</th>
								<th style="width: 8%;">Tanggal</th>
								<th style="width: 10%;">Nama Kustomer</th>
								<th style="width: 7%;">Kategori</th>
								<th style="width: 9%;">Nama Model</th>
								<th style="width: 8%;">Admin</th>
								<th style="width: 12%;">Keterangan</th>
								<th style="width: 7%;">Status</th>
								<th style="width: 6%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>1</td>
									<td>00001</td>
									<td>01-01-1970 07:00 WIB</td>
									<td>Heru</td>
									<td>Special</td>
									<td>Model A</td>
									<td>Bayu purnomo</td>
									<!-- n: Belum dikerjakan : class=text-danger, Sudah dikerjakan : class=text-success, proses pengerjaan : class=text-warning -->
									<td class="text-warning">Proses Pengerjaan</td>
									<td>Aktif</td>
									<td>
										<div class="flex">
											<a href="<?= base_url('Admin/PengerjaanUndangan/detailOrder') ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>" class="btn btn-sm btn-success"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
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
