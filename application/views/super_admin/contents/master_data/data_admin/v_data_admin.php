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
					<table id="data-admin" class="table table-striped table-bordered " style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 6%;">Kode</th>
								<th style="width: 9%;">Nama</th>
								<th style="width: 9%;">No Telepon</th>
								<th style="width: 12%;">Alamat</th>
								<th style="width: 7%;">Status</th>
								<th style="width: 9%;">Dibuat</th>
								<th style="width: 9%;">Diubah</th>
								<th style="width: 9%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($admin as $row => $val) : ?>
								<tr>
									<td><?= $val['nomor'] ?></td>
									<td><?= $val['code'] ?></td>
									<td><?= $val['name'] ?></td>
									<td><?= $val['phone'] ?></td>
									<td><?= $val['address'] ?></td>
									<td><?= $val['status'] ?></td>
									<td><?= $val['created'] ?></td>
									<td><?= $val['updated'] ?></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('su-admin/master/detail_admin?code=' . $val['code']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('su-admin/master/update_admin/' . $val['code']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
											<a href="javascript:void(0)" code-admin="<?= $val['code'] ?>" class="btn btn-sm btn-danger delete-admin"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
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
			<a href="<?= base_url('su-admin/master/tambah_admin') ?>">
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
			var csrfName = $(".csrf_token").attr("name");
			var csrfHash = $(".csrf_token").val();
			$("#data-admin").DataTable();
			$("#data-admin").on("click", ".delete-admin", function(e) {
				e.preventDefault();
				var code = $(e.currentTarget).attr("code-admin");
				var dataJson = {
					[csrfName]: csrfHash,
					code: code,
				};
				Swal.fire({
					title: "Hapus Data Admin",
					text: "Anda yakin ingin menghapus data admin ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "su-admin/master/delete_admin",
							data: dataJson,
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Data Admin",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Menghapus Data Admin Gagal",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Menghapus Data Admin Berhasil",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = BASEURL + "su-admin/master/data_admin";
								}
							},
							error: function() {
								swal.fire(
									"Penghapusan Data Admin Gagal",
									"Anda tidak dapat menghapus data admin yang masih bertugas!!",
									"error"
								);
							},
						});
					}
				});
			});
		});
	</script>
