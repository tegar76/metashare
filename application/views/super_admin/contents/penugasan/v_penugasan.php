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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('su-admin/dashboard') ?>">Dashboard</a></li>
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
				<input class="form-control" type="text" id="change-month" onfocus="(this.type='month')" placeholder="Pilih Bulan">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fa fa-filter"></i></div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data Penugasan</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="data-penugasan" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 6%;">Kode</th>
								<th style="width: 8%;">Tanggal</th>
								<th style="width: 8%;">Nama Kustomer</th>
								<th style="width: 7%;">Kategori</th>
								<th style="width: 7%;">Nama Model</th>
								<th style="width: 8%;">Admin</th>
								<th style="width: 12%;">Keterangan</th>
								<th style="width: 7%;">Status</th>
								<th style="width: 10%;">Aksi</th>
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
											<a href="<?= base_url('su-admin/penugasan/detail?code=' . $value['code']) ?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
											<a href="<?= base_url('su-admin/penugasan/update/' . $value['code']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
											<a href="javascript:void(0)" class="btn btn-sm btn-danger delete-penugasan" code-penugasan="<?= $value['code'] ?>"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
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

	<script>
		$(document).ready(function() {
			var csrfName = $(".csrf_token").attr("name");
			var csrfHash = $(".csrf_token").val();
			$("#data-penugasan").DataTable();
			$("#data-penugasan").on("click", ".delete-penugasan", function(e) {
				e.preventDefault();
				var code = $(e.currentTarget).attr("code-penugasan");
				var dataJson = {
					[csrfName]: csrfHash,
					code: code,
				};
				Swal.fire({
					title: "Hapus Data penugasan",
					text: "Anda yakin ingin menghapus data penugasan ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "su-admin/penugasan/delete_penugasan",
							data: dataJson,
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Data Penugasan",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Menghapus Data Penugasan Gagal",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Menghapus Data Penugasan Berhasil",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = BASEURL + "su-admin/penugasan";
								}
							},
							error: function() {
								swal.fire(
									"Penghapusan Data Admin Gagal",
									"Anda tidak dapat menghapus data penugasan!!",
									"error"
								);
							},
						});
					}
				});
			});
		});
		$("#change-month").change(function() {
			var month = $("#change-month").val();
			window.location = BASEURL + "su-admin/penugasan?date=" + month;
		});
	</script>
