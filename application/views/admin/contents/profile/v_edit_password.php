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
			<?= form_open('admin/profile/update_password', ['class' => 'mt-4']) ?>
			<input type="hidden" name="id_admin" value="<?= $admin->admin_id ?>">
			<div class="form-group mb-3">
				<label for="username">Username <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control" id="username" value="<?= $admin->code ?>" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="password">Password Lama <span class="text-danger">*</span></label>
				<div class="input-group border-password">
					<input class="form-control border-0 <?= (form_error('old_pass')) ? 'is-invalid' : '' ?>" id="oldPassword" name="old_pass" type="password" placeholder="Masukan Password Lama" autocomplete="current-password" id="oldPassword"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="toggleOldPassword"></i></span>
					<div id="old_passFeedback" class="invalid-feedback">
						<?= form_error('old_pass', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="password">Password Baru <span class="text-danger">*</span></label>
				<div class="input-group border-password">
					<input class="form-control border-0 <?= (form_error('password')) ? 'is-invalid' : '' ?>" id="newPassword" name="password" type="password" placeholder="Masukan Password Baru (Minimal 8 Karakter)" autocomplete="current-password" id="newPassword"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="toggleNewPassword"></i></span>
					<div id="passwordFeedback" class="invalid-feedback">
						<?= form_error('password', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-4">
				<label for="newPasswordConfirm">Konfirmasi Password Baru<span class="text-danger">*</span></label>
				<div class="input-group border-password">
					<input class="form-control border-0 <?= (form_error('password')) ? 'is-invalid' : '' ?>" id="newPasswordConfirm" name="conf_pass" type="password" placeholder="Masukan Konfirmasi Password Baru" autocomplete="current-password"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="toggleNewPasswordConfirm"></i></span>
					<div id="conf_passwordFeedback" class="invalid-feedback">
						<?= form_error('conf_pass', '<small class="text-danger">', '</small>') ?>
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
		// Show Toggle Password Lama
		const toggleOldPassword = document.querySelector('#toggleOldPassword');
		const oldPassword = document.querySelector('#oldPassword');
		toggleOldPassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = oldPassword.getAttribute('type') === 'password' ? 'text' : 'password';
			oldPassword.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye');
		});
		// Show Toggle Password Baru
		const toggleNewPassword = document.querySelector('#toggleNewPassword');
		const newPassword = document.querySelector('#newPassword');
		toggleNewPassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = newPassword.getAttribute('type') === 'password' ? 'text' : 'password';
			newPassword.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye');
		});
		// Show Toggle Confirm Password baru
		const toggleNewPasswordConfirm = document.querySelector('#toggleNewPasswordConfirm');
		const newPasswordConfirm = document.querySelector('#newPasswordConfirm');
		toggleNewPasswordConfirm.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = newPasswordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
			newPasswordConfirm.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye');
		});
	</script>
