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
		<div class="card shadow px-3">
			<?= form_open('admin/invitation/tambahDataUndangan', ['class' => 'mt-4']) ?>
			<p class="text-success mb-2">Data Kustomer</p>
			<div class="form-group mb-3">
				<label for="namaKonsumen">Nama Konsumen </label>
				<div class="input-group">
					<input type="text" class="form-control" id="namaKonsumen" value="Heru" readonly>
				</div>
			</div>
			<p class="text-success mb-2">Data Transaksi</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="kodeOrder">Kode Order </label>
					<div class="input-group">
						<input type="text" class="form-control" id="kodeOrder" value="00001" readonly>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jenisUndangan">Jenis Undangan </label>
					<div class="input-group">
						<input type="text" class="form-control" id="jenisUndangan" value="Undangan Pernikahan Islami" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="kategori">Kategori </label>
					<div class="input-group">
						<input type="text" class="form-control" id="kategori" value="Special" readonly>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="model">Model </label>
					<div class="input-group">
						<input type="text" class="form-control" id="model" value="Model A" readonly>
					</div>
				</div>
			</div>
			<!-- Setting Data Undangan -->
			<p class="text-success mb-2">Setting Data Undangan</p>
			<div class="form-group mb-3">
				<label for="uploadSampul">Upload Sampul <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="sampul_img" class="custom-file-input <?= (form_error('sampul_img')) ? 'is-invalid' : '' ?>" value="<?= (set_value('sampul_img')) ? set_value('sampul_img') : '' ?>" id="uploadSampul">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
					<div id="sampul_imgFeedback" class="invalid-feedback">
						<?= (form_error('sampul_img', '<small class="text-danger>"', '</small>')) ?>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
			</div>
			<div class="form-group mb-3">
				<label for="uploadCover">Upload Cover <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="cover_img" class="custom-file-input <?= (form_error('cover_img')) ? 'is-invalid' : '' ?>" value="<?= (set_value('cover_img')) ? set_value('cover_img') : '' ?>" id="uploadCover">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
					</div>
					<div id="cover_imgFeedback" class="invalid-feedback">
						<?= (form_error('cover_img', '<small class="text-danger>"', '</small>')) ?>
					</div>
				</div>
				<p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
			</div>
			<div class="form-group mb-3">
				<label for="uploadMusikBacksound">Upload Musik Backsound <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" name="song_bg" class="custom-file-input <?= (form_error('song_bg')) ? 'is-invalid' : '' ?>" value="<?= (set_value('song_bg')) ? set_value('song_bg') : '' ?>" id="uploadMusikBacksound">
						<label class="custom-file-label" for="uploadMusikBacksound">Choose file</label>
					</div>
					<div id="song_bgFeedback" class="invalid-feedback">
						<?= (form_error('song_bg', '<small class="text-danger>"', '</small>')) ?>
					</div>
				</div>
				<p>Catatan: File max 5mb format (MP3) </p>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaPanggilanMempelaiPria">Nama Panggilan Mempelai Pria <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_nickname" class="form-control <?= (form_error('groom_nickname')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_nickname')) ? set_value('groom_nickname') : '' ?>" id="namaPanggilanMempelaiPria" placeholder="Masukan Nama Panggilan Pria">
						<div id="groom_nicknameFeedback" class="invalid-feedback">
							<?= (form_error('groom_nickname', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="namaPanggilanMempelaiWanita">Nama Panggilan Mempelai Wanita <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_nickname" class="form-control <?= (form_error('bride_nickname')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_nickname')) ? set_value('bride_nickname') : '' ?>" id="namaPanggilanMempelaiWanita" placeholder="Masukan Nama Panggilan Wanita">
						<div id="bride_nicknameFeedback" class="invalid-feedback">
							<?= (form_error('bride_nickname', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Data Mempelai Pria</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_name" class="form-control <?= (form_error('groom_name')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_name')) ? set_value('groom_name') : '' ?>" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatPria">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_address" class="form-control <?= (form_error('groom_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_address')) ? set_value('groom_address') : '' ?>" id="alamatSingkatPria" placeholder="Masukan Alamat Singkat">
						<div id="groom_addressFeedback" class="invalid-feedback">
							<?= (form_error('groom_address', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakPria">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_father" class="form-control <?= (form_error('groom_father')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_father')) ? set_value('groom_father') : '' ?>" id="namaBapakPria" placeholder="Masukan Nama Bapak">
						<div id="groom_fatherFeedback" class="invalid-feedback">
							<?= (form_error('groom_father', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="bamaIbuPria">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_mother" class="form-control <?= (form_error('groom_mother')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_mother')) ? set_value('groom_mother') : '' ?>" id="bamaIbuPria" placeholder="Masukan Nama Ibu">
						<div id="groom_motherFeedback" class="invalid-feedback">
							<?= (form_error('groom_mother', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putraKePria">Putra Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="" class="form-control <?= (form_error('groom_son')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_son')) ? set_value('groom_son') : '' ?>" id="putraKePria" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="groom_sonFeedback" class="invalid-feedback">
							<?= (form_error('groom_son', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGPria">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_ig" class="form-control <?= (form_error('groom_ig')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_ig')) ? set_value('groom_ig') : '' ?>" id="usernameIGPria" placeholder="Masukan Username Instagram">
						<div id="groom_igFeedback" class="invalid-feedback">
							<?= (form_error('groom_ig', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="uploadFotoMempelaiPria">Upload Foto Mempelai Pria <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="uploadFotoMempelaiPria">
						<label class="custom-file-label">Choose file</label>
					</div>
				</div>
				<p>*File max 2mb dengan format PNG,JPEG,JPG </p>
			</div>
			<p class="text-primary mb-2">Setting Data Mempelai Wanita</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaLengkapWanita">Nama Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_name" class="form-control <?= (form_error('bride_name')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_name')) ? set_value('bride_name') : '' ?>" id="namaLengkapWanita" placeholder="Masukan Nama Lengkap">
						<div id="bride_nameFeedback" class="invalid-feedback">
							<?= (form_error('bride_name', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatWanita">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_address" class="form-control <?= (form_error('bride_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_address')) ? set_value('bride_address') : '' ?>" id="alamatSingkatWanita" placeholder="Masukan Alamat Singkat">
						<div id="bride_addressFeedback" class="invalid-feedback">
							<?= (form_error('bride_address', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakWanita">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_father" class="form-control <?= (form_error('bride_father')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_father')) ? set_value('bride_father') : '' ?>" id="namaBapakWanita" placeholder="Masukan Nama Bapak">
						<div id="bride_fatherFeedback" class="invalid-feedback">
							<?= (form_error('bride_father', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="namaIbuWanita">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_mother" class="form-control <?= (form_error('bride_mother')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_mother')) ? set_value('bride_mother') : '' ?>" id="namaIbuWanita" placeholder="Masukan Nama Ibu">
						<div id="bride_motherFeedback" class="invalid-feedback">
							<?= (form_error('bride_mother', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putraKeWanita">Putra Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_daughter" class="form-control <?= (form_error('bride_daughter')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_daughter')) ? set_value('bride_daughter') : '' ?>" id="putraKeWanita" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="bride_daughterFeedback" class="invalid-feedback">
							<?= (form_error('bride_daughter', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGWanita">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_ig" class="form-control <?= (form_error('bride_ig')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_ig')) ? set_value('bride_ig') : '' ?>" id="usernameIGWanita" placeholder="Masukan Username Instagram">
						<div id="bride_igFeedback" class="invalid-feedback">
							<?= (form_error('bride_ig', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="uploadFotoMempelaiWanita">Upload Foto Mempelai Wanita <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-prepend h-75">
						<span class="input-group-text">Upload</span>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="uploadFotoMempelaiWanita">
						<label class="custom-file-label">Choose file</label>
					</div>
				</div>
				<p>*File max 2mb dengan format PNG,JPEG,JPG </p>
			</div>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Tasyakuran</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalTasyakuran">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tasyakur_date" class="form-control <?= (form_error('tasyakur_date')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tasyakur_date')) ? set_value('tasyakur_date') : '' ?>" id="tanggalTasyakuran">
						<div id="tasyakur_dateFeedback" class="invalid-feedback">
							<?= (form_error('tasyakur_date', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamTasyakuran">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="tasyakur_time" class="form-control <?= (form_error('tasyakur_time')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tasyakur_time')) ? set_value('tasyakur_time') : '' ?>" id="jamTasyakuran">
						<div id="tasyakur_timeFeedback" class="invalid-feedback">
							<?= (form_error('tasyakur_time', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapTasyakuran">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="tasyakur_address" class="form-control <?= (form_error('tasyakur_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tasyakur_address')) ? set_value('tasyakur_address') : '' ?>" id="alamatLengkapTasyakuran" placeholder="Masukan Alamat Lengkap"></textarea>
						<div id="tasyakur_addressFeedback" class="invalid-feedback">
							<?= (form_error('tasyakur_address', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapTasyakuran">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="tasyakur_maps" class="form-control <?= (form_error('tasyakur_maps')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tasyakur_maps')) ? set_value('tasyakur_maps') : '' ?>" id="linkGoogleMapTasyakuran" placeholder="Masukan Link google Map"></textarea>
						<div id="tasyakur_mapsFeedback" class="invalid-feedback">
							<?= (form_error('tasyakur_maps', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Akad</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalAkad">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="akad_date" class="form-control <?= (form_error('akad_date')) ? 'is-invalid' : '' ?>" value="<?= (set_value('akad_date')) ? set_value('akad_date') : '' ?>" id="tanggalAkad">
						<div id="akad_dateFeedback" class="invalid-feedback">
							<?= (form_error('akad_date', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamAkad">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="akad_time" class="form-control <?= (form_error('akad_time')) ? 'is-invalid' : '' ?>" value="<?= (set_value('akad_time')) ? set_value('akad_time') : '' ?>" id="jamAkad">
						<div id="akad_timeFeedback" class="invalid-feedback">
							<?= (form_error('akad_time', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapAkad">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="akad_address" class="form-control <?= (form_error('akad_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('akad_address')) ? set_value('akad_address') : '' ?>" id="alamatLengkapAkad" placeholder="Masukan Alamat Lengkap"></textarea>
						<div id="akad_addressFeedback" class="invalid-feedback">
							<?= (form_error('akad_address', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapAkad">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="akad_maps" class="form-control <?= (form_error('akad_maps')) ? 'is-invalid' : '' ?>" value="<?= (set_value('akad_maps')) ? set_value('akad_maps') : '' ?>" id="linkGoogleMapAkad" placeholder="Masukan Link google Map"></textarea>
						<div id="akad_mapsFeedback" class="invalid-feedback">
							<?= (form_error('akad_maps', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Resepsi</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalresepsi">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="resepsi_date" class="form-control <?= (form_error('resepsi_date')) ? 'is-invalid' : '' ?>" value="<?= (set_value('resepsi_date')) ? set_value('resepsi_date') : '' ?>" id="tanggalresepsi">
						<div id="resepsi_dateFeedback" class="invalid-feedback">
							<?= (form_error('resepsi_date', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamresepsi">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="resepsi_time" class="form-control <?= (form_error('resepsi_time')) ? 'is-invalid' : '' ?>" value="<?= (set_value('resepsi_time')) ? set_value('resepsi_time') : '' ?>" id="jamresepsi">
						<div id="resepsi_timeFeedback" class="invalid-feedback">
							<?= (form_error('resepsi_time', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapresepsi">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="resepsi_address" class="form-control <?= (form_error('resepsi_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('resepsi_address')) ? set_value('resepsi_address') : '' ?>" id="alamatLengkapresepsi" placeholder="Masukan Alamat Lengkap"></textarea>
						<div id="resepsi_addressFeedback" class="invalid-feedback">
							<?= (form_error('resepsi_address', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapresepsi">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="resepsi_maps" class="form-control <?= (form_error('resepsi_maps')) ? 'is-invalid' : '' ?>" value="<?= (set_value('resepsi_maps')) ? set_value('resepsi_maps') : '' ?>" id="linkGoogleMapresepsi" placeholder="Masukan Link google Map"></textarea>
						<div id="resepsi_mapsFeedback" class="invalid-feedback">
							<?= (form_error('resepsi_maps', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<p class="text-success mb-2">Setting Masa Aktif</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalMasaAktif">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="active_date" class="form-control <?= (form_error('active_date')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_date')) ? set_value('active_date') : '' ?>" id="tanggalMasaAktif">
						<div id="active_dateFeedback" class="invalid-feedback">
							<?= (form_error('active_date', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamMasaAktif">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="active_time" class="form-control <?= (form_error('active_time')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_time')) ? set_value('active_time') : '' ?>" id="jamMasaAktif">
						<div id="active_timeFeedback" class="invalid-feedback">
							<?= (form_error('active_time', '<small class="text-danger>"', '</small>')) ?>
						</div>
					</div>
				</div>
			</div>
			<div class="flex mt-3 mb-4">
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
