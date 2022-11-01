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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>">Setting Data Undangan</a></li>
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
		<div class="card col-10">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data Berikan Hadiah</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 1%;">No</th>
								<th style="width: 5%;">Bank</th>
								<th style="width: 5%;">No Rekening</th>
								<th style="width: 5%;">Penerima</th>
								<th style="width: 2%;">QR Code</th>
								<th style="width: 2%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>1</td>
									<td>BCA</td>
									<td>324222242742</td>
									<td>Heru</td>
									<td><img src="<?= base_url('assets/icons/icon_file_img.svg')?>" alt="IMG Default QR Code" width="25px"></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('Admin/PengerjaanUndangan/editBerikanHadiahDetail')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
											<a href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
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
