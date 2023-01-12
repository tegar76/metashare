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
		<div class="card shadow pl-5 py-3">

			<div class="form-group col-4 mt-4">
				<div class="input-group mb-2 ml-n3">
					<select class="form-control" id="change-category">
						<option value="">Pilih Kategori</option>
						<option value="basic" <?= (isset($_GET['category']) and $_GET['category'] == 'basic') ? 'selected' : '' ?>>Basic</option>
						<option value="standard" <?= (isset($_GET['category']) and $_GET['category'] == 'standard') ? 'selected' : '' ?>>Standard</option>
						<option value="special" <?= (isset($_GET['category']) and $_GET['category'] == 'special') ? 'selected' : '' ?>>Special</option>
					</select>
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-filter"></i></div>
					</div>
				</div>
			</div>

			<div class="tab-content mb-3">
				<div class="tab-pane show active" id="pernikahanIslami">
					<div class="row ml-0">
						<!-- Item Model -->
						<?php foreach ($model as $row => $value) : ?>
							<div class="card shadow-sm card-sampul-cover p-2 mx-2 mb-3">
								<div id="carousel-sampul-cover" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<img class="img-sampul-cover mx-auto" src="<?= $value['cover_1'] ?>" alt="Cover">
										</div>
										<div class="carousel-item">
											<img class="img-sampul-cover mx-auto" src="<?= $value['cover_2'] ?>" alt="Cover">
										</div>
									</div>
									<ol class="carousel-indicators">
										<li data-target="#carousel-sampul-cover" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-sampul-cover" data-slide-to="1"></li>
									</ol>
								</div>
								<!-- <img class="img-cover mx-auto" src="<?= base_url('storage/cover_model_undangan/cover_a.svg') ?>" alt="Cover"> -->
								<h5 class="text-black mt-4">Model <?= $value['name'] ?></h5>
								<p><?= $value['type'] ?> / <?= $value['category'] ?></p>
								<h4 class="text-danger mt-n2">Rp. <?= $value['price']; ?></h4>
								<div class="mt-2">
									<a target="_blank" href="<?= base_url('demo?model=' . $value['view']) ?>" class="btn btn-sm btn-outline-info text-sm  px-2 mr-3">
										<i class="fas fa-eye mr-1"></i>
										<span class="mb-1">Demo</span>
									</a>
								</div>
								<div class="text-xs mt-3 mb-n2">
									<span>
										<i data-feather="plus" class="feather-icon feather-10"></i>
										<?= $value['create']; ?> WIB
									</span>
									<span>
										<i data-feather="edit" class="feather-icon feather-10 ml-2"></i>
										<?= $value['update']; ?> WIB
									</span>
								</div>
								<hr class="mx-n2">
								<div class="d-flex mx-auto text-sm text-gray-600">
									<p class="mx-2">Total Order : <?= $value['order']; ?></p>
									<span class="border-left mt-n3 mb-n2 mx-2"></span>
									<a href="<?= base_url('su-admin/master/update_model/' . $value['id']) ?>" class="text-success mx-2"><i data-feather="edit" class="feather-20" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
									<span class="border-left mt-n3 mb-n2 mx-2"></span>
									<a href="javascript:void(0)" class="text-danger mx-2 delete-model" model-id="<?= $value['id'] ?>"><i data-feather="trash-2" class="feather-20" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
								</div>
							</div>
							<!-- Item Model End -->
						<?php endforeach ?>
					</div>
				</div>
			</div>

		</div>
		<!-- Floating Button Add -->
		<div class="floating-container">
			<a href="<?= base_url('su-admin/master/tambah_model') ?>">
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
		$("#change-category").change(function() {
			var data = $("#change-category option:selected").val();
			window.location = BASEURL + "su-admin/master/model_undangan?category=" + data;
		});

		$(document).ready(function() {
			$(".delete-model").click(function(e) {
				e.preventDefault();
				var id = $(e.currentTarget).attr("model-id");
				var dataJson = {
					id: id,
				};
				Swal.fire({
					title: "Hapus Data Model Undangan",
					text: "Anda yakin ingin menghapus data model undangan ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "su-admin/master/delete_model",
							data: dataJson,
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Data Model Undangan",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Menghapus Data Model Undangan Gagal",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Menghapus Data Model Undangan Berhasil",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = BASEURL + "su-admin/master/model_undangan";
								}
							},
							error: function() {
								swal.fire(
									"Penghapusan Data  Undangan Gagal Gagal",
									"Anda tidak dapat menghapus data undangan gagal yang masih digunakan!!",
									"error"
								);
							},
						});
					}
				});
			});
		});
	</script>
