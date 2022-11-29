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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('su-admin/dahsboard') ?>">Dashboard</a></li>
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
		<div class="form-group col-4 pb-2">
			<div class="input-group mb-2 ml-n3">
				<input class="form-control" id="change-month" type="text" onfocus="(this.type='month')" placeholder="Pilih Bulan">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-filter"></i></div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data Kustomer</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 5%;">Kode</th>
								<th style="width: 10%;">Tanggal</th>
								<th style="width: 8%;">Sumber Order</th>
								<th style="width: 8%;">Nama</th>
								<th style="width: 14%;">Jenis</th>
								<th style="width: 7%;">Kategori</th>
								<th style="width: 7%;">Nama Model</th>
								<th style="width: 3%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($order as $row => $value) : ?>
								<tr>
									<td><?= $value['nomor'] ?></td>
									<td><?= $value['code'] ?></td>
									<td><?= $value['date'] ?></td>
									<td>-</td>
									<td><?= $value['customer'] ?></td>
									<td>Undangan Pernikahan <?= $value['type'] ?></td>
									<td><?= $value['category'] ?></td>
									<td><?= $value['model'] ?></td>
									<td>
										<a href="<?= base_url('su-admin/order/update/' . $value['code']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
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
			<a href="<?= base_url('SuperAdmin/Pengorderan/tambahPengorderan') ?>">
				<div class="floating-button">+</div>
			</a>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<script>
		$("#change-month").change(function() {
			var month = $("#change-month").val();
			window.location = BASEURL + "su-admin/order?date=" + month;
		});
	</script>
