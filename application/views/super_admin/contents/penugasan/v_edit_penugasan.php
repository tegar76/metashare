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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('su-admin/penugasan') ?>" class="text-link">Penugasan</a></li>
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
			<?= form_open_multipart('su-admin/penugasan/update/' . $detail->t_code, ['class' => 'mt-4']) ?>
			<input type="hidden" name="code" value="<?= $detail->t_code ?>">
			<p class="text-primary">Data Kustomer</p>
			<div class="form-group mb-3">
				<label for="namaKustomer">Nama Kustomer</label>
				<div class="input-group">
					<input type="text" class="form-control" value="<?= $detail->cs_name ?>" id="namaKustomer" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="noTelp">No Telepon</label>
				<div class="input-group">
					<input type="text" class="form-control" id="noTelp" value="<?= $detail->cs_phone ?>" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" class="form-control" id="email" value="<?= $detail->cs_email ?>" readonly>
				</div>
			</div>
			<p class="text-primary">Data Transaksi</p>
			<div class="form-group mb-3">
				<label for="kode">Kode</label>
				<div class="input-group">
					<input type="text" class="form-control" id="kode" value="<?= $detail->t_code ?>" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="jenis">Jenis Undangan</label>
				<div class="input-group">
					<input type="text" class="form-control" id="jenis" value="Undangan Pernikahan Digital" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="kategori">Kategori Undangan</label>
				<div class="input-group">
					<input type="text" class="form-control" id="kategori" value="<?= $detail->m_category ?>" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="model">Model Undangan</label>
				<div class="input-group">
					<input type="text" class="form-control" id="model" value="<?= $detail->m_name ?>" readonly>
				</div>
			</div>
			<p class="text-primary">Data Penugasan</p>
			<div class="form-group mb-3">
				<label for="adminYangMenangani">Admin Yang Menangani <span class="text-danger">*</span></label>
				<div class="input-group">
					<select class="form-control" name="admin_update" id="adminYangMenangani">
						<?php foreach ($admin as $adm) : ?>
							<option value="<?= $adm->admin_id ?>" <?= ($adm->admin_id == $detail->adm_id) ? 'selected' : '' ?>><?= $adm->name ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="flex mt-3 mb-4">
				<button type="submit" name="update" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			</form>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
