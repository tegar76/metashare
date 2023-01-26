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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>">Setting Data Undangan</a></li>
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
					<label for="namaLengkapPria">Link Video Prewedding <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" class="form-control" id="namaLengkapPria" placeholder="Masukan Link Video Yang Bersumber Dari Google Drive">
					</div>
				</div>
				<div class="flex mt-4 mb-4">
					<button type="submit" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				</div>
			</form>
			<hr>
			<div class="row ml-0 mt-1 mb-3">
				<!-- Item Model -->
				<div class="card shadow-sm border p-2 mb-3 mr-4">
					<img class="mx-auto" src="<?= base_url('assets/img/foto_1.png') ?>" alt="Foto Galery" style="width: 200px; height:200px;">
					<p class="mt-3 mb-2 text-dark">Foto 1</p>
					<div class="mx-auto">
						<a href="<?= base_url('Admin/PengerjaanUndangan/editFotoDetail') ?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
						<a href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
					</div>
				</div>
				<!-- Item Model End -->
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
