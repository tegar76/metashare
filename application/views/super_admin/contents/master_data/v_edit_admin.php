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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('su-admin/master-data/data_admin') ?>" class="text-link">Data Admin</a></li>
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
			<?= form_open('su-admin/master-data/update_admin/' . $admin->code) ?>
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
			<div class="form-group mb-3">
				<label for="status_admin">Status <span class="text-danger">*</span></label>
				<div class="input-group">
					<select class="form-control" id="status_admin" name="status">
						<option value="1" <?= ($admin->status == 1) ? 'selected' : '' ?>>Aktif</option>
						<option value="0" <?= ($admin->status == 0) ? 'selected' : '' ?>>Tidak Aktif</option>
					</select>
				</div>
			</div>
			<div class="form-group mb-3">
				<div class="row">
					<div class="col-6 mb-1">
						<div class="form-group">
							<label for="password">Password <span class="text-danger">*</span></label>
							<div class="input-group border-password">
								<input name="password" class="form-control border-0 <?= form_error('password') ? 'is-invalid' : '' ?>" id="password" type="password" placeholder="Masukan Password" autocomplete="current-password" id="password"><span role="button" class="d-flex"><i class="fas fa-eye fa-xs mr-2 my-auto" id="togglePassword"></i></span>
								<div class="invalid-feedback">
									<?= form_error('password', '<div class="text-danger">', '</div>') ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="passwordBaru">Password Baru <span class="text-danger">*</span></label>
							<div class="input-group border-password">
								<input name="conf_pass" class="form-control border-0 <?= form_error('conf_pass') ? 'is-invalid' : '' ?>" id="passwordBaru" type="password" placeholder="Masukan Password Baru" autocomplete="current-password"><span role="button" class="d-flex"><i class="fas fa-eye fa-xs mr-2 my-auto" id="togglePasswordBaru"></i></span>
								<div class="invalid-feedback">
									<?= form_error('conf_pass', '<div class="text-danger">', '</div>') ?>
								</div>
							</div>
						</div>
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
			this.classList.toggle('fa-eye-slash');
		});
		// Show Toggle Password baru
		const togglePasswordBaru = document.querySelector('#togglePasswordBaru');
		const passwordBaru = document.querySelector('#passwordBaru');
		togglePasswordBaru.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = passwordBaru.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordBaru.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
		});
	</script>
