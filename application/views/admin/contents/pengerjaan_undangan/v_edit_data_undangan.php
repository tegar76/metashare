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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $invt->code) ?>">Setting Data Undangan</a></li>
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
			<form class="mt-4">
				<p class="text-success mb-2">Data Kustomer</p>
				<div class="form-group mb-3">
					<label for="namaKonsumen">Nama Konsumen </label>
					<div class="input-group">
						<input type="text" class="form-control" id="namaKonsumen" value="<?= $detail->cs_name ?>" readonly>
					</div>
				</div>
				<p class="text-success mb-2">Data Transaksi</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="kodeOrder">Kode Order </label>
						<div class="input-group">
							<input type="text" class="form-control" id="kodeOrder" value="<?= $detail->t_code ?>" readonly>
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="jenisUndangan">Jenis Undangan </label>
						<div class="input-group">
							<input type="text" class="form-control" id="jenisUndangan" value="Undangan Pernikahan Digital" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="kategori">Kategori </label>
						<div class="input-group">
							<input type="text" class="form-control" id="kategori" value="<?= $detail->m_category ?>" readonly>
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="model">Model </label>
						<div class="input-group">
							<input type="text" class="form-control" id="model" value="<?= $detail->m_name ?>" readonly>
						</div>
					</div>
				</div>
				<p class="text-success mb-2">Setting Data Undangan</p>
				<?php if ($detail->m_category == 'special') : ?>
					<div class="form-group mb-3">
						<label for="uploadSampul">Upload Sampul <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-prepend h-75">
								<span class="input-group-text">Upload</span>
							</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="uploadSampul">
							<label class="custom-file-label" for="uploadCover">Choose file</label>
						</div>
					</div>
					<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
				</div>
				<?php endif ?>
				<div class="form-group mb-3">
					<label for="uploadCover">Upload Cover <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend h-75">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="uploadCover">
							<label class="custom-file-label" for="uploadCover">Choose file</label>
						</div>
					</div>
					<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
				</div>
				<div class="form-group mb-3">
					<label for="uploadCover">Upload Musik Backsound <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend h-75">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="uploadMusikBacksound">
							<label class="custom-file-label" for="uploadMusikBacksound">Choose file</label>
						</div>
					</div>
					<p>Catatan: File max 5mb format (MP3) </p>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="namaPanggilanMempelaiPria">Nama Panggilan Mempelai Pria <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaPanggilanMempelaiPria" value="<?= $invt->groom_nickname ?>" placeholder="Masukan Nama Panggilan Pria">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="namaPanggilanMempelaiWanita">Nama Panggilan Mempelai Wanita <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaPanggilanMempelaiWanita" value="<?= $invt->bride_nickname ?>" placeholder="Masukan Nama Panggilan Wanita">
						</div>
					</div>
				</div>
				<p class="text-primary mb-2">Setting Data Mempelai Pria</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaLengkapPria" value="<?= $invt->groom_name ?>" placeholder="Masukan Nama Lengkap">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="alamatSingkatPria">Alamat Singkat <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="alamatSingkatPria" value="<?= $invt->groom_address ?>" placeholder="Masukan Alamat Singkat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="namaBapakPria">Nama Bapak <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaBapakPria" value="<?= $invt->groom_father ?>" placeholder="Masukan Nama Bapak">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="bamaIbuPria">Nama Ibu <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="bamaIbuPria" value="<?= $invt->groom_mother ?>" placeholder="Masukan Nama Ibu">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="putraKePria">Putra Ke- <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="putraKePria" value="<?= $invt->groom_son ?>" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						</div>
						<p class="mb-0">Contoh Penulisan: Kesatu</p>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="usernameIGPria">Username Instagram <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="usernameIGPria" value="<?= $invt->groom_ig ?>" placeholder="Masukan Username Instagram">
						</div>
					</div>
				</div>
				<p class="text-primary mb-2">Setting Data Mempelai Wanita</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="namaLengkapWanita">Nama Lengkap <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaLengkapWanita" value="<?= $invt->bride_name ?>" placeholder="Masukan Nama Lengkap">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="alamatSingkatWanita">Alamat Singkat <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="alamatSingkatWanita" <?= $invt->bride_address ?> placeholder="Masukan Alamat Singkat">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="namaBapakWanita">Nama Bapak <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaBapakWanita" value="<?= $invt->bride_father ?>" placeholder="Masukan Nama Bapak">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="namaIbuWanita">Nama Ibu <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="namaIbuWanita" value="<?= $invt->bride_mother ?>" placeholder="Masukan Nama Ibu">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="putraKeWanita">Putra Ke- <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="putraKeWanita" value="<?= $invt->bride_daughter ?>" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						</div>
						<p class="mb-0">Contoh Penulisan: Kesatu</p>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="usernameIGWanita">Username Instagram <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="text" class="form-control" id="usernameIGWanita" <?= $invt->bride_ig ?> placeholder="Masukan Username Instagram">
						</div>
					</div>
				</div>
				<p class="text-primary mb-2">Setting Waktu Pelaksanaan Akad</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="tanggalAkad">Tanggal <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="date" class="form-control" id="tanggalAkad">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="jamAkad">Jam <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="time" class="form-control" id="jamAkad">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="alamatLengkapAkad">Alamat Lengkap <span class="text-danger">*</span></label>
						<div class="input-group">
							<textarea class="form-control" id="alamatLengkapAkad" placeholder="Masukan Alamat Lengkap"></textarea>
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="linkGoogleMapAkad">Link google Map <span class="text-danger">*</span></label>
						<div class="input-group">
							<textarea class="form-control" id="linkGoogleMapAkad" placeholder="Masukan Link google Map"></textarea>
						</div>
					</div>
				</div>
				<p class="text-primary mb-2">Setting Waktu Pelaksanaan Resepsi</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="tanggalResepsi">Tanggal <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="date" class="form-control" id="tanggalResepsi">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="jamResepsi">Jam <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="time" class="form-control" id="jamResepsi">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="alamatLengkapResepsi">Alamat Lengkap <span class="text-danger">*</span></label>
						<div class="input-group">
							<textarea class="form-control" id="alamatLengkapResepsi" placeholder="Masukan Alamat Lengkap"></textarea>
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="linkGoogleMapResepsi">Link google Map <span class="text-danger">*</span></label>
						<div class="input-group">
							<textarea class="form-control" id="linkGoogleMapResepsi" placeholder="Masukan Link google Map"></textarea>
						</div>
					</div>
				</div>
				<p class="text-success mb-2">Setting Masa Aktif</p>
				<div class="row">
					<div class="col-6 form-group mb-3">
						<label for="tanggalMasaAktif">Tanggal <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="date" class="form-control" id="tanggalMasaAktif">
						</div>
					</div>
					<div class="col-6 form-group mb-3">
						<label for="jamMasaAktif">Jam <span class="text-danger">*</span></label>
						<div class="input-group">
							<input type="time" class="form-control" id="jamMasaAktif">
						</div>
					</div>
				</div>
				<div class="flex mt-3 mb-4">
					<button type="submit" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
					<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
				</div>
			</form>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
