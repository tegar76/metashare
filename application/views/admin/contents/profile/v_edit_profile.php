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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/dashboard') ?>" class="text-link">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/profile') ?>" class="text-link">Profile</a></li>
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
			<?= form_open('admin/profile/update_profile', ['class' => 'mt-4']) ?>
			<input type="hidden" name="id_admin" value="<?= $admin->admin_id ?>">
			<div class="form-group mb-3">
				<label for="nama">Nama <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="name_update" class="form-control <?= (form_error('name_update')) ? 'is-invalid' : '' ?>" placeholder="Masukan Nama" id="nama" value="<?= $admin->name ?>">
					<div class="invalid-feedback">
						<?= form_error('name_update', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="notlp">No Telepon <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="phone_update" class="form-control <?= (form_error('phone_update')) ? 'is-invalid' : '' ?>" placeholder="Masukan No Telepon" id="notlp" value="<?= $admin->phone ?>">
					<div class="invalid-feedback">
						<?= form_error('phone_update', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="email">Email <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="email_update" class="form-control <?= (form_error('email_update')) ? 'is-invalid' : '' ?>" placeholder="Masukan Email" id="email" value="<?= $admin->email ?>">
					<div class="invalid-feedback">
						<?= form_error('email_update', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="alamat">Alamat <span class="text-danger">*</span></label>
				<div class="input-group">
					<textarea name="address_update" class="form-control <?= (form_error('address_update')) ? 'is-invalid' : '' ?>" id="alamat" placeholder="Masukan Alamat"><?= $admin->address ?></textarea>
					<div class="invalid-feedback">
						<?= form_error('address_update', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<div class="flex mb-4">
				<button type="submit" name="update" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->


	<script>
		// Show Toggle Password
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye');
		});
		// Show Toggle Password baru
		const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
		const passwordConfirm = document.querySelector('#passwordConfirm');
		togglePasswordConfirm.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordConfirm.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye');
		});
	</script>
