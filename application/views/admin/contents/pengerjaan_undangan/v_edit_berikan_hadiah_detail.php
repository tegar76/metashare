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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $code->code) ?>">Setting Data Undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/gifts/detail?code=' . $code->code . '&id=' . $gift->invitation_id) ?>">Edit Berikan Hadiah</a></li>
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
			<?= form_open_multipart($this->uri->uri_string(), ['class' => 'mt-4']) ?>
			<input type="hidden" name="id" value="<?= $gift->git_id ?>">
			<div class="form-group mb-3">
				<h6 class="text-dark">Data Bank <?= $gift->name_bank ?></h6>
				<label for="bankName">Bank <span class="text-danger">*</span></label>
				<div class="input-group">
					<!-- <select name="" id="tahap" class="form-control">
						<option>Pilih Bank</option>
						<option selected value="BCA">BCA</option>
						<option value="">BCA</option>
						<option value="">BCA</option>
					</select> -->
					<input type="text" name="bank" class="form-control" id="bankName" value="<?= $gift->name_bank ?>" readonly placeholder="Masukan No Rekening">
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="noRek">No Rekening <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="number" name="noRek" class="form-control <?= (form_error('noRek')) ? 'is-invalid' : '' ?>" id="noRek" placeholder="Masukan No Rekening" value="<?= (set_value('noRek')) ? set_value('noRek') : $gift->number_account ?>">
					<div class="invalid-feedback"><?= form_error('noRek') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="penerima">Penerima <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="name" class="form-control <?= (form_error('name')) ? 'is-invalid' : '' ?>" id="penerima" placeholder="Masukan Penerima" value="<?= (set_value('name')) ? set_value('name') : $gift->name ?>">
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
						<input type="file" name="qr_code" class="custom-file-input" id="uploadQr Code">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>
			</div>
			<div class="flex mt-4 mb-4">
				<button type="submit" name="update" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			</form>
			<?= form_close() ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
