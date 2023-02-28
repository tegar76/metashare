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
			<input type="hidden" name="invitationId" value="<?= $invt->invitation_id ?>">
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
							<input type="file" name="cover_img_update_1" class="custom-file-input <?= (form_error('cover_img_update_1')) ? 'is-invalid' : '' ?>" id="uploadSampul" accept="image/*">
							<label class="custom-file-label" for="uploadSampul">Choose file</label>
							<div class="invalid-feedback"><?= form_error('cover_img_update_1') ?></div>
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
						<input type="file" name="cover_img_update_2" class="custom-file-input <?= (form_error('cover_img_update_2')) ? 'is-invalid' : '' ?>" id="uploadCover" accept="image/*">
						<label class="custom-file-label" for="uploadCover">Choose file</label>
						<div class="invalid-feedback"><?= form_error('cover_img_update_2') ?></div>
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
						<input type="file" name="music_bg_update" class="custom-file-input <?= (form_error('music_bg_update')) ? 'is-invalid' : '' ?>" id="uploadMusikBacksound" accept="audio/*">
						<label class="custom-file-label" for="uploadMusikBacksound">Choose file</label>
						<div class="invalid-feedback"><?= form_error('music_bg_update') ?></div>
					</div>
				</div>
				<p>Catatan: File max 5mb format (MP3) </p>
			</div>
			<!-- Nama Panggilan Memepelai Pria dan Wanita -->
			<div class="row">
				<div class="col-6 form-group">
					<label for="namaPanggilanMempelaiPria">Nama Panggilan Mempelai Pria <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_nickname_update" class="form-control <?= (form_error('groom_nickname_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_nickname_update')) ? set_value('groom_nickname_update') : $invt->groom_nickname ?>" id="namaPanggilanMempelaiPria" placeholder="Masukan Nama Panggilan Pria">
						<div id="groom_nickname_updateFeedback" class="invalid-feedback"><?= form_error('groom_nickname_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group">
					<label for="namaPanggilanMempelaiWanita">Nama Panggilan Mempelai Wanita <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_nickname_update" class="form-control <?= (form_error('bride_nickname_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_nickname_update')) ? set_value('bride_nickname_update') : $invt->bride_nickname; ?>" id="namaPanggilanMempelaiWanita" placeholder="Masukan Nama Panggilan Wanita">
						<div id="bride_nickname_updateFeedback" class="invalid-feedback"><?= form_error('bride_nickname_update') ?></div>
					</div>
				</div>
			</div>
			<p class="text-primary mb-2">Setting Data Mempelai Pria</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_name_update" class="form-control <?= (form_error('groom_name_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_name_update')) ? set_value('groom_name_update') : $invt->groom_name ?>" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">
						<div id="groom_name_updateFeedback" class="invalid-feedback"><?= form_error('groom_name_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatPria">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_address_update" class="form-control <?= (form_error('groom_address_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_address_update')) ? set_value('groom_address_update') : $invt->groom_address ?>" id="alamatSingkatPria" placeholder="Masukan Alamat Singkat">
						<div id="groom_address_updateFeedback" class="invalid-feedback"><?= form_error('groom_address_update') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakPria">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_father_update" class="form-control <?= (form_error('groom_father_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_father_update')) ? set_value('groom_father_update') : $invt->groom_father ?>" id="namaBapakPria" placeholder="Masukan Nama Bapak">
						<div id="groom_father_updateFeedback" class="invalid-feedback"><?= form_error('groom_father_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="bamaIbuPria">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_mother_update" class="form-control <?= (form_error('groom_mother_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_mother_update')) ? set_value('groom_mother_update') : $invt->groom_mother ?>" id="bamaIbuPria" placeholder="Masukan Nama Ibu">
						<div id="groom_mother_updateFeedback" class="invalid-feedback"><?= form_error('groom_mother_update') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putraKePria">Putra Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_son_update" class="form-control <?= (form_error('groom_son_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_son_update')) ? set_value('groom_son_update') : $invt->groom_son ?>" id="putraKePria" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="groom_son_updateFeedback" class="invalid-feedback"><?= form_error('groom_son_update') ?></div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGPria">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="groom_ig_update" class="form-control <?= (form_error('groom_ig_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('groom_ig_update')) ? set_value('groom_ig_update') : $invt->groom_ig ?>" id="usernameIGPria" placeholder="Masukan Username Instagram">
						<div id="groom_ig_updateFeedback" class="invalid-feedback"><?= form_error('groom_ig_update') ?></div>
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
							<input type="file" name="groom_img_update" class="custom-file-input <?= (form_error('groom_img_update')) ? 'is-invalid' : '' ?>" id="uploadFotoMempelaiPria" accept="image/*">
							<label class="custom-file-label">Choose file</label>
							<div class="invalid-feedback"><?= form_error('groom_img_update') ?></div>
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
						<input type="text" name="bride_name_update" class="form-control <?= (form_error('bride_name_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_name_update')) ? set_value('bride_name_update') : $invt->bride_name ?>" id="namaLengkapWanita" placeholder="Masukan Nama Lengkap">
						<div id="bride_name_updateFeedback" class="invalid-feedback"><?= form_error('bride_name_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="alamatSingkatWanita">Alamat Singkat <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_address_update" class="form-control <?= (form_error('bride_address_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_address_update')) ? set_value('bride_address_update') : $invt->bride_address ?>" id="alamatSingkatWanita" placeholder="Masukan Alamat Singkat">
						<div id="bride_address_updateFeedback" class="invalid-feedback"><?= form_error('bride_address_update') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="namaBapakWanita">Nama Bapak <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_father_update" class="form-control <?= (form_error('bride_father_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_father_update')) ? set_value('bride_father_update') : $invt->bride_father ?>" id="namaBapakWanita" placeholder="Masukan Nama Bapak">
						<div id="bride_father_updateFeedback" class="invalid-feedback"><?= form_error('bride_father_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="namaIbuWanita">Nama Ibu <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_mother_update" class="form-control <?= (form_error('bride_mother_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_mother_update')) ? set_value('bride_mother_update') : $invt->bride_mother ?>" id="namaIbuWanita" placeholder="Masukan Nama Ibu">
						<div id="bride_mother_updateFeedback" class="invalid-feedback"><?= form_error('bride_mother_update') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="putriKeWanita">Putri Ke- <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_daughter_update" class="form-control <?= (form_error('bride_daughter_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_daughter_update')) ? set_value('bride_daughter_update') : $invt->bride_daughter ?>" id="putriKeWanita" placeholder="Masukan Putra Ke- (Berupa Huruf)">
						<div id="bride_daughter_updateFeedback" class="invalid-feedback"><?= form_error('bride_daughter_update') ?></div>
					</div>
					<p class="mb-0">Contoh Penulisan: Kesatu</p>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="usernameIGWanita">Username Instagram <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="text" name="bride_ig_update" class="form-control <?= (form_error('bride_ig_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('bride_ig_update')) ? set_value('bride_ig_update') : $invt->bride_ig ?>" id="usernameIGWanita" placeholder="Masukan Username Instagram">
						<div id="bride_ig_updateFeedback" class="invalid-feedback"><?= form_error('bride_ig_update') ?></div>
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
							<input type="file" name="bride_img_update" class="custom-file-input <?= (form_error('bride_img_update')) ? 'is-invalid' : '' ?>" id="uploadFotoMempelaiWanita" accept="image/*">
							<label class="custom-file-label">Choose file</label>
							<div class="invalid-feedback"><?= form_error('bride_img_update') ?></div>
						</div>
					</div>
					<p>*File max 2mb dengan format PNG,JPEG,JPG </p>
				</div>
			<?php endif ?>

			<!-- Update Acara Pelaksanaan Tasyakuran -->
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan <?= $acara_tasyakur->title ?></p>
			<input type="hidden" name="tasyakur_id" value="<?= $acara_tasyakur->wedding_id ?>">
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalTasyakuran">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcaraUpdate[tasyakur]" class="form-control <?= (form_error('tanggalAcaraUpdate[tasyakur]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcaraUpdate[tasyakur]')) ? set_value('tanggalAcaraUpdate[tasyakur]') : $acara_tasyakur->date ?>" id="tanggalTasyakuran">
						<div id="tanggalAcaraUpdate[tasyakur]Feedback" class="invalid-feedback"><?= form_error('tanggalAcaraUpdate[tasyakur]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamTasyakuran">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcaraUpdate[tasyakur]" class="form-control <?= (form_error('jamAcaraUpdate[tasyakur]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcaraUpdate[tasyakur]')) ? set_value('jamAcaraUpdate[tasyakur]') : $acara_tasyakur->time ?>" id="jamTasyakuran">
						<div id="jamAcaraUpdate[tasyakur]Feedback" class="invalid-feedback"><?= form_error('jamAcaraUpdate[tasyakur]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapTasyakuran">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcaraUpdate[tasyakur]" class="form-control <?= (form_error('alamatAcaraUpdate[tasyakur]')) ? 'is-invalid' : '' ?>" id="alamatLengkapTasyakuran" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcaraUpdate[tasyakur]')) ? set_value('alamatAcaraUpdate[tasyakur]') : $acara_tasyakur->address ?></textarea>
						<div id="alamatAcaraUpdate[tasyakur]Feedback" class="invalid-feedback"><?= form_error('alamatAcaraUpdate[tasyakur]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapTasyakuran">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcaraUpdate[tasyakur]" class="form-control <?= (form_error('mapsAcaraUpdate[tasyakur]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapTasyakuran" placeholder="Masukan Link google Map"><?= (set_value('mapsAcaraUpdate[tasyakur]')) ? set_value('mapsAcaraUpdate[tasyakur]') : $acara_tasyakur->maps ?></textarea>
						<div id="mapsAcaraUpdate[tasyakur]Feedback" class="invalid-feedback"><?= form_error('mapsAcaraUpdate[tasyakur]') ?></div>
					</div>
				</div>
			</div>
			<!-- End Of Update Acara Pelaksanaan Tasyakuran -->

			<!-- Update Acara Pelaksanaan Akad Nikah -->
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan <?= $acara_akad->title ?></p>
			<input type="hidden" name="akad_id" value="<?= $acara_akad->wedding_id ?>">
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalAkad">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcaraUpdate[akad]" class="form-control <?= (form_error('tanggalAcaraUpdate[akad]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcaraUpdate[akad]')) ? set_value('tanggalAcaraUpdate[akad]') : $acara_akad->date ?>" id="tanggalAkad">
						<div id="tanggalAcaraUpdate[akad]Feedback" class="invalid-feedback"><?= form_error('tanggalAcaraUpdate[akad]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamAkad">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcaraUpdate[akad]" class="form-control <?= (form_error('jamAcaraUpdate[akad]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcaraUpdate[akad]')) ? set_value('jamAcaraUpdate[akad]') : $acara_akad->time ?>" id="jamAkad">
						<div id="jamAcaraUpdate[akad]Feedback" class="invalid-feedback"><?= form_error('jamAcaraUpdate[akad]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapAkad">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcaraUpdate[akad]" class="form-control <?= (form_error('alamatAcaraUpdate[akad]')) ? 'is-invalid' : '' ?>" id="alamatLengkapAkad" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcaraUpdate[akad]')) ? set_value('alamatAcaraUpdate[akad]') : $acara_akad->address ?></textarea>
						<div id="alamatAcaraUpdate[akad]Feedback" class="invalid-feedback"><?= form_error('alamatAcaraUpdate[akad]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapAkad">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcaraUpdate[akad]" class="form-control <?= (form_error('mapsAcaraUpdate[akad]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapAkad" placeholder="Masukan Link google Map"><?= (set_value('mapsAcaraUpdate[akad]')) ? set_value('mapsAcaraUpdate[akad]') : $acara_akad->maps ?></textarea>
						<div id="mapsAcaraUpdate[akad]Feedback" class="invalid-feedback"><?= form_error('mapsAcaraUpdate[akad]') ?></div>
					</div>
				</div>
			</div>
			<!-- End Of Update Acara Pelaksanaan Akad Nikah -->

			<!-- Update Update Acara Pelaksanaan Resepsi  -->
			<p class="text-primary mb-2">Setting Waktu Pelaksanaan <?= $acara_resepsi->title ?></p>
			<input type="hidden" name="respesi_id" value="<?= $acara_resepsi->wedding_id; ?>">
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalresepsi">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="tanggalAcaraUpdate[resepsi]" class="form-control <?= (form_error('tanggalAcaraUpdate[resepsi]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('tanggalAcaraUpdate[resepsi]')) ? set_value('tanggalAcaraUpdate[resepsi]') : $acara_resepsi->date ?>" id="tanggalresepsi">
						<div id="tanggalAcaraUpdate[resepsi]Feedback" class="invalid-feedback">
							<?= form_error('tanggalAcaraUpdate[resepsi]') ?>
						</div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamresepsi">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="jamAcaraUpdate[resepsi]" class="form-control <?= (form_error('jamAcaraUpdate[resepsi]')) ? 'is-invalid' : '' ?>" value="<?= (set_value('jamAcaraUpdate[resepsi]')) ? set_value('jamAcaraUpdate[resepsi]') : $acara_resepsi->time ?>" id="jamresepsi">
						<div id="jamAcaraUpdate[resepsi]Feedback" class="invalid-feedback"><?= form_error('jamAcaraUpdate[resepsi]') ?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="alamatLengkapresepsi">Alamat Lengkap <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="alamatAcaraUpdate[resepsi]" class="form-control <?= (form_error('alamatAcaraUpdate[resepsi]')) ? 'is-invalid' : '' ?>" id="alamatLengkapresepsi" placeholder="Masukan Alamat Lengkap"><?= (set_value('alamatAcaraUpdate[resepsi]')) ? set_value('alamatAcaraUpdate[resepsi]') : $acara_resepsi->address ?></textarea>
						<div id="alamatAcaraUpdate[resepsi]Feedback" class="invalid-feedback"><?= form_error('alamatAcaraUpdate[resepsi]') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="linkGoogleMapresepsi">Link google Map <span class="text-danger">*</span></label>
					<div class="input-group">
						<textarea name="mapsAcaraUpdate[resepsi]" class="form-control <?= (form_error('mapsAcaraUpdate[resepsi]')) ? 'is-invalid' : '' ?>" id="linkGoogleMapresepsi" placeholder="Masukan Link google Map"><?= (set_value('mapsAcaraUpdate[resepsi]')) ? set_value('mapsAcaraUpdate[resepsi]') : $acara_resepsi->maps ?></textarea>
						<div id="mapsAcaraUpdate[resepsi]Feedback" class="invalid-feedback"><?= form_error('mapsAcaraUpdate[resepsi]') ?></div>
					</div>
				</div>
			</div>
			<!-- End Of Update Acara Pelaksanaan Resepsi  -->

			<!-- Update Masa Aktif Undangan -->
			<p class="text-success mb-2">Setting Masa Aktif</p>
			<div class="row">
				<div class="col-6 form-group mb-3">
					<label for="tanggalMasaAktif">Tanggal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="date" name="active_date_update" class="form-control <?= (form_error('active_date_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_date_update')) ? set_value('active_date_update') : date('Y-m-d', strtotime($detail->t_active)) ?>" id="tanggalMasaAktif">
						<div id="active_date_updateFeedback" class="invalid-feedback"><?= form_error('active_date_update') ?></div>
					</div>
				</div>
				<div class="col-6 form-group mb-3">
					<label for="jamMasaAktif">Jam <span class="text-danger">*</span></label>
					<div class="input-group">
						<input type="time" name="active_time_update" class="form-control <?= (form_error('active_time_update')) ? 'is-invalid' : '' ?>" value="<?= (set_value('active_time_update')) ? set_value('active_time_update') : date('H:i:s', strtotime($detail->t_active)) ?>" id="jamMasaAktif">
						<div id="active_time_updateFeedback" class="invalid-feedback"><?= form_error('active_time_update') ?></div>
					</div>
				</div>
			</div>
			<!-- End Of Update Masa Aktif Undangan -->

			<div class="flex mt-3 mb-4">
				<button type="submit" name="update" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
