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
			<?= form_open_multipart('su-admin/master/tambah_model', ['class' => 'mt-4']) ?>
			<div class="form-group mb-3">
				<label for="jenisUndangan">Jenis Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" class="form-control" readonly value="Undangan Pernikahan Digital" id="jenisUndangan">
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="kategoriUndangan">Kategori Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<select class="form-control <?= (form_error('category')) ? 'is-invalid' : '' ?>" id="kategoriUndangan" name="category">
						<option value="">Pilih Kategori Undangan</option>
						<option value="special" <?= (set_value('category') == 'special') ? 'selected' : '' ?>>Special</option>
						<option value="standard" <?= (set_value('category') == 'standard') ? 'selected' : '' ?>>Standard</option>
						<option value="basic" <?= (set_value('category') == 'basic') ? 'selected' : '' ?>>Basic</option>
					</select>
					<div class="invalid-feedback">
						<?= form_error('category', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
			</div>
			<!-- Harga Sesuai Kategori Undangan yang dipilih -->
			<div class="form-group mb-3">
				<label for="harga">Harga Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="show_price" id="showPriceModel" class="form-control" placeholder="Harga Undangan" id="harga" value="<?= (set_value('show_price')) ? set_value('show_price') : '-' ?>" readonly>
					<input type="hidden" name="price" id="priceModel" value="<?= (set_value('price')) ? set_value('price') : 0 ?>">
					<input type="hidden" name="code_model" id="codeModel" value="<?= (set_value('code_model')) ? set_value('code_model') : '' ?>">
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="modelUndangan">Model Undangan <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="text" name="model_name" class="form-control <?= (form_error('model_name')) ? 'is-invalid' : '' ?>" placeholder="Masukan Nama Model Undangan" id="modelUndangan" value="<?= set_value('model_name') ?>">
					<div class="invalid-feedback">
						<?= form_error('model_name', '<div class="text-danger">', '</div>') ?>
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
						<input type="file" name="cover01" class="custom-file-input <?= (form_error('cover01')) ? 'is-invalid' : '' ?>" id=" uploadSampul">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
					<div class="invalid-feedback">
						<?= form_error('cover01', '<div class="text-danger">', '</div>') ?>
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
						<input type="file" name="cover02" class="custom-file-input <?= (form_error('cover02')) ? 'is-invalid' : '' ?>" id="uploadCover">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
					<div class="invalid-feedback">
						<?= form_error('cover02', '<div class="text-danger">', '</div>') ?>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
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
	<script>
		$(document).ready(function() {
			$("#kategoriUndangan").change(function() {
				var category = $("#kategoriUndangan option:selected").val();
				if (category == 'special') {
					$("#showPriceModel").val('Rp. 150.000');
					$("#priceModel").val(150000);
					$("#codeModel").val('sp_');
				} else if (category == 'standard') {
					$("#showPriceModel").val('Rp. 130.000');
					$("#priceModel").val(130000);
					$("#codeModel").val('st_');
				} else if (category == 'basic') {
					$("#showPriceModel").val('Rp. 100.000');
					$("#priceModel").val(100000);
					$("#codeModel").val('bs_');
				} else {
					$("#showPriceModel").val('-');
					$("#priceModel").val(0);
					$("#codeModel").val('');
				}
			});
		});
	</script>
