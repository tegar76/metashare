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
							<?php foreach ($invite as $row => $value) : ?>
								<tr>
									<td><?= $value['nomor'] ?></td>
									<td><?= $value['code'] ?></td>
									<td><?= $value['date'] ?></td>
									<td><?= $value['customer'] ?></td>
									<td><?= $value['category'] ?></td>
									<td><?= $value['model'] ?></td>
									<td><?= $value['admin'] ?></td>
									<td class="<?= $value['clss'] ?>"><?= $value['desc'] ?></td>
									<td><?= $value['status'] ?></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('admin/invitation?code=' . $value['code']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('admin/invitation/settings') ?>" class="btn btn-sm btn-success"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
										</div>
									</td>
								</tr>
							<?php endforeach ?>
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
