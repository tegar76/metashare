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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('su-admin/master/data_admin') ?>" class="text-link">Data Admin</a></li>
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
		<div class="card shadow px-3">
			<?= form_open('su-admin/master/tambah_admin', ['class' => 'mt-2']) ?>
			<div class="form-group mb-3">
				<label for="nama">Nama <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="name" class="form-control <?= (form_error('name')) ? 'is-invalid' : '' ?>" placeholder="Masukan Nama" id="nama" value="<?= set_value('name') ?>">
					<div class="invalid-feedback">
						<?= form_error('name', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="notlp">No Telepon <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="phone" class="form-control <?= (form_error('phone')) ? 'is-invalid' : '' ?>" placeholder="Masukan No Telepon" id="notlp" value="<?= set_value('phone') ?>">
					<div class="invalid-feedback">
						<?= form_error('phone', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="email">Email <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="email" class="form-control <?= (form_error('email')) ? 'is-invalid' : '' ?>" placeholder="Masukan Email" id="email" value="<?= set_value('email') ?>">
					<div class="invalid-feedback">
						<?= form_error('email', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="alamat">Alamat <span class="text-danger">*</span></label>
				<div class="input-group">
					<textarea name="address" class="form-control <?= (form_error('address')) ? 'is-invalid' : '' ?>" id="alamat" placeholder="Masukan Alamat"><?= set_value('address') ?></textarea>
					<div class="invalid-feedback">
						<?= form_error('address', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="flex mt-3 mb-4">
				<button type="submit" class="btn btn-sm btn-warning px-3 py-2 mr-3">Simpan</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
