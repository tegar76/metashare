<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 align-self-center">
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
		<!-- Looping Card -->
		<div class="card shadow-sm px-3">
			<form class="mt-4">
				<div class="form-group mb-3">
					<label for="linkVideoPrewedding">Link Video Prewedding <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" class="form-control" name="link_video" id="linkVideoPrewedding" placeholder="Masukan Link Video Yang Bersumber Dari Google Drive">
					</div>
				</div>
				<div class="flex mt-4 mb-4">
					<button type="submit" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				</div>
			</form>
			<hr>
			<div class="row ml-0 mt-1 mb-3">
				<!-- Item Model -->
				<?php $nomor = 1; ?>
				<?php foreach ($photos as $item) : ?>
					<div class="card shadow-sm border p-2 mb-3 mr-4">
						<img class="mx-auto" src="<?= $item['img'] ?>" alt="Foto Galery" style="width: 200px; height:200px;">
						<p class="mt-3 mb-2 text-dark">Foto <?= $nomor++; ?> </p>
						<div class="mx-auto">
							<a href="<?= base_url('admin/undangan/gallery/update/' . $item['id']) ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
							<a href="#" class="btn btn-sm btn-danger delete-image" id="<?= $item['id']; ?>"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
						</div>
					</div>
				<?php endforeach ?>
				<!-- Item Model End -->
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->

	<script>
		$(document).ready(function() {
			$('.delete-image').click(function(e) {
				e.preventDefault();
				var id = $(e.currentTarget).attr('id');
				if (id == '') return;
				Swal.fire({
					title: "Hapus Foto",
					text: "Anda yakin ingin menghapus foto ini!",
					icon: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Ya, Hapus!",
				}).then((result) => {

					if (result.value) {
						$.ajax({
							type: "POST",
							url: BASEURL + "admin/undangan/gallery/delete",
							data: {
								gallery_id: id
							},
							beforeSend: function() {
								swal.fire({
									imageUrl: BASEURL + "assets/logo/rolling.png",
									title: "Menghapus Foto",
									text: "Silahkan Tunggu",
									showConfirmButton: false,
									allowOutsideClick: false,
								});
							},
							success: function(data) {
								if (data.success == false) {
									swal.fire({
										icon: "error",
										title: "Menghapus Foto",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
								} else {
									swal.fire({
										icon: "success",
										title: "Menghapus Foto Berhasil",
										text: data.message,
										showConfirmButton: false,
										timer: 1500,
									});
									window.location = "<?= base_url('admin/undangan/gallery/detail?code=' . $code . '&id=') ?>" + id;
								}
							},
							error: function() {
								swal.fire(
									"Penghapusan Foto",
									"Anda tidak dapat menghapus foto yang masih bertugas!!",
									"error"
								);
							},
						});
					}
				});
			});
		});
	</script>
