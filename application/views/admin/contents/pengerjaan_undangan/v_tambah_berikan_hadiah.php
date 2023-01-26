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
		<?= form_open_multipart($this->uri->uri_string(), ['class' => "mt-4"]) ?>
		<div class="card shadow-sm px-3 pb-2">
			<div class="form-group mb-3">
				<h6 class="text-dark">Data Ke- 1</h6>
				<label for="tahap">Bank <span class="text-danger">*</span></label>
				<div class="input-group">
					<select name="bank" id="nama_bank" class="form-control <?= (form_error('bank')) ? 'is-invalid' : '' ?>">
						<option value="" selected>Pilih Bank</option>
						<?php foreach ($banks as $bank) : ?>
							<option class="bank" value="<?= $bank->id ?>" <?= (set_value('bank') == $bank->id) ? 'selected' : '' ?>><?= $bank->name ?></option>
						<?php endforeach ?>
						<div class="invalid-feedback"><?= form_error('bank') ?></div>
					</select>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="noRek">No Rekening <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="number" name="rekening" class="form-control <?= (form_error('rekening')) ? 'is-invalid' : '' ?>" id="noRek" placeholder="Masukan No Rekening" value="<?= set_value('rekening') ?>">
					<div class="invalid-feedback"><?= form_error('rekening') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="penerima">Penerima <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control <?= (form_error('name')) ? 'is-invalid' : '' ?>" name="name" id="penerima" placeholder="Masukan Penerima" value="<?= set_value('name') ?>">
					<div class="invalid-feedback"><?= form_error('name') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="uploadQrCode">Upload QR Code</label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="qr_code" class="custom-file-input <?= (form_error('qr_code') ? 'is-invalid' : '') ?>" id="uploadQr Code">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
						<div class="invalid-feedback"><?= form_error('qr_code') ?></div>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>
			</div>
		</div>
		<!-- <div id="next-form"></div> -->
		<!-- <input type="hidden" id="count-form" name="count_form" value="1"> -->
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
	<!-- <div class="floating-container">
		<a href="#">
			<div id="btn-add-form" class="floating-button">+</div>
		</a>
	</div> -->
	<!-- Floating Button Add End -->
	<script>
		$(document).ready(function() {
			$("#btn-add-form").click(function() {
				var jumlah = parseInt($("#count-form").val());
				var bank = $("#nama_bank .bank").length;
				var nextform = jumlah + 1;
				if (nextform <= bank) {
					var newRows =
						'<div class="card shadow-sm px-3 pb-2">' +
						'<div class="form-group mb-3">' +
						'<h6 class="text-dark">Data Ke- ' + nextform + '</h6>' +
						'<label for="tahap">Bank <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<select name="bank[]" id="nama_bank" class="form-control">' +
						'<option selected>Pilih Bank</option>' +
						'<option value="BCA">BCA</option>' +
						'<option value="BRI">BRI</option>' +
						'<option value="BNI">BNI</option>' +
						'</select>' +
						'</div>' +
						'</div>' +
						'<div class="form-group mb-3">' +
						'<label for="noRek">No Rekening <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<input type="number" class="form-control" name="noRek[]" id="noRek" placeholder="Masukan No Rekening">' +
						'</div>' +
						'</div>' +
						'<div class="form-group mb-3">' +
						'<label for="penerima">Penerima <span class="text-danger">*</span></label>' +
						'<div class="input-group">' +
						'<input type="text" class="form-control" name="name[]" id="penerima" placeholder="Masukan Penerima">' +
						'</div>' +
						'</div>' +
						'<div class="form-group mb-3">' +
						'<label for="uploadQrCode">Upload QR Code</label>' +
						'<div class="input-group">' +
						'<div class="input-group-prepend h-75">' +
						'<span class="input-group-text">Upload</span>' +
						'</div>' +
						'<div class="custom-file">' +
						'<input type="file" name="qr_code[]" class="custom-file-input" id="uploadQr Code">' +
						'<label class="custom-file-label" for="uploadCover">Choose file</label>' +
						'</div>' +
						'</div>' +
						'<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>' +
						'</div>' +
						'</div>';
					$("#next-form").append(newRows);
				}
				$('#count-form').val(nextform);
			});

			$("#btn-reset-form").click(function() {
				$("#next-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#count-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});
	</script>
