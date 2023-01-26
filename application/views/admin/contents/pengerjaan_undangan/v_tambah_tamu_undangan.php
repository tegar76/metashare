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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/invitation') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/invitation/settings') ?>">Setting Data Undangan</a></li>
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
		<?= form_open($this->uri->uri_string(), ['class' => 'mt-2']) ?>
		<div class="card shadow-sm px-3 pb-2">
			<div class="form-group mb-3">
				<h6 class="text-dark">Data Ke- 1</h6>
				<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="guest[]" class="form-control <?= (form_error('guest[]')) ? 'is-invalid' : '' ?>" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">
					<div id="guest[]Feedback" class="invalid-feedback">
						<?= form_error('guest[]', '<small class="text-danger>"', '</small>') ?>
					</div>
				</div>
			</div>
			<div id="next-form"></div>
			<input type="hidden" id="jumlah-form" name="jumlah_form" value="1">
		</div>
		<div class="flex mt-3 mb-4">
			<button type="submit" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
			<button type="reset" id="btn-reset-form" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
		</div>
		<?= form_close() ?>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->

	<!-- Floating Button Add -->
	<div class="floating-container">
		<a href="javascript:void(0)">
			<div id="btn-tambah-form" class="floating-button">+</div>
		</a>
	</div>
	<!-- Floating Button Add End -->

	<script>
		$(document).ready(function() {
			$("#btn-tambah-form").click(function() {
				var jumlah = parseInt($("#jumlah-form").val());
				var nextform = jumlah + 1;
				$("#next-form").append(
					'<div class="form-group mb-3">' +
					'<h6 class="text-dark">Data Ke-' + nextform + '</h6>' +
					'<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>' +
					'<div class="input-group">' +
					'<input type="text" name="guest[]" class="form-control <?= (form_error('guest[]')) ? 'is-invalid' : '' ?>" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">' +
					'<div id="guest[]Feedback" class="invalid-feedback">' +
					'<?= form_error('guest[]', '<small class="text-danger>"', '</small>') ?>' +
					'</div>' +
					'</div>' +
					'</div>'
				);
				$('#jumlah-form').val(nextform);
			});
			$("#btn-reset-form").click(function() {
				$("#next-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});
	</script>
