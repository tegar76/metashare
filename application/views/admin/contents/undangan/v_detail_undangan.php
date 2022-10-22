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
					<h6 class="font-weight-medium">Data Tamu Undangan</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 2%;">No</th>
								<th style="width: 10%;">Tamu Undangan</th>
								<th style="width: 2%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($guest as $row) : ?>
								<tr>
									<td><?= $row['nomor']; ?></td>
									<td><?= $row['name']; ?></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('wedding/' . $row['slug'] . '?to=' . $row['name']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<button class="btn btn-sm btn-warning mr-1 btn-copy-link" link="<?= base_url('wedding/' . $row['slug'] . '?to=' . $row['name']) ?>"><i data-feather="copy" class="feather-14" data-toggle="tooltip" title="Copy" data-placement="top"></i></button>
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

	<script>
		$(document).ready(function() {
			$('.btn-copy-link').on("click", function(e) {
				e.preventDefault();
				var link = $(e.currentTarget).attr("link");
				document.addEventListener('copy', function(e) {
					e.clipboardData.setData('text/plain', link);
					e.preventDefault();
				}, true);
				document.execCommand('copy');
				console.log('copied text : ', link);
				alert('Link Berhasil Dicopy');
			});
		});
	</script>
