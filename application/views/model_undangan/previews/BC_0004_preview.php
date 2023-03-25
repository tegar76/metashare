<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/icons/green-shades/ic-ms.png') ?>">
	<!-- Title Invitation -->
	<title>The Wedding Of <?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></title>
	<!--Style CSS-->
	<link rel="stylesheet" href="<?= base_url('assets/style/yege-shades-style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/lightbox.css') ?>">
	<!--CCS ANIMATE-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<!--AOS-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!--Icon Tittle -->
	<style>
		img[alt="www.000webhost.com"] {
			display: none;
		}
	</style>
</head>

<body>
	<!-- ======================= Landing Page(Sampul) ========================-->
	<section class="sampul" id="sampul">
		<!--Responsive Bingkai-->
		<div class="bing1">
			<img class="animate__animated animate__fadeInTopRight animate__delay-1s" src="<?= base_url('assets/images/green-shades/sampul/bingkai1.svg') ?>" alt="bingkai1">
		</div>
		<div class="bing2">
			<img class="animate__animated animate__fadeInBottomLeft animate__delay-1s" src="<?= base_url('assets/images/green-shades/sampul/bingkai2.svg') ?>" alt="bingkai2">
		</div>

		<div class="contain">
			<div class="pengantar">
				<div class="text">
					<p>The</p>
					<p>Wedding Of</p>
				</div>
			</div>

			<div class="waktuAkad">
				<p><?= $akadDate['tanggal'] . ' ' . $akadDate['bulan'] . ' ' . $akadDate['tahun'] ?></p>
			</div>

			<div class="batas">
				<svg height="15" viewBox="0 0 184 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M93.1274 14.4343C92.8921 14.728 92.4477 14.7351 92.2031 14.4491L87.2883 8.70034C85.8136 6.41438 85.5898 4.23743 86.6952 2.15472C86.716 2.11558 86.7424 2.07767 86.7721 2.04476C88.6293 -0.014218 90.9306 1.25997 92.4392 3.36239C92.7095 3.73905 93.3 3.74402 93.5737 3.3699C95.2184 1.12238 97.3766 0.26907 99.2409 2.00201C99.265 2.02447 99.2883 2.05055 99.3079 2.0771C101.023 4.40322 99.1615 6.44608 97.9115 8.46375L93.1274 14.4343Z" fill="#ABC1B9" stroke="white" stroke-width="0.6" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
					<line x1="1" y1="7.56465" x2="85.8212" y2="7.56466" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="0.55" y1="10.686" x2="0.55" y2="4.67509" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="183.55" y1="10.686" x2="183.55" y2="4.67509" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="99.179" y1="7.56465" x2="184" y2="7.56464" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
				</svg>
			</div>

			<div class="mempelai">
				<P><?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></P>
			</div>

			<div class="batas">
				<svg height="15" viewBox="0 0 184 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M93.1274 14.4343C92.8921 14.728 92.4477 14.7351 92.2031 14.4491L87.2883 8.70034C85.8136 6.41438 85.5898 4.23743 86.6952 2.15472C86.716 2.11558 86.7424 2.07767 86.7721 2.04476C88.6293 -0.014218 90.9306 1.25997 92.4392 3.36239C92.7095 3.73905 93.3 3.74402 93.5737 3.3699C95.2184 1.12238 97.3766 0.26907 99.2409 2.00201C99.265 2.02447 99.2883 2.05055 99.3079 2.0771C101.023 4.40322 99.1615 6.44608 97.9115 8.46375L93.1274 14.4343Z" fill="#ABC1B9" stroke="white" stroke-width="0.6" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
					<line x1="1" y1="7.56465" x2="85.8212" y2="7.56466" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="0.55" y1="10.686" x2="0.55" y2="4.67509" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="183.55" y1="10.686" x2="183.55" y2="4.67509" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
					<line x1="99.179" y1="7.56465" x2="184" y2="7.56464" stroke="#1A1C1F" stroke-opacity="0.75" stroke-width="0.9" />
				</svg>
			</div>

			<div class="tamu">
				<div class="isi">
					<p>Kepada Yth</p>
					<p>Bapak/Ibu/Saudara/i</p>
					<h2><?= (!empty($guest) ? $guest : '-') ?></h2>
				</div>
			</div>

			<div class="ket">
				<p>*Maaf Bila Ada kesalahan Penulisan Nama & Gelar</p>
			</div>

			<div class="btn" id="btn" onclick="enableScroll()" style="transition-delay: 120s;">
				<a href="javascript:setTimeout(()=>{window.location = '#mempelai'},500);">
					<svg height="33" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="in in btn-open">
							<g id="Group 1692">
								<path id="path3570" d="M5.71419 14.1733C5.48241 14.4204 5.09212 14.4267 4.85246 14.1873L1.82818 11.1652C0.887642 9.91967 0.738593 8.73301 1.43032 7.59737C1.45439 7.55785 1.48422 7.52111 1.51805 7.48954C2.62959 6.45234 4.13847 6.57499 5.15544 7.43006C5.48203 7.70465 6.01152 7.70637 6.32372 7.41553C7.28573 6.51931 8.3896 6.59486 9.49638 7.47402C9.52235 7.49465 9.54744 7.51868 9.5689 7.54397C10.6478 8.81476 9.45755 9.9319 8.65737 11.0353L5.71419 14.1733Z" stroke="white" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
								<path id="Ellipse 17" d="M7.25 3.9375C7.25 4.95392 7.01352 5.84953 6.65687 6.47366C6.29214 7.11194 5.86446 7.375 5.5 7.375C5.13554 7.375 4.70786 7.11194 4.34313 6.47366C3.98648 5.84953 3.75 4.95392 3.75 3.9375C3.75 2.92108 3.98648 2.02547 4.34313 1.40134C4.70786 0.763056 5.13554 0.5 5.5 0.5C5.86446 0.5 6.29214 0.763056 6.65687 1.40134C7.01352 2.02547 7.25 2.92108 7.25 3.9375Z" stroke="white" />
							</g>
						</g>
					</svg>
					<p>Buka undangan</p>
				</a>
			</div>

			<!--Count Down Waktu Akad Nikah-->
			<div class="contWa" id="contWa">
				<div class="jud">
					<p>Waktu Mundur Acara Akad Nikah</p>
				</div>
				<input type="hidden" id="countDownTime" name="count_down" value="<?= $countdown ?>">
				<div class="subjud">
					<ul>
						<li>
							<p>Hari</p>
							<div id="hari" class="hari"></div>
						</li>
						<li>
							<p>Jam</p>
							<div id="jam" class="jam"></div>
						</li>
						<li>
							<p>Menit</p>
							<div id="menit" class="menit"></div>
						</li>
						<li>
							<p>Detik</p>
							<div id="detik" class="detik"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!---------- Musik & Berikan Hadiah---------->
		<audio id="music" loop>
			<source src="<?= base_url('storage/invitations/uploads/' . $invitation->music_bg) ?>" type="audio/mp3">
		</audio>

		<div class="gm" id="gm">
			<img class="giftt" id="btnGift" src="<?= base_url() ?>assets/icons/green-shades/in in-gift.svg" alt="gift">
		</div>

		<!---------- Modal Berikan Hadiah ---------->
		<div id="myModal" class="myModal">
			<div class="modal-content">

				<!-- notif copied -->
				<div class="notf-copy" id="notf-copy">
					<p id="cSucces"> &#x2714; Berhasil Dicopy</p>
				</div>

				<div class="judul">
					<p class="jd">Berikan Hadiah</p>
				</div>
				<div class="isi">
					<p>Tanpa mengurangi rasa hormat, untuk melengkapi kebahagian pengantin, anda dapat memberikan tanda kasih dengan melalui transfer ke rekening berikut:</p>
				</div>
				<div class="card">
					<?php foreach ($gifts as $gift) : ?>
						<div class="card-box">
							<img class="va-image" src="<?= base_url('storage/') . $gift->icon ?>" alt="Card Virtual Akun BCA">
							<div class="no-va">
								<p id="no-va-<?= $gift->id ?>"><?= $gift->account ?></p>
								<img class="copy-va" src="<?= base_url() ?>assets/icons/green-shades/in in-copy.svg" alt="copy" onclick="copyToClipboard('no-va-<?= $gift->id ?>');return false">
							</div>
							<p class="recipient">*Recipient: <?= $gift->recipient ?></p>
							<div class="barcode">
								<img class="barcode-isi" src="<?= base_url('storage/invitations/gifts/') . $gift->qr ?>" alt="barcode">
							</div>
							<div class="btn-saveQR">
								<button class="btn-saveQR_Code download-barcode" onclick="fetchFile('<?= base_url('storage/invitations/gifts/') . $gift->qr ?>')">Save QR Code</button>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<footer>
					<div id="in-close" class="in-close">&times;</div>
				</footer>
			</div>
		</div>
	</section>
	<!-- ======================= END Landing Page(Sampul) ========================-->

	<!-- ======================= Landing Page(Mempelai) ========================-->
	<section id="mempelai">
		<div class="isi">
			<div class="bismillah" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
				<img src="<?= base_url() ?>assets/images/green-shades/bissmilah.svg" alt="Bismillah Image">
			</div>
			<div class="pembuka">
				<p data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">Assalamuaikum Warohmatullohi Wabaroktuh</p>
				<p data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">Maha Suci Alloh SWT Yang Telah Menciptakan Mahluknya Berpasang-Pasangan, Ya Alloh Semoga Ridho-Mu Tercurah Mengiringi Pernikahan Putra-Putri Kami :</p>
			</div>
			<div class="pempelai-pria" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="450">
				<p><?= $invitation->groom_name ?></p>
				<a href="https://instagram.com/<?= $invitation->groom_ig ?>">
					<img src="<?= base_url() ?>assets/images/green-shades/ig.png" alt="ic-Instagram">
				</a>
				<p>Putra <?= $invitation->groom_son ?> Bpk. <?= $invitation->groom_father ?> & Ibu <?= $invitation->groom_mother ?></p>
			</div>
			<div class="dengan" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="550">
				<p>Dengan</p>
			</div>
			<div class="pempelai-wanita" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="650">
				<p><?= $invitation->bride_name ?></p>
				<a href="https://instagram.com/<?= $invitation->bride_ig ?>">
					<img src="<?= base_url() ?>assets/images/green-shades/ig.png" alt="ic-Instagram">
				</a>
				<p>Putri <?= $invitation->bride_daughter; ?> Bpk. <?= $invitation->bride_father ?> & Ibu <?= $invitation->bride_mother ?></p>
			</div>
			<div class="penutup" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="750">
				<p>Untuk Melaksanakan Sunah Rosul-mu dalam membentuk Keluarga Sakinah, Mawadah dan Warohmah</p>
			</div>
		</div>

		<!--Diveder For Desktop,tablet & tablet mini-->
		<div class="dive">
			<img src="<?= base_url() ?>assets/images/green-shades/dive-mempelai.svg" alt="diveder">
		</div>

		<!--Diveder For Android & Apple Smartphone & Apple Smartphone mini-->
		<div class="dive-AAs">
			<img src="<?= base_url() ?>assets/images/green-shades/dive-mempelai-for-AAsmartphone.svg" alt="diveder">
		</div>
	</section>
	<!-- ======================= END Landing Page(Mempelai) ========================-->


	<!-- ======================= Landing Page(Waktu) ========================-->
	<section id="waktu">
		<div class="isi">
			<!--Tasyakuran-->
			<div class="tasyakuran" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="150">
				<div class="corak-tasyakuran">
					<img src="<?= base_url() ?>assets/images/green-shades/corak-tasyakuran.svg" alt="Corak Tasyakuran">
				</div>
				<p class="judul">Tasyakuran</p>
				<div class="batas">
					<svg height="13" viewBox="0 0 101 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="Group 20">
							<path id="path3570" d="M51.174 12.4343C50.9386 12.728 50.4942 12.7351 50.2497 12.4491L46.1042 7.60027C44.8423 5.64396 44.649 3.78078 45.5914 1.99816C45.6121 1.95899 45.6385 1.92114 45.6683 1.88831C47.2231 0.173184 49.1393 1.17742 50.4309 2.90416C50.7086 3.27539 51.3001 3.28078 51.5809 2.91189C52.9773 1.07726 54.7808 0.406048 56.3441 1.85395C56.3683 1.87637 56.3915 1.9024 56.411 1.92898C57.8742 3.9204 56.2802 5.66972 55.2098 7.39748L51.174 12.4343Z" fill="#5E887C" stroke="white" stroke-width="0.6" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
							<line id="Line 3" x1="1" y1="6.5" x2="44.5484" y2="6.5" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 5" x1="0.5" y1="10.0109" x2="0.5" y2="3.99998" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 6" x1="100.5" y1="9.68604" x2="100.5" y2="3.67509" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 4" x1="57.4516" y1="6.51471" x2="101" y2="6.5147" stroke="#1A1C1F" stroke-opacity="0.75" />
						</g>
					</svg>
				</div>
				<div class="tgl">
					<P><?= $acara['tasyakur']['tanggal']; ?></P>
				</div>
				<div class="almt">
					<p><?= $acara['tasyakur']['alamat']; ?></p>
				</div>
			</div>
			<!--end tasyakuran -->

			<!-- Akad Nikah-->
			<div class="akad" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
				<div class="corak-akad">
					<img src="<?= base_url() ?>assets/images/green-shades/corak-akad.svg" alt="Corak Akad">
				</div>
				<p class="judul">Akad Nikah</p>
				<div class="batas">
					<svg width="101" height="13" viewBox="0 0 101 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="Group 20">
							<path id="path3570" d="M51.174 12.4343C50.9386 12.728 50.4942 12.7351 50.2497 12.4491L46.1042 7.60027C44.8423 5.64396 44.649 3.78078 45.5914 1.99816C45.6121 1.95899 45.6385 1.92114 45.6683 1.88831C47.2231 0.173184 49.1393 1.17742 50.4309 2.90416C50.7086 3.27539 51.3001 3.28078 51.5809 2.91189C52.9773 1.07726 54.7808 0.406048 56.3441 1.85395C56.3683 1.87637 56.3915 1.9024 56.411 1.92898C57.8742 3.9204 56.2802 5.66972 55.2098 7.39748L51.174 12.4343Z" fill="#5E887C" stroke="white" stroke-width="0.6" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
							<line id="Line 3" x1="1" y1="6.5" x2="44.5484" y2="6.5" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 5" x1="0.5" y1="10.0109" x2="0.5" y2="3.99998" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 6" x1="100.5" y1="9.68604" x2="100.5" y2="3.67509" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 4" x1="57.4516" y1="6.51471" x2="101" y2="6.5147" stroke="#1A1C1F" stroke-opacity="0.75" />
						</g>
					</svg>
				</div>
				<div class="tgl">
					<P><?= $acara['akad']['tanggal'] ?></P>
				</div>
				<div class="jaam">
					<P><?= $acara['akad']['waktu']; ?> - Selesai</P>
				</div>
				<div class="almt">
					<p><?= $acara['akad']['alamat'] ?></p>
				</div>

				<div class="btn-map">
					<a href="<?= $acara['akad']['maps']; ?>">
						<svg height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="in in-maps">
								<path id="path3570" d="M8.96832 6.9728C8.73302 7.26647 8.28858 7.27355 8.04404 6.98752L6.85788 5.6001C6.4138 4.91169 6.33837 4.2554 6.65424 3.62698C6.67414 3.58739 6.69979 3.55032 6.73058 3.51846C7.11291 3.1229 7.55232 3.17252 7.9377 3.44226C8.3175 3.7081 8.91726 3.70865 9.30223 3.45036C9.69352 3.18784 10.1215 3.17221 10.5101 3.51592C10.5348 3.53777 10.5574 3.56316 10.5763 3.59018C11.0692 4.29433 10.5061 4.91459 10.1266 5.52731L8.96832 6.9728Z" stroke="white" stroke-width="0.9" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
								<g id="Group 1562">
									<path id="Ellipse 16" d="M15.7038 11.3077C15.7038 11.4825 15.598 11.7206 15.2406 12.0023C14.8882 12.2799 14.3505 12.5497 13.6459 12.7846C12.2413 13.2527 10.2724 13.55 8.07692 13.55C5.88145 13.55 3.9125 13.2527 2.50798 12.7846C1.80337 12.5497 1.26562 12.2799 0.913263 12.0023C0.555836 11.7206 0.45 11.4825 0.45 11.3077C0.45 11.133 0.555836 10.8949 0.913263 10.6132C1.26562 10.3355 1.80337 10.0658 2.50798 9.83088C3.9125 9.36271 5.88145 9.06542 8.07692 9.06542C10.2724 9.06542 12.2413 9.36271 13.6459 9.83088C14.3505 10.0658 14.8882 10.3355 15.2406 10.6132C15.598 10.8949 15.7038 11.133 15.7038 11.3077Z" stroke="white" stroke-width="0.9" />
									<path id="Vector" d="M8.61538 0.45C10.5404 0.45 11.4932 1.01931 11.995 1.73149C12.5214 2.47859 12.6353 3.49141 12.6353 4.55621C12.6353 5.01364 12.4882 5.55055 12.2209 6.13907C11.9554 6.72353 11.5837 7.33219 11.1642 7.92562C10.3249 9.11273 9.32011 10.2029 8.66986 10.8668C8.47681 11.0639 8.17432 11.0602 7.98614 10.8583C7.3634 10.1904 6.40942 9.10236 5.61393 7.91946C4.80332 6.71406 4.21923 5.49869 4.21923 4.55621C4.21923 3.52594 4.41634 2.51002 5.02903 1.75609C5.62699 1.02027 6.691 0.45 8.61538 0.45Z" stroke="white" stroke-width="0.9" />
								</g>
							</g>
						</svg>
						<p>Google Maps</p>
					</a>
				</div>
			</div>
			<!--end Akad Nikah-->

			<!-- Resepsi-->
			<div class="resepsi" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="450">
				<div class="corak-resepsi">
					<img src="<?= base_url() ?>assets/images/green-shades/corak-resepsi.svg" alt="Corak Resepsi">
				</div>
				<p class="judul">Resepsi</p>
				<div class="batas">
					<svg width="101" height="13" viewBox="0 0 101 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="Group 20">
							<path id="path3570" d="M51.174 12.4343C50.9386 12.728 50.4942 12.7351 50.2497 12.4491L46.1042 7.60027C44.8423 5.64396 44.649 3.78078 45.5914 1.99816C45.6121 1.95899 45.6385 1.92114 45.6683 1.88831C47.2231 0.173184 49.1393 1.17742 50.4309 2.90416C50.7086 3.27539 51.3001 3.28078 51.5809 2.91189C52.9773 1.07726 54.7808 0.406048 56.3441 1.85395C56.3683 1.87637 56.3915 1.9024 56.411 1.92898C57.8742 3.9204 56.2802 5.66972 55.2098 7.39748L51.174 12.4343Z" fill="#5E887C" stroke="white" stroke-width="0.6" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
							<line id="Line 3" x1="1" y1="6.5" x2="44.5484" y2="6.5" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 5" x1="0.5" y1="10.0109" x2="0.5" y2="3.99998" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 6" x1="100.5" y1="9.68604" x2="100.5" y2="3.67509" stroke="#1A1C1F" stroke-opacity="0.75" />
							<line id="Line 4" x1="57.4516" y1="6.51471" x2="101" y2="6.5147" stroke="#1A1C1F" stroke-opacity="0.75" />
						</g>
					</svg>
				</div>
				<div class="tgl">
					<P><?= $acara['resepsi']['tanggal'] ?></P>
				</div>
				<div class="jaam">
					<P><?= $acara['resepsi']['waktu']; ?> - Selesai</P>
				</div>
				<div class="almt">
					<p><?= $acara['resepsi']['alamat'] ?></p>
				</div>

				<div class="btn-map">
					<a href="<?= $acara['resepsi']['maps']; ?>">
						<svg height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g id="in in-maps">
								<path id="path3570" d="M8.96832 6.9728C8.73302 7.26647 8.28858 7.27355 8.04404 6.98752L6.85788 5.6001C6.4138 4.91169 6.33837 4.2554 6.65424 3.62698C6.67414 3.58739 6.69979 3.55032 6.73058 3.51846C7.11291 3.1229 7.55232 3.17252 7.9377 3.44226C8.3175 3.7081 8.91726 3.70865 9.30223 3.45036C9.69352 3.18784 10.1215 3.17221 10.5101 3.51592C10.5348 3.53777 10.5574 3.56316 10.5763 3.59018C11.0692 4.29433 10.5061 4.91459 10.1266 5.52731L8.96832 6.9728Z" stroke="white" stroke-width="0.9" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
								<g id="Group 1562">
									<path id="Ellipse 16" d="M15.7038 11.3077C15.7038 11.4825 15.598 11.7206 15.2406 12.0023C14.8882 12.2799 14.3505 12.5497 13.6459 12.7846C12.2413 13.2527 10.2724 13.55 8.07692 13.55C5.88145 13.55 3.9125 13.2527 2.50798 12.7846C1.80337 12.5497 1.26562 12.2799 0.913263 12.0023C0.555836 11.7206 0.45 11.4825 0.45 11.3077C0.45 11.133 0.555836 10.8949 0.913263 10.6132C1.26562 10.3355 1.80337 10.0658 2.50798 9.83088C3.9125 9.36271 5.88145 9.06542 8.07692 9.06542C10.2724 9.06542 12.2413 9.36271 13.6459 9.83088C14.3505 10.0658 14.8882 10.3355 15.2406 10.6132C15.598 10.8949 15.7038 11.133 15.7038 11.3077Z" stroke="white" stroke-width="0.9" />
									<path id="Vector" d="M8.61538 0.45C10.5404 0.45 11.4932 1.01931 11.995 1.73149C12.5214 2.47859 12.6353 3.49141 12.6353 4.55621C12.6353 5.01364 12.4882 5.55055 12.2209 6.13907C11.9554 6.72353 11.5837 7.33219 11.1642 7.92562C10.3249 9.11273 9.32011 10.2029 8.66986 10.8668C8.47681 11.0639 8.17432 11.0602 7.98614 10.8583C7.3634 10.1904 6.40942 9.10236 5.61393 7.91946C4.80332 6.71406 4.21923 5.49869 4.21923 4.55621C4.21923 3.52594 4.41634 2.51002 5.02903 1.75609C5.62699 1.02027 6.691 0.45 8.61538 0.45Z" stroke="white" stroke-width="0.9" />
								</g>
							</g>
						</svg>
						<p>Google Maps</p>
					</a>
				</div>
			</div>
			<!--end Resepsi-->
		</div>

		<div class="penutup">
			<p>Atas kehadiran serta doa restu Bapak/Ibu/Saudara(i) kami sampaikan terimakasih</p>
			<p>Wassalamuaikum Warohmatullohi Wabarokatuh</p>
		</div>

		<!--Diveder For Desktop ,tablet & tablet mini-->
		<div class="dive-waktu">
			<img src="<?= base_url() ?>assets/images/green-shades/dive-waktu.svg" alt="diveder">
		</div>

		<!--Diveder For Apple & Android & apple mini-->
		<div class="dive-waktu-AAs">
			<img src="<?= base_url() ?>assets/images/green-shades/dive-waktu-AAs.svg" alt="diveder">
		</div>
	</section>
	<!-- ======================= END Landing Page(Waktu) ========================-->


	<!-- ======================= END Landing Page(Pesan) ========================-->
	<section id="pesan">
		<div class="pesan-bahagia" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="150">
			<div class="header">
				<p>Pesan Bahagia</p>
				<hr>
			</div>
			<?= form_open("#", ['id' => 'submit-happy-message']) ?>
			<input type="hidden" name="guest_name" value="<?= $guest ?>">
			<input type="hidden" id="invtId" name="invt_id" value="<?= $invitation->invitation_id ?>">
			<div class="inp-pesan">
				<p>Pesan :</p>
				<textarea name="pesan" id="" cols="20" rows="2" placeholder="Input pesan bahagia"></textarea>
			</div>
			<div class="confirm-kehadiran">
				<label class="contain">
					<input type="radio" value="2" checked="checked" name="konfirmasiHadir">
					<span class="checkmark check"></span>
					Hadir
				</label>
				<label class="contain">
					<input type="radio" value="1" name="konfirmasiHadir">
					<span class="checkmark2 check"></span>
					Tidak Hadir
				</label>
				<label class="contain">
					<input type="radio" value="0" name="konfirmasiHadir">
					<span class="checkmark3 check"></span>
					Belum Tahu
				</label>
			</div>

			<div class="btn-kirimm">
				<button type="submit" class="btn-km">Kirim</button>
				<p>Total Pesan : <span id="count_message"></span></p>
			</div>
			<?= form_close() ?>
			<div class="isi-pesan">
				<div id="display_message"></div>
			</div>
		</div>

		<div class="akhir" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="200">
			<div class="header">
				<!--Bingkai atas bagian akhir for desktop  -->
				<img class="bingAtas-akhir-for-desk" src="<?= base_url() ?>assets/images/green-shades/bingAtas-akhir-for-desktop.svg" alt="Bingkai Akhir">

				<!--Bingkai atas bagian akhir for Apple & Android Smartphone  -->
				<img class="bingAtas-akhir-for-AAs" src="<?= base_url() ?>assets/images/green-shades/bingAtas-akhir-for-AAs.svg" alt="Bingkai Akhir">
				<div class="hurufDepan-mempelai">
					<p>R<span style="color:#EFC207;">&</span>R</p>
				</div>
				<div class="trm">
					<p>Terimakasih</p>
				</div>
				<!--Bingkai bawah bagian akhir for desktop  -->
				<img class="bingBawah-akhir-for-desk" src="<?= base_url() ?>assets/images/green-shades/bingBawah-akhir-for-desktop.svg" alt="Bingkai Akhir">

				<!--Bingkai bawah bagian akhir for Apple & Android Smartphone  -->
				<img class="bingBawah-akhir-for-AAs" src="<?= base_url() ?>assets/images/green-shades/bingBawah-akhir-for-AAs.svg" alt="Bingkai Akhir">
			</div>
			<div class="akhir-isi">
				<p>“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung merasa tentram kepadanya, dan dijadikan-Nya, diantaramu rasa kasih dan sayang, Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi orang-orang yang berfikir”</p>
				<p><strong>(Q.S.Ar-Ruum:21)</strong></p>
			</div>
		</div>

		<div class="footer">
			<div class="isi-foo">
				<img class="logo-ms" src="<?= base_url() ?>assets/images/green-shades/logo_ms.svg" alt="Logo MetaShare">
			</div>
			<div class="kontak">
				<div class="wa">
					<img src="<?= base_url() ?>assets/images/green-shades/wa.png" alt="Icon WhatApps">
					<p>+6287899703471</p>
				</div>

				<div class="ig">
					<img src="<?= base_url() ?>assets/images/green-shades/ig.png" alt="Icon Instagram">
					<p>@metasharee</p>
				</div>
			</div>
		</div>
	</section>
	<!-- ======================= END Landing Page(Pesan) ========================-->

	<!-- Script JS-->
	<script src="<?= base_url('assets/script/yege-shades-script.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/lightbox-plus-jquery.js') ?>"></script>
	<!--AOS Animate on scroll library-->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!--Initialize AOS-->
	<script>
		AOS.init();

		const downloadBtn = document.querySelector(".download-barcode");

		function fetchFile(url) {
			fetch(url).then(res => res.blob()).then(file => {
				let tempUrl = URL.createObjectURL(file);
				const aTag = document.createElement("a");
				aTag.href = tempUrl;
				aTag.download = url.replace(/^.*[\\\/]/, '');
				document.body.appendChild(aTag);
				aTag.click();
				downloadBtn.innerText = "Download File";
				URL.revokeObjectURL(tempUrl);
				aTag.remove();
			}).catch(() => {
				alert("Failed to download file!");
				downloadBtn.innerText = "Download File";
			});
		}
	</script>

	<script>
		$(document).ready(function() {
			load_comment();
			load_count_comment();
			$("#submit-happy-message").submit(function(e) {
				e.preventDefault();
				var form = this;
				var formdata = new FormData(form);
				$.ajax({
					url: "<?= base_url('undangan/submit_message') ?>",
					type: "POST",
					processData: false,
					contentType: false,
					data: formdata,
					dataType: "json",
					success: function(response) {
						if (response.success == true) {
							load_comment();
							load_count_comment();
							form.reset();
						}
					},
				});
			});

			function load_comment() {
				let id = $('#invtId').val();
				$.ajax({
					type: "GET",
					url: "<?= base_url('undangan/get_message_standard?id=') ?>" + id,
					dataType: "json",
					success: function(reponse) {
						$("#display_message").html(reponse);
					},
					error: function(reponse) {
						console.log(reponse.responseText);
					},
				});
			}

			function load_count_comment() {
				let id = $('#invtId').val();
				$.ajax({
					type: "GET",
					url: "<?= base_url('undangan/get_count_message?id=') ?>" + id,
					dataType: "json",
					success: function(reponse) {
						$("#count_message").text(reponse);
					},
					error: function(reponse) {
						console.log(reponse.responseText);
					},
				});
			}
		});
	</script>
</body>

</html>