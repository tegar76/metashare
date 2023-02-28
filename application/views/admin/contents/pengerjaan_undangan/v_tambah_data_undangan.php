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
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $detail->t_code) ?>">Setting Data Undangan</a></li>
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
			<input type="hidden" name="code" value="<?= $detail->t_code ?>">
			<p class="text-success mb-2">Data Kustomer</p>
			<div class="form-group mb-3">
				<label for="namaKonsumen">Nama Konsumen </label>
				<div class="input-group">
					<input type="text" class="form-control" id="namaKonsumen" name="namaKonsumen" value="<?= $detail->cs_name ?>" readonly>
				</div>
			</div>
			<p class="text-success mb-2">Data Transaksi</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="kodeOrder">Kode Order </label>
					<div class="input-group">
						<input type="text" class="form-control" id="kodeOrder" name="kodeOrder" value="<?= $detail->t_code ?>" readonly>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jenisUndangan">Jenis Undangan </label>
					<div class="input-group">
						<input type="text" class="form-control" id="jenisUndangan" name="jenisUndangan" value="Undangan Pernikahan Digital" readonly>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="kategori">Kategori </label>
					<div class="input-group">
						<input type="text" class="form-control" id="kategori" name="kategori" value="<?= $detail->m_category ?>" readonly>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="model">Model </label>
					<div class="input-group">
						<input type="text" class="form-control" id="model" name="model" value="<?= $detail->m_name ?>" readonly>
					</div>
				</div>
			</div>

			<!-- Setting Data Undangan -->
			<p class="text-success mb-2">Setting Data Undangan</p>

			<!-- Upload foto sampul -->
			<?php if ($detail->m_category == 'special') : ?>
				<!-- TRUE -->
				<div class="form-group mb-3">
					<label for="uploadSampul">Upload Sampul <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend h-75">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" name="cover_img_1" class="custom-file-input <?= (form_error('cover_img_1')) ? 'is-invalid' : '' ?>" id="uploadSampul" accept="image/*">
							<label class="custom-file-label" for="uploadSampul">Choose file</label>
							<div class="invalid-feedback"><?= form_error('cover_img_1') ?></div>
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
						<input type="file" name="cover_img_2" class="custom-file-input <?= (form_error('cover_img_2')) ? 'is-invalid' : '' ?>" id="uploadCover" accept="image/*">
						<label class="custom-file-label" for="uploadCover">Choose file</label>cover_img_2
						<div class="invalid-feedback"><?= form_error('cover_img_2') ?></div>
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
						<input type="file" name="music_bg" class="custom-file-input <?= (form_error('music_bg')) ? 'is-invalid' : '' ?>" id="uploadMusikBacksound" accept="audio/*">
						<label class="custom-file-label" for="uploadMusikBacksound">Choose file</label>
						<div class="invalid-feedback"><?= form_error('music_bg') ?></div>
					</div>
				</div>
				<p>Catatan: File max 5mb format (MP3) </p>
			</div>
			<!-- Nama Panggilan Memepelai Pria dan Wanita -->
			<div class="row">
				<div class="col-6 form-group">
					<label for="namaPanggilanMempelaiPria">Nama Panggilan Mempelai Pria <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_nickname" class="form-control <?= (form_error('groom_nickname')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_nickname')) ? set_value('groom_nickname') : '' ?>" id="namaPanggilanMempelaiPria" placeholder="Masukan Nama Panggilan Pria">
						<div id="groom_nicknameFeedback" class="invalid-feedback"><?= form_error('groom_nickname') ?></div>
					</div>
				</div>
				<div class="col-6 form-group">
					<label for="namaPanggilanMempelaiWanita">Nama Panggilan Mempelai Wanita <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_nickname" class="form-control <?= (form_error('bride_nickname')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_nickname')) ? set_value('bride_nickname') : '' ?>" id="namaPanggilanMempelaiWanita" placeholder="Masukan Nama Panggilan Wanita">
						<div id="bride_nicknameFeedback" class="invalid-feedback"><?= form_error('bride_nickname') ?></div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Data Mempelai Pria</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_name" class="form-control <?= (form_error('groom_name')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_name')) ? set_value('groom_name') : '' ?>" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">
						<div id="groom_addressFeedback" class="invalid-feedback"><?= form_error('groom_name') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatPria">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_address" class="form-control <?= (form_error('groom_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_address')) ? set_value('groom_address') : '' ?>" id="alamatSingkatPria" placeholder="Masukan Alamat Singkat">
						<div id="groom_addressFeedback" class="invalid-feedback"><?= form_error('groom_address') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakPria">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_father" class="form-control <?= (form_error('groom_father')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_father')) ? set_value('groom_father') : '' ?>" id="namaBapakPria" placeholder="Masukan Nama Bapak">
						<div id="groom_fatherFeedback" class="invalid-feedback"><?= form_error('groom_father') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="bamaIbuPria">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_mother" class="form-control <?= (form_error('groom_mother')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_mother')) ? set_value('groom_mother') : '' ?>" id="bamaIbuPria" placeholder="Masukan Nama Ibu">
						<div id="groom_motherFeedback" class="invalid-feedback"><?= form_error('groom_mother') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putraKePria">Putra Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_son" class="form-control <?= (form_error('groom_son')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_son')) ? set_value('groom_son') : '' ?>" id="putraKePria" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="groom_sonFeedback" class="invalid-feedback"><?= form_error('groom_son') ?></div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGPria">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_ig" class="form-control <?= (form_error('groom_ig')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_ig')) ? set_value('groom_ig') : '' ?>" id="usernameIGPria" placeholder="Masukan Username Instagram">
						<div id="groom_igFeedback" class="invalid-feedback"><?= form_error('groom_ig') ?></div>
					</div>
				</div>
			</div>

			<!-- upload foto mempelai pria -->
			<?php if ($detail->m_category == 'special') : ?>
				<div class="form-group mb-3">
					<label for="uploadFotoMempelaiPria">Upload Foto Mempelai Pria <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend h-75">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" name="groom_img" class="custom-file-input <?= (form_error('groom_img')) ? 'is-invalid' : '' ?>" id="uploadFotoMempelaiPria" accept="image/*">
							<label class="custom-file-label">Choose file</label>
							<div class="invalid-feedback"><?= form_error('groom_img') ?></div>
						</div>
					</div>
					<p>*File max 2mb dengan format PNG,JPEG,JPG </p>
				</div>
			<?php endif ?>
			<p class="text-primary mb-2">Setting Data Mempelai Wanita</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaLengkapWanita">Nama Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_name" class="form-control <?= (form_error('bride_name')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_name')) ? set_value('bride_name') : '' ?>" id="namaLengkapWanita" placeholder="Masukan Nama Lengkap">
						<div id="bride_nameFeedback" class="invalid-feedback"><?= form_error('bride_name') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatWanita">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_address" class="form-control <?= (form_error('bride_address')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_address')) ? set_value('bride_address') : '' ?>" id="alamatSingkatWanita" placeholder="Masukan Alamat Singkat">
						<div id="bride_addressFeedback" class="invalid-feedback"><?= form_error('bride_address') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakWanita">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_father" class="form-control <?= (form_error('bride_father')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_father')) ? set_value('bride_father') : '' ?>" id="namaBapakWanita" placeholder="Masukan Nama Bapak">
						<div id="bride_fatherFeedback" class="invalid-feedback"><?= form_error('bride_father') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="namaIbuWanita">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_mother" class="form-control <?= (form_error('bride_mother')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_mother')) ? set_value('bride_mother') : '' ?>" id="namaIbuWanita" placeholder="Masukan Nama Ibu">
						<div id="bride_motherFeedback" class="invalid-feedback"><?= form_error('bride_mother') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putriKeWanita">Putri Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_daughter" class="form-control <?= (form_error('bride_daughter')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_daughter')) ? set_value('bride_daughter') : '' ?>" id="putriKeWanita" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="bride_daughterFeedback" class="invalid-feedback"><?= form_error('bride_daughter') ?></div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGWanita">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_ig" class="form-control <?= (form_error('bride_ig')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_ig')) ? set_value('bride_ig') : '' ?>" id="usernameIGWanita" placeholder="Masukan Username Instagram">
						<div id="bride_igFeedback" class="invalid-feedback"><?= form_error('bride_ig') ?></div>
					</div>
				</div>
			</div>

			<?php if ($detail->m_category == 'special') : ?>
				<div class="form-group mb-3">
					<label for="uploadFotoMempelaiWanita">Upload Foto Mempelai Wanita <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend h-75">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input type="file" name="bride_img" class="custom-file-input <?= (form_error('bride_img')) ? 'is-invalid' : '' ?>" id="uploadFotoMempelaiWanita" accept="image/*">
							<label class="custom-file-label">Choose file</label>
							<div class="invalid-feedback"><?= form_error('bride_img') ?></div>
						</div>
					</div>
					<p>*File max 2mb dengan format PNG,JPEG,JPG </p>
				</div>
			<?php endif ?>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Tasyakuran</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalTasyakuran">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcara[tasyakur]" class="form-control <?= (form_error('tanggalAcara[tasyakur]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcara[tasyakur]')) ? set_value('tanggalAcara[tasyakur]') : '' ?>" id="tanggalTasyakuran">
						<div id="tanggalAcara[tasyakur]Feedback" class="invalid-feedback"><?= form_error('tanggalAcara[tasyakur]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamTasyakuran">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcara[tasyakur]" class="form-control <?= (form_error('jamAcara[tasyakur]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcara[tasyakur]')) ? set_value('jamAcara[tasyakur]') : '' ?>" id="jamTasyakuran">
						<div id="jamAcara[tasyakur]Feedback" class="invalid-feedback"><?= form_error('jamAcara[tasyakur]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapTasyakuran">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcara[tasyakur]" class="form-control <?= (form_error('alamatAcara[tasyakur]')) ? 'is-invalid' : '' ?>" id="alamatLengkapTasyakuran" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcara[tasyakur]')) ? set_value('alamatAcara[tasyakur]') : '' ?></textarea>
						<div id="alamatAcara[tasyakur]Feedback" class="invalid-feedback"><?= form_error('alamatAcara[tasyakur]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapTasyakuran">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcara[tasyakur]" class="form-control <?= (form_error('mapsAcara[tasyakur]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapTasyakuran" placeholder="Masukan Link google Map"><?= (set_value('mapsAcara[tasyakur]')) ? set_value('mapsAcara[tasyakur]') : '' ?></textarea>
						<div id="mapsAcara[tasyakur]Feedback" class="invalid-feedback"><?= form_error('mapsAcara[tasyakur]') ?></div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Akad</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalAkad">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcara[akad]" class="form-control <?= (form_error('tanggalAcara[akad]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcara[akad]')) ? set_value('tanggalAcara[akad]') : '' ?>" id="tanggalAkad">
						<div id="tanggalAcara[akad]Feedback" class="invalid-feedback"><?= form_error('tanggalAcara[akad]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamAkad">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcara[akad]" class="form-control <?= (form_error('jamAcara[akad]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcara[akad]')) ? set_value('jamAcara[akad]') : '' ?>" id="jamAkad">
						<div id="jamAcara[akad]Feedback" class="invalid-feedback"><?= form_error('jamAcara[akad]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapAkad">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcara[akad]" class="form-control <?= (form_error('alamatAcara[akad]')) ? 'is-invalid' : '' ?>" id="alamatLengkapAkad" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcara[akad]')) ? set_value('alamatAcara[akad]') : '' ?></textarea>
						<div id="alamatAcara[akad]Feedback" class="invalid-feedback"><?= form_error('alamatAcara[akad]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapAkad">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcara[akad]" class="form-control <?= (form_error('mapsAcara[akad]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapAkad" placeholder="Masukan Link google Map"><?= (set_value('mapsAcara[akad]')) ? set_value('mapsAcara[akad]') : '' ?></textarea>
						<div id="mapsAcara[akad]Feedback" class="invalid-feedback"><?= form_error('mapsAcara[akad]') ?></div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan Resepsi</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalresepsi">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcara[resepsi]" class="form-control <?= (form_error('tanggalAcara[resepsi]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcara[resepsi]')) ? set_value('tanggalAcara[resepsi]') : '' ?>" id="tanggalresepsi">
						<div id="tanggalAcara[resepsi]Feedback" class="invalid-feedback">
							<?= form_error('tanggalAcara[resepsi]') ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamresepsi">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcara[resepsi]" class="form-control <?= (form_error('jamAcara[resepsi]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcara[resepsi]')) ? set_value('jamAcara[resepsi]') : '' ?>" id="jamresepsi">
						<div id="jamAcara[resepsi]Feedback" class="invalid-feedback"><?= form_error('jamAcara[resepsi]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapresepsi">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcara[resepsi]" class="form-control <?= (form_error('alamatAcara[resepsi]')) ? 'is-invalid' : '' ?>" id="alamatLengkapresepsi" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcara[resepsi]')) ? set_value('alamatAcara[resepsi]') : '' ?></textarea>
						<div id="alamatAcara[resepsi]Feedback" class="invalid-feedback"><?= form_error('alamatAcara[resepsi]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapresepsi">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcara[resepsi]" class="form-control <?= (form_error('mapsAcara[resepsi]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapresepsi" placeholder="Masukan Link google Map"><?= (set_value('mapsAcara[resepsi]')) ? set_value('mapsAcara[resepsi]') : '' ?></textarea>
						<div id="mapsAcara[resepsi]Feedback" class="invalid-feedback"><?= form_error('mapsAcara[resepsi]') ?></div>
					</div>
				</div>
			</div>
			<p class="text-success mb-2">Setting Masa Aktif</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalMasaAktif">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="active_date" class="form-control <?= (form_error('active_date')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_date')) ? set_value('active_date') : '' ?>" id="tanggalMasaAktif">
						<div id="active_dateFeedback" class="invalid-feedback"><?= form_error('active_date') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamMasaAktif">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="active_time" class="form-control <?= (form_error('active_time')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_time')) ? set_value('active_time') : '' ?>" id="jamMasaAktif">
						<div id="active_timeFeedback" class="invalid-feedback"><?= form_error('active_time') ?></div>
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
