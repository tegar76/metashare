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
					<h6 class="font-weight-medium">Data Undangan</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 8%;">Username</th>
								<th style="width: 8%;">Nama Kustomer</th>
								<th style="width: 10%;">Jenis Undangan</th>
								<th style="width: 7%;">Kategori</th>
								<th style="width: 8%;">Model Undangan</th>
								<th style="width: 12%;">Keterangan</th>
								<th style="width: 7%;">Status</th>
								<th style="width: 8%;">Masa Aktif</th>
								<th style="width: 10%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($invitation as $row) : ?>
								<tr>
									<td><?= $row['nomor']; ?></td>
									<td><?= $row['username']; ?></td>
									<td><?= $row['customer']; ?></td>
									<td><?= $row['type']; ?></td>
									<td><?= $row['category']; ?></td>
									<td><?= $row['model']; ?></td>
									<td><?= $row['desc']; ?></td>
									<td><?= $row['active']; ?></td>
									<td><?= $row['period']; ?></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('admin/undangan/detail/' . $row['id']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
										</div>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Floating Button Add -->
		<div class="floating-container">
			<a href="<?= base_url('su-admin/customer/add') ?>">
				<div class="floating-button">+</div>
			</a>
		</div>
		<!-- Floating Button Add End -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
