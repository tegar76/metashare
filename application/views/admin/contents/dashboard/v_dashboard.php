<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-7 align-self-center">
				<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb m-0 p-0">
							<li class="breadcrumb-item disabled"><?= $title ?>
							</li>
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
		<!-- Laporan Singkat -->
		<!-- *************************************************************** -->
		<div class="card-group">
			<div class="card border-right">
				<div class="card-body">
					<div class="d-flex d-lg-flex d-md-block align-items-center">
						<div class="total">
							<div class="d-inline-flex align-items-center">
								<h2 class="font-weight-medium text-black"><?= $total['invtNotYet']; ?></h2>
							</div>
							<h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Yang Belum Dikerjakan</h6>
						</div>
						<div class="ml-auto mt-md-3 mt-lg-0">
							<span class="opacity-7 text-muted"><i class="fa fa-file-circle-xmark fa-xl"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="card border-right">
				<div class="card-body">
					<div class="d-flex d-lg-flex d-md-block align-items-center">
						<div class="total">
							<h2 class="font-weight-medium text-black"><?= $total['invtProcess']; ?></h2>
							<h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Dalam Proses Pengerjaan
							</h6>
						</div>
						<div class="ml-auto mt-md-3 mt-lg-0">
							<span class="opacity-7 text-muted"><i class="fa-solid fa-file-pen fa-xl"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="card border-right">
				<div class="card-body">
					<div class="d-flex d-lg-flex d-md-block align-items-center">
						<div class="total">
							<div class="d-inline-flex align-items-center">
								<h2 class="font-weight-medium text-black"><?= $total['invtFinish']; ?></h2>
							</div>
							<h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Sudah Dikerjakan </h6>
						</div>
						<div class="ml-auto mt-md-3 mt-lg-0">
							<span class="opacity-7 text-muted"><i class="fa-solid fa-file-circle-check fa-xl"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="d-flex d-lg-flex d-md-block align-items-center">
						<div class="total">
							<h2 class="font-weight-medium text-black"><?= $total['cusActive']; ?></h2>
							<h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Kustomer Aktif</h6>
						</div>
						<div class="ml-auto mt-md-3 mt-lg-0">
							<span class="opacity-7 text-muted"><i class="fa-solid fa-user-check fa-xl"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Tugas Terbaru Pengerjaan Undangan Dari Super Admin</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="table-penugasan" class="table table-striped table-bordered " style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 5%;">Kode</th>
								<th style="width: 7%;">Tanggal</th>
								<th style="width: 11%;">Nama Kustomer</th>
								<th style="width: 6%;">Kategori</th>
								<th style="width: 9%;">Nama Model</th>
								<th style="width: 6%;">Admin</th>
								<th style="width: 11%;">Keterangan</th>
								<th style="width: 6%;">Status</th>
								<th style="width: 8%;">Aksi</th>
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
										<a href="javascript:void(0)" class="btn-sm btn-outline-primary px-2 py-1 konfirmasi" invt-id="<?= $value['id'] ?>">Konfirmasi</a>
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
			$("#table-penugasan").DataTable();
			$("#table-penugasan").on("click", ".konfirmasi", function(e) {
				e.preventDefault();
				var id = $(e.currentTarget).attr("invt-id");
				var dataJson = {
					[csrfName]: csrfHash,
					id: id,
				};
				$.ajax({
					type: "POST",
					url: BASEURL + "admin/dashboard/konfirmasi",
					data: dataJson,
					beforeSend: function() {
						swal.fire({
							imageUrl: BASEURL + "assets/logo/rolling.png",
							title: "Konfirmasi Penugasan Undangan",
							text: "Silahkan Tunggu",
							showConfirmButton: false,
							allowOutsideClick: false,
						});
					},
					success: function(data) {
						if (data.success == false) {
							swal.fire({
								icon: "error",
								title: "Konfirmasi Gagal",
								text: data.message,
								showConfirmButton: false,
								timer: 1500,
							});
						} else {
							swal.fire({
								icon: "success",
								title: "Konfirmasi Berhasil",
								text: data.message,
								showConfirmButton: false,
								timer: 1500,
							});
							window.location = BASEURL + "admin/invitation";
						}
					},
					error: function() {
						swal.fire(
							"Konfirmasi Gagal",
							"Anda tidak dapat mengkonfirmasi!!",
							"error"
						);
					},
				});
			});
		});
	</script>
