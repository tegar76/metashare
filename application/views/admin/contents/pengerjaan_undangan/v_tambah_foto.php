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
			<?= form_open_multipart($this->uri->uri_string(), ['class' => 'mt-2']) ?>
			<input type="hidden" name="invtId" value="<?= $invt->invitation_id ?>">
			<div class="form-group mb-3">
				<label for="namaLengkapPria">Link Video Prewedding<span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="link_video" class="form-control <?= (form_error('link_video')) ? 'is-invalid' : '' ?>" id="namaLengkapPria" placeholder="Masukan Link Video Yang Bersumber Dari Google Drive" value="<?= set_value('link_video') ?>">
					<div id="link_videoFeedback" class="invalid-feedback">
						<?= form_error('link_video', '<small class="text-danger">', '</small>') ?>
					</div>
				</div>
			</div>
			<a href="#" id="btn-tambah-foto" class="btn btn-sm btn-outline-info px-3 py-1 mb-2 mt-3"><i class="fa fa-add mr-1"></i>Foto</a>
			<a href="#" id="btn-reset-form" class=" btn btn-sm btn-outline-warning px-3 py-1 mb-2 mt-3">Reset</a>
			<!-- Loop Form -->
			<div class="form-group mb-3">
				<label for="uploadCover">Foto Ke- 1</label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="photo[]" class="custom-file-input <?= (form_error('photo[]')) ? 'is-invalid' : '' ?>" id="uploadCover">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
						<div id="photo[]Feedback" class="invalid-feedback"><?= form_error('photo[]') ?></div>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>
			</div>
			<div id="next-form"></div>
			<input type="hidden" id="jumlah-form" name="jumlah_form" value="1">
			<input type="hidden" id="category" name="category" value="<?= $category ?>">
			<div class="flex mt-4 mb-4">
				<button type="submit" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
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
		$(document).ready(function() {
			$("#btn-tambah-foto").click(function() {
				var jumlah = parseInt($("#jumlah-form").val());
				var category = $("#category").val();
				var nextform = jumlah + 1;

				if (category == 'special') {
					var jumlahFoto = 8;
				} else if (category == 'standard') {
					var jumlahFoto = 6;
				} else {
					var jumlahFoto = 0;
				}

				if (nextform <= jumlahFoto) {
					$("#next-form").append(
						'<div class="form-group mb-3">' +
						'<label for="uploadCover">Foto Ke-' + nextform + '</label>' +
						'<div class="input-group">' +
						'<div class="input-group-prepend h-75">' +
						'<span class="input-group-text">Upload</span>' +
						'</div>' +
						'<div class="custom-file">' +
						'<input type="file" name="photo[]" class="custom-file-input <?= (form_error('photo[]')) ? 'is-invalid' : '' ?>" id="uploadCover">' +
						'<label class="custom-file-label" for="uploadCover">Choose file</label>' +
						'<div id="photo[]Feedback" class="invalid-feedback"><?= form_error('photo[]') ?></div>' +
						'</div>' +
						'</div>' +
						'<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>' +
						'</div>'
					);
				}
				$('#jumlah-form').val(nextform);
			});
			$("#btn-reset-form").click(function() {
				$("#next-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});
	</script>
