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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('su-admin/master/model_undangan') ?>" class="text-link">Data Model Undangan</a></li>
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
			<?= form_open_multipart($this->uri->uri_string(), ['class' => 'mt-4']) ?>
			<input type="hidden" name="id" value="<?= $model->model_id ?>">
			<div class="form-group mb-3">
				<label for="jenisUndangan">Jenis Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control" readonly value="Undangan Pernikahan Digital" id="jenisUndangan">
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="kategoriUndangan">Kategori Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<select class="form-control <?= (form_error('category_update')) ? 'is-invalid' : '' ?>" id="kategoriUndangan" name="category_update">
						<option value="">Pilih Kategori Undangan</option>
						<option value="special" <?= ($model->category == 'special') ? 'selected' : '' ?>>Special</option>
						<option value="standard" <?= ($model->category == 'standard') ? 'selected' : '' ?>>Standard</option>
						<option value="basic" <?= ($model->category == 'basic') ? 'selected' : '' ?>>Basic</option>
					</select>
					<div class="invalid-feedback">
						<?= form_error('category_update', '<p class="text-danger">', '</p>') ?>
					</div>
				</div>
			</div>
			<!-- Harga Sesuai Kategori Undangan yang dipilih -->
			<div class="form-group mb-3">
				<label for="harga">Harga Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="show_price" id="showPriceModel" class="form-control" placeholder="Harga Undangan" id="harga" value="<?= 'Rp. ' . $model->price ?>" readonly>
					<input type="hidden" name="price" id="priceModel" value="<?= $model->price ?>">
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="modelUndangan">Model Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="model_name_update" class="form-control <?= (form_error('model_name_update')) ? 'is-invalid' : '' ?>" placeholder="Masukan Nama Model Undangan" id="modelUndangan" value="<?= $model->name ?>">
					<div class="invalid-feedback">
						<?= form_error('model_name_update', '<p class="text-danger">', '</p>') ?>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="uploadSampul">Upload Sampul Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="cover01_update" class="custom-file-input <?= (form_error('cover01_update')) ? 'is-invalid' : '' ?>" id=" uploadSampul">
						<div class="invalid-feedback">
							<?= form_error('cover01_update', '<p class="text-danger">', '</p>') ?>
						</div>
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
			</div>
			<div class="form-group mb-3">
				<label for="uploadCover">Upload Cover Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="cover02_update" class="custom-file-input <?= (form_error('cover02_update')) ? 'is-invalid' : '' ?>" id="uploadCover">
						<div class="invalid-feedback">
							<?= form_error('cover02_update', '<p class="text-danger">', '</p>') ?>
						</div>
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
			</div>
			<div class="flex mt-3 mb-4">
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
		$("#kategoriUndangan").change(function() {
			var category = $("#kategoriUndangan option:selected").val();
			if (category == 'special') {
				$("#showPriceModel").val('Rp. 150.000');
				$("#priceModel").val(150000);
			} else if (category == 'standard') {
				$("#showPriceModel").val('Rp. 130.000');
				$("#priceModel").val(130000);
			} else if (category == 'basic') {
				$("#showPriceModel").val('Rp. 100.000');
				$("#priceModel").val(100000);
			} else {
				$("#showPriceModel").val('-');
				$("#priceModel").val(0);
			}
		});
	</script>
