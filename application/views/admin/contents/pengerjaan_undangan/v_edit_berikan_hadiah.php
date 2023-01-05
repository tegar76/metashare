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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $code) ?>">Setting Data Undangan</a></li>
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
					<table id="gifts-table" class="table table-striped table-bordered" style="width: 100%;">
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
							<?php foreach ($gifts as $item) : ?>
								<tr>
									<td><?= $item['number'] ?></td>
									<td><?= $item['bank'] ?></td>
									<td><?= $item['account_number'] ?></td>
									<td><?= $item['name'] ?></td>
									<td><img src="<?= $item['qr_code'] ?>" alt="IMG Default QR Code" width="100px"></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('admin/undangan/gifts/update/' . $item['id']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
											<a href="#" id="<?= $item['id'] ?>" class="btn btn-sm btn-danger delete-item"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
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
			$("#gifts-table").DataTable();
			$("#gifts-table").on("click", ".delete-item", function(e) {
				e.preventDefault();
				var id = $(e.currentTarget).attr("id");
				var dataJson = {
					[csrfName]: csrfHash,
					id : id,
				};
				Swal.fire({
					title: "Hapus Nomor Rekening",
					text: "Anda yakin ingin menghapus nomor rekening ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "admin/undangan/gifts/delete",
							data: dataJson,
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Nomor Rekening",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Nomor Rekening Gagal Dihapus",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Nomor Rekening Berhasil Dihapus",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = BASEURL + "admin/undangan/gifts/detail?code=<?= $_GET['code'] ?>"  + "&id=<?= $_GET['id'] ?>";
								}
							},
							error: function() {
								swal.fire(
									"Hapus Nomor Rekening Gagal",
									"Ada kesalahan saat menghapus Nomor Rekening",
									"error"
								);
							},
						});
					}
				});
			});
		});
	</script>
