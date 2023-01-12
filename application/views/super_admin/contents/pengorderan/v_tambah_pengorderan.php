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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('su-admin/order') ?>" class="text-link">Pengorderan</a></li>
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
			<?= form_open($this->uri->uri_string(), ['class' => 'mt-4']) ?>
			<p class="text-primary">Data Kustomer</p>
			<div class="form-group mb-3">
				<label for="nama_kustomer">Nama Kustomer <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control <?= (form_error('customer_name')) ? 'is-invalid' : '' ?>" name="customer_name" placeholder="Masukan Nama Kustomer" id="nama_kustomer" value="<?= set_value('customer_name') ?>">
					<div class="invalid-feedback"><?= form_error('customer_name') ?></div>
				</div>
			</div>
			<p class="text-primary">Akun Kustomer</p>
			<div class="form-group mb-3">
				<label for="no_telp">Alamat Email <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="email" name="customer_email" class="form-control <?= (form_error('customer_email')) ? 'is-invalid' : '' ?>" placeholder="Masukan No Telepon Kustomer" id="no_telp" value="<?= set_value('customer_email') ?>">
					<div class="invalid-feedback"><?= form_error('customer_email') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="no_telp">No Telepon <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="number" name="customer_phone" class="form-control <?= (form_error('customer_phone')) ? 'is-invalid' : '' ?>" placeholder="Masukan No Telepon Kustomer" id="no_telp" value="<?= set_value('customer_phone') ?>">
					<div class="invalid-feedback"><?= form_error('customer_phone') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<div class="row">
					<div class="col-6 mb-1">
						<div class="form-group">
							<label for="password">Password <span class="text-danger">*</span></label>
							<div class="input-group border-password">
								<input name="password" class="form-control border-0 <?= (form_error('password')) ? 'is-invalid' : '' ?>" id="password" type="password" placeholder="Masukan Password (Minimal 8 Karakter)" autocomplete="current-password" id="password" value="<?= set_value('password') ?>"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="togglePassword"></i></span>
								<div class="invalid-feedback"><?= form_error('password') ?></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="passwordConfirm">Konfirmasi Password <span class="text-danger">*</span></label>
							<div class="input-group border-password">
								<input name="password_conf" class="form-control border-0 <?= (form_error('password_conf')) ? 'is-invalid' : '' ?>" id="passwordConfirm" type="password" placeholder="Masukan Konfirmasi Password" autocomplete="current-password" value="<?= set_value('password_conf') ?>"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="togglePasswordConfirm"></i></span>
								<div class="invalid-feedback"><?= form_error('password_conf') ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="text-primary">Data Transaksi</p>
			<div class="form-group mb-3">
				<label for="jenis">Jenis Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control" id="jenis" value="Undangan Pernikahan Digital" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="kategori">Kategori Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<select id="select-category" class="form-control <?= (form_error('category_design')) ? 'is-invalid' : '' ?>" name="category_design" id="kategori">
						<option value="" selected>Pilih Kategori Undangan</option>
						<option value="special">Special</option>
						<option value="standard">Standard</option>
						<option value="basic">Basic</option>
					</select>
					<div class="invalid-feedback"><?= form_error('category_design') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="model">Model Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<select name="name_design" id="select-model-invitation" class="form-control <?= (form_error('name_design')) ? 'is-invalid' : '' ?>">
						<option value="" selected>Pilih Model Undangan</option>
					</select>
					<div class="invalid-feedback"><?= form_error('name_design') ?></div>
				</div>
			</div>
			<p class="text-info underline">* Mohon Cek Kembali Model Undangan</p>
			<div class="form-group mb-3">
				<label for="sumber_order">Sumber Order <span class="text-danger">*</span></label>
				<div class="input-group">
					<select name="source_order" class="form-control <?= (form_error('source_order')) ? 'is-invalid' : '' ?>" id="sumber_order">
						<option value="" selected>Pilih Sumber Order</option>
						<option value="Shoope">Shopee</option>
						<option value="Lazada">Lazada</option>
						<option value="Tokopedia">Tokopedia</option>
						<div class="invalid-feedback"><?= form_error('source_order') ?></div>
					</select>
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
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

	<script>
		$(document).ready(function() {
			$('#select-category').change(function() {
				var category = $(this).val();
				$('#select-model-invitation').select2({
					placeholder: 'Pilih Model Undangan',
					ajax: {
						dataType: 'json',
						url: BASEURL + 'su-admin/order/get_model_undangan?category=' + category,
						delay: 800,
						data: function(params) {
							return {
								search: params.term,
							}
						},
						processResults: function(response) {
							return {
								results: response
							};
						},
						cache: true
					},
				});
			});
		})
	</script>
