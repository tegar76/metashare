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
							<li class="breadcrumb-item disabled" aria-current="page">Master Data</li>
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
		<!-- <div class="form-group col-4 pb-2">
			<div class="input-group mb-2 ml-n3">
				<input class="form-control" type="text" onfocus="(this.type='month')" placeholder="Pilih Bulan">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="fas fa-filter"></i></div>
				</div>
			</div>
		</div> -->
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h6 class="font-weight-medium">Data Kustomer</h6>
					<hr class="mx-n4">
				</div>
				<div class="table-responsive">
					<table id="data-customer" class="table table-striped table-bordered" style="width: 100%;">
						<thead>
							<tr>
								<th style="width: 3%;">No</th>
								<th style="width: 8%;">Nama</th>
								<th style="width: 7%;">No Telepon</th>
								<th style="width: 7%;">Email</th>
								<th style="width: 6%;">Total Order</th>
								<th style="width: 6%;">Foto Profile</th>
								<th style="width: 7%;">Dibuat</th>
								<th style="width: 7%;">Diedit</th>
								<th style="width: 4%;">Aksi</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($customer as $row) : ?>
								<tr>
									<td><?= $row['nomor']; ?></td>
									<td><?= $row['name']; ?></td>
									<td><?= $row['phone']; ?></td>
									<td><?= $row['email']; ?></td>
									<td><?= $row['order']; ?></td>
									<td><img src="<?= $row['img'] ?>" alt="Foto Kustomer" width="42" height="42"></td>
									<td><?= $row['create']; ?></td>
									<td><?= $row['update']; ?></td>
									<td>
										<div class="flex">
											<a href="<?= base_url('su-admin/master/update_customer/' . $row['id']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
											<a href="javascript:void(0)" class="btn btn-sm btn-danger delete-customer" customer-id="<?= $row['id'] ?>"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
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
			$("#data-customer").DataTable();
			$("#data-customer").on("click", ".delete-customer", function(e) {
				e.preventDefault();
				var cus_id = $(e.currentTarget).attr("customer-id");
				var dataJson = {
					[csrfName]: csrfHash,
					cus_id: cus_id,
				};
				Swal.fire({
					title: "Hapus Data Customer",
					text: "Anda yakin ingin menghapus data customer ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "su-admin/master/delete_customer",
							data: dataJson,
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Data Customer",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Menghapus Data Customer Gagal",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Menghapus Data Customer Berhasil",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = BASEURL + "su-admin/master/customer";
								}
							},
							error: function() {
								swal.fire(
									"Penghapusan Data Customer Gagal",
									"Anda tidak dapat menghapus data customer yang masih bertugas!!",
									"error"
								);
							},
						});
					}
				});
			});
		});
	</script>
