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
							<li class="breadcrumb-item disabled" aria-current="page">Master data</li>
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
					<h6 class="font-weight-medium">Data Admin</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="dataTable" class="table table-striped table-bordered " style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 2%;">No</th>
								<th style="width: 5%;">Kode</th>
								<th style="width: 9%;">Nama</th>
								<th style="width: 7%;">No Telepon</th>
								<th style="width: 12%;">Alamat</th>
								<th style="width: 7%;">Status</th>
								<th style="width: 7%;">Dibuat</th>
								<th style="width: 7%;">Diubah</th>
								<th style="width: 3%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($admin as $adm) : ?>
								<tr>
									<td><?= $adm['nomor'] ?></td>
									<td><?= $adm['code'] ?></td>
									<td><?= $adm['name'] ?></td>
									<td><?= $adm['phone'] ?></td>
									<td><?= $adm['address'] ?></td>
									<td><?= $adm['status'] ?></td>
									<td><?= $adm['created'] ?></td>
									<td><?= $adm['updated'] ?></td>
									<td>
										<a href="<?= base_url('admin/master_data/detail_admin?code=' . $adm['code']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
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
