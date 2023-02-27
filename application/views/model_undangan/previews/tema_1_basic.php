<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/icons/app/favicon.ico">

	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>

	<!-- Css -->
	<link href="<?= base_url() ?>assets/style/tailwind-style.css" rel="stylesheet" />

	<!-- Tailwind Elements -->
	<script src="<?= base_url() ?>assets/vendor/tw-elements/dist/js/index.min.js"></script>

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/jquery.magnify.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/magnify-white-theme.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/docs.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/magnify-master/docs/js/jquery.magnify.js"></script>

	<!-- AOS -->
	<link href="<?= base_url() ?>assets/vendor/aos/dist/aos.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/aos/dist/aos.js"></script>


	<title>The Wedding Of <?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></title>

	<style>
		html,
		body {
			overflow-x: hidden;
		}

		html {
			scroll-behavior: smooth;
		}

		@font-face {
			font-family: "Montserrat";
			src: url("<?= base_url() ?>assets/fonts/MontserratAlternatesLight.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "MontserratBold";
			src: url("<?= base_url() ?>assets/fonts/MontserratAlternatesRegular.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "RadicalsDemo";
			src: url("<?= base_url() ?>assets/fonts/RadicalsDemo.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "KalunaScriptDemo";
			src: url("<?= base_url() ?>assets/fonts/KalunaScriptDemo.otf");
			font-display: block;
		}

		@font-face {
			font-family: "ShareDong";
			src: url("<?= base_url() ?>assets/fonts/ShareDong.ttf");
			font-display: block;
		}

		.font-Montserrat {
			font-family: "Montserrat";
		}

		.font-MontserratBold {
			font-family: "MontserratBold";
		}


		.font-RadicalsDemo {
			font-family: "RadicalsDemo";
		}

		.font-KalunaScriptDemo {
			font-family: "KalunaScriptDemo";
		}

		.font-ShareDong {
			font-family: "ShareDong";
		}
	</style>

</head>

<body class="font-Montserrat bg-[#ebeeee]">
	
	<!-- floating button -->
	<div id="floatingButton" class="hidden fixed right-5 bottom-28 z-10 md:right-12 w-10 md:-16 lg:w-12">
		<div class="justify-between w-10 md:w-16 lg:w-12 mx-auto lg:py-3 block lg:mx-0 lg:ml-5">
			<button class="w-full h-full bg-amber-50 shadow-lg rounded-full border border-teal-600/80 hover:bg-amber-100 focus:bg-amber-100 justify-center inline-block text-center pt-2 pb-2 mb-3" data-bs-toggle="modal" data-bs-target="#modalGiftCard">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px]" src="<?= base_url('assets/icons/tema1/floating_gift.svg') ?>" alt="">
				</div>
			</button>
			<button class="w-full bg-amber-50 shadow-lg border border-tema1-pink/80 rounded-full hover:bg-amber-100 focus:bg-amber-100 justify-center inline-block text-center pt-2 pb-2 mb-2">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px] animate-spin-slow" src="<?= base_url('assets/icons/tema1/floating_music_play.svg') ?>" alt="" id="iconMusic">
				</div>

				<audio id="song" loop>
					<source src="<?= base_url('storage/invitations/uploads/' . $invitation->music_bg) ?>" type="audio/mp3">
				</audio>
			</button>
		</div>
	</div>
	<!-- floating button End -->

	<!-- Sampul -->
	<div class="sampul text-center z-0 bg-gradient-to-t from-indigo-100 via-red-100 to-yellow-50  min-h-[100vh] max-h-max" id="sampul">
		<div class="flex justify-center items-center">
			<div>
				<img src="<?= base_url('assets/ilustrations/tema1/sampul_ils1.png') ?>" class="absolute left-0 opacity-80 w-14 2xs:w-20 sm:w-40">
				<div class="absolute left-[35vw] top-5 hidden lg:block">
					<div class="flex">
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45  h-10 w-2 rounded-xl -mr-8"></div>
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 hidden lg:block h-14 w-2 rounded-xl"></div>
					</div>
				</div>
				<div class="absolute right-[33vw] top-5 hidden lg:block">
					<div class="flex">
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 h-10 w-2 rounded-xl -mr-8"></div>
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 h-14 w-2 rounded-xl"></div>
					</div>
				</div>
				<div class="flex justify-center">

					<div class="">
						<h1 class="mt-[15vh] 2xs:mt-[20vh] font-KalunaScriptDemo text-3xl 2xs:text-4xl sm:text-6xl lg:text-4xl text-tema1-dark-green">The Wedding Of</h1>

						<div>
							<h1 class="mt-8 sm:mt-12 lg:mt-8 font-RadicalsDemo text-3xl 2xs:text-4xl sm:text-5xl lg:text-4xl text-tema1-pink tracking-widest"><?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></h1>
							<p class="mt-1 sm:mt-3 text-lg 2xs:text-xl sm:text-3xl lg:text-xl text-tema1-teal font-ShareDong">
								<?= $akadDate['tanggal'] . ' <span class="font-normal text-base-sm 2xs:text-base sm:text-xl lg:text-base-md"> ' . $akadDate['bulan'] . '  </span><span> ' . $akadDate['tahun'] . ' </span>' ?>
							</p>
						</div>

						<div class="">
							<div class="flex">
								<div class="border border-tema1-pink/40 bg-white/30 px-8 2xs:px-10 sm:px-14 lg:px-10 py-3 sm:py-5 lg:py-2 rounded-xl sm:rounded-3xl lg:rounded-xl mt-8 mx-auto text-xs 2xl:text-sm sm:text-xl lg:text-sm text-tema1-teal">
									<div class="attribute">
										<p class="mb-2 lg:mb-0">Kepada Yth</p>
										<p>Bapak/Ibu/Saudara/I</p>
										<p class="mt-2 lg:mt-0 text-base-xs 2xs:text-base-md sm:text-2xl lg:text-base-md font-semibold"><?= (!empty($guest) ? $guest : '-') ?></p>
									</div>
								</div>
							</div>
							<p class="text-tema1-teal/60 leading-4 lg:leading-3 my-3 text-base-2xs 2xs:text-base-1xs sm:text-base-md lg:text-base-1xs">*Mohon Maaf Bila Ada Kesalahan Dalam <br> Penulisan Nama dan Gelar</p>
						</div>

						<div class="flex">
							<a href="#sambutan" id="btnOpen" role="button" class="font-MontserratBold font-medium text-white text-base-xs 2xs:text-sm sm:text-xl lg:text-base-xs w-fit bg-tema1-teal hover:bg-teal-700 rounded-xl sm:rounded-2xl lg:rounded-xl mx-auto transition delay-150 animate-bounce flex justify-center mt-8 mb-8 sm:mt-16 lg:mt-8 px-8 lg:px-8 py-1.5 2xs:py-2.5 sm:py-4 lg:py-1" data-role="link" onclick="showMainPage()">
								<div class="flex"> <img src="<?= base_url('assets/icons/tema1/cover_icon_unlock.svg') ?>" alt="" class="mr-3 w-3">
									<p>Buka Undangan</p>
								</div>
							</a>
						</div>
					</div>

				</div>
				<div class="absolute left-[35vw] bottom-5 hidden lg:block">
					<div class="flex">
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 hidden lg:block h-10 w-2 rounded-xl -mr-8"></div>
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 hidden lg:block h-14 w-2 rounded-xl"></div>
					</div>
				</div>
				<div class="absolute right-[33vw] bottom-5 hidden lg:block">
					<div class="flex">
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 h-10 w-2 rounded-xl -mr-8"></div>
						<div class="border border-tema1-teal/50 bg-tema1-pink/50 -rotate-45 h-14 w-2 rounded-xl"></div>
					</div>
				</div>
				<img src="<?= base_url('assets/ilustrations/tema1/sampul_ils3.png') ?>" class="absolute right-0 opacity-80 -mt-32 sm:-mt-44 lg:bottom-0 w-14 2xs:w-20 sm:w-40">
			</div>
		</div>

	</div>
	<!-- Sampul End-->

	<div class="mainPage hidden main-page-transition" id="mainPage">
		<div class="cover-shape hidden lg:block ">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 20 1440 320" class="bg-indigo-100">
				<path fill="#ebeeee" fill-opacity="1" d="M0,128L16,112C32,96,64,64,96,64C128,64,160,96,192,112C224,128,256,128,288,122.7C320,117,352,107,384,128C416,149,448,203,480,208C512,213,544,171,576,154.7C608,139,640,149,672,154.7C704,160,736,160,768,170.7C800,181,832,203,864,202.7C896,203,928,181,960,165.3C992,149,1024,139,1056,144C1088,149,1120,171,1152,176C1184,181,1216,171,1248,144C1280,117,1312,75,1344,48C1376,21,1408,11,1424,5.3L1440,0L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
			</svg>
		</div>

		<!-- Sambutan -->
		<section class="lg:-mt-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100 via-[#ebeeee] to-[#ebeeee] pb-8 pt-8 lg:pt-0 px-6 1xs:px-16 md:px-24 lg:px-72" id="sambutan">
			<div class="flex justify-center items-center text-center">
				<div class="">
					<div class="hidden lg:block">
						<img class="w-24 lg:w-64 absolute -left-3 lg:-left-10 opacity-70" src="<?= base_url('assets/ilustrations/tema1/sambutan_flower1.png') ?>" alt="">
					</div>
				</div>
				<div class="text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-slate-900">
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000">
						<img src="<?= base_url('assets/icons/tema1/sambutan_bismillah.svg') ?>" class="mx-auto mb-4 md:mb-7 w-[160px] 2xs:w-[180px] 1xs:w-[210px] md:w-[260px] lg:w-[250px]" alt="">
					</div>
					<h1 class=" mb-5 md:mb-7 opacity-95 font-MontserratBold text-base-md 1xs:text-md md:text-3xl lg:text-xl text-black" data-aos="zoom-in" data-aos-duration="1000">
						Assalamu’alaikum warahmatullahi wabarakatuh
					</h1>
					<p class="text-justify lg:text-center" data-aos="zoom-in" data-aos-duration="1000">
						Maha Suci Allah SWT yang telah menciptakan Mahluknya berpasang-pasangan, ya Alloh semoga ridho-mu tercurah mengiringi pernikahan putra-putri kami :
					</p>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-RadicalsDemo tracking-widest text-2xl 2xs:text-3xl sm:text-4xl md:text-[55px] lg:text-4xl text-tema1-pink" data-aos="zoom-in" data-aos-duration="1000">
						<p class=""><?= $invitation->groom_name ?></p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/<?= $invitation->groom_ig ?>" class="mx-auto my-3 md:my-5 lg:my-3 opacity-70 ho90r:bg-pink-300 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url('assets/icons/tema1/sambutan_insta.svg') ?>" alt="">
						</a>
					</div>
					<p class="font-MontserratBold" data-aos="zoom-in" data-aos-duration="1000">
						Putra <?= $invitation->groom_son ?> Bpk. <?= $invitation->groom_father ?> & Ibu <?= $invitation->groom_mother ?>
					</p>
					<p class="font-MontserratBold opacity-80 mt-5 md:mt-8 text-sm 2xs:text-base-md md:text-[30px] lg:text-lg " data-aos="zoom-in" data-aos-duration="1000">dengan</p>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-RadicalsDemo tracking-widest text-2xl 2xs:text-3xl sm:text-4xl md:text-[55px] lg:text-4xl text-tema1-pink" data-aos="zoom-in" data-aos-duration="1000">
						<p class=""><?= $invitation->bride_name ?></p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/<?= $invitation->bride_ig ?>" class="mx-auto my-3 md lg:my-3:my-8 opacity-90 hover:bg-pink-300 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url('assets/icons/tema1/sambutan_insta.svg') ?>" alt="">
						</a>
					</div>
					<p class="font-MontserratBold" data-aos="zoom-in" data-aos-duration="1000">
						Putri <?= $invitation->bride_daughter; ?> Bpk. <?= $invitation->bride_father ?> & Ibu <?= $invitation->bride_mother ?>
					</p>
					<p class="mt-5 md:mt-8" data-aos="zoom-in" data-aos-duration="1000">
						Untuk Melaksanakan Sunah Rosul-mu dalam membentuk Keluarga Sakinah, Mawadah dan Warohmah
					</p>
				</div>
				<div class="">
					<div class=""><img class="hidden lg:block w-24 lg:w-64 absolute -right-3 lg:-right-10 opacity-70" src="<?= base_url('assets/ilustrations/tema1/sambutan_flower2.png') ?>" alt=""></div>
				</div>
			</div>
		</section>
		<!-- Sambutan End -->

		<div class="cover-shape -mt-10">
			<svg xmlns="http://www.w3.org/2000/svg" class="bg-[#ebeeee]" viewBox="0 20 1440 320">
				<path fill="#ddd6fe" fill-opacity="1" d="M0,64L6.2,96C12.3,128,25,192,37,213.3C49.2,235,62,213,74,218.7C86.2,224,98,256,111,272C123.1,288,135,288,148,272C160,256,172,224,185,186.7C196.9,149,209,107,222,85.3C233.8,64,246,64,258,74.7C270.8,85,283,107,295,133.3C307.7,160,320,192,332,218.7C344.6,245,357,267,369,266.7C381.5,267,394,245,406,224C418.5,203,431,181,443,181.3C455.4,181,468,203,480,208C492.3,213,505,203,517,186.7C529.2,171,542,149,554,154.7C566.2,160,578,192,591,192C603.1,192,615,160,628,133.3C640,107,652,85,665,101.3C676.9,117,689,171,702,197.3C713.8,224,726,224,738,240C750.8,256,763,288,775,293.3C787.7,299,800,277,812,277.3C824.6,277,837,299,849,304C861.5,309,874,299,886,261.3C898.5,224,911,160,923,160C935.4,160,948,224,960,218.7C972.3,213,985,139,997,144C1009.2,149,1022,235,1034,272C1046.2,309,1058,299,1071,293.3C1083.1,288,1095,288,1108,277.3C1120,267,1132,245,1145,213.3C1156.9,181,1169,139,1182,117.3C1193.8,96,1206,96,1218,85.3C1230.8,75,1243,53,1255,85.3C1267.7,117,1280,203,1292,208C1304.6,213,1317,139,1329,112C1341.5,85,1354,107,1366,133.3C1378.5,160,1391,192,1403,202.7C1415.4,213,1428,203,1434,197.3L1440,192L1440,320L1433.8,320C1427.7,320,1415,320,1403,320C1390.8,320,1378,320,1366,320C1353.8,320,1342,320,1329,320C1316.9,320,1305,320,1292,320C1280,320,1268,320,1255,320C1243.1,320,1231,320,1218,320C1206.2,320,1194,320,1182,320C1169.2,320,1157,320,1145,320C1132.3,320,1120,320,1108,320C1095.4,320,1083,320,1071,320C1058.5,320,1046,320,1034,320C1021.5,320,1009,320,997,320C984.6,320,972,320,960,320C947.7,320,935,320,923,320C910.8,320,898,320,886,320C873.8,320,862,320,849,320C836.9,320,825,320,812,320C800,320,788,320,775,320C763.1,320,751,320,738,320C726.2,320,714,320,702,320C689.2,320,677,320,665,320C652.3,320,640,320,628,320C615.4,320,603,320,591,320C578.5,320,566,320,554,320C541.5,320,529,320,517,320C504.6,320,492,320,480,320C467.7,320,455,320,443,320C430.8,320,418,320,406,320C393.8,320,382,320,369,320C356.9,320,345,320,332,320C320,320,308,320,295,320C283.1,320,271,320,258,320C246.2,320,234,320,222,320C209.2,320,197,320,185,320C172.3,320,160,320,148,320C135.4,320,123,320,111,320C98.5,320,86,320,74,320C61.5,320,49,320,37,320C24.6,320,12,320,6,320L0,320Z"></path>
			</svg>
		</div>

		<!-- Resepsi -->
		<section class="-mt-5 bg-gradient-to-t from-violet-200 via-slate-100 to-violet-200 px-6 1xs:px-16 md:px-24 lg:px-8 text-center lg:flex" id="tanggalResepsi">
			<div class="lg:mx-auto">
				<div class="pt-8 lg:pt-28" id="objekResepsi">
					<!-- Flower Top -->
					<div class="hidden lg:block">
						<img class="-mt-32 absolute w-14 md:w-20 lg:w-40 left-14" src="<?= base_url('assets/ilustrations/tema1/resepsi_flower6.svg') ?>" />
						<img class="-mt-32 absolute w-14 md:w-20 lg:w-40 right-14 rotate-90" src="<?= base_url('assets/ilustrations/tema1/resepsi_flower6.svg') ?>" />
					</div>
					<!-- Flower Top -->

					<p class="mb-3 md:mb-5 lg:-mt-10 font-MontserratBold text-base-md md:text-[28px] lg:text-lg text-slate-900/90" data-aos="zoom-in" data-aos-duration="1000">Insya Allah Akan Dilaksanakan Pada :</p>
					<div class="lg:flex lg:gap-x-6">
						<!-- Card Tasyakuran -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema1-teal/40 shadow-sm shadow-tema1-teal/80 rounded-2xl lg:rounded-3xl bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100/80 via-[#ebeeee] to-[#f4f5f5]" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
							<img class=" absolute w-14 md:w-20 lg:w-14 opacity-80 right-5 1xs:right-16 md:right-24 lg:left-[30vw]" src="<?= base_url('assets/ilustrations/tema1/resepsi_flower2.svg') ?>" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-slate-900/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">Tasyakuran</h1>
								<p class="mb-1 text-slate-800">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-slate-800">10.00 WIB - Selesai</p>
								<p class=" text-slate-800 mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01 No.213 RT.02 RW.01</p>
								<p class="text-slate-700 text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman Mempelai Pria)</p>
								<a target="_blank" href="https://goo.gl/maps/HyxMYiBshiDf29f27">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema1-pink/60 font-semibold hover:bg-tema1-pink/100 transition ease-in-out duration-500 text-white">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons/tema1/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Tasyakuran End -->
						<!-- Card Akad -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema1-teal/40 shadow-sm shadow-tema1-teal/80 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100/80 via-[#ebeeee] to-[#f4f5f5]" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
							<img class=" absolute w-12 md:w-[70px] lg:w-[44px] opacity-80 right-4 1xs:right-14 md:right-[88px] lg:right-[36vw]" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower3.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-slate-900/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">Akad</h1>
								<p class="mb-1 text-slate-800">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-slate-800">10.00 WIB - Selesai</p>
								<p class=" text-slate-800 mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01</p>
								<p class="text-slate-700 text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman Mempelai Pria)</p>
								<a target="_blank" href="https://goo.gl/maps/HyxMYiBshiDf29f27">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema1-pink/60 font-semibold hover:bg-tema1-pink/100 transition ease-in-out duration-500 text-white">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons/tema1/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Akad End-->
						<!-- Card Resepsi -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema1-teal/40 shadow-sm shadow-tema1-teal/80 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100/80 via-[#ebeeee] to-[#f4f5f5]" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
							<img class=" absolute w-14 md:w-20 lg:w-14 opacity-80 right-6 1xs:right-16 md:right-24 lg:right-[7.5vw]" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower1.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3 font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-slate-900/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">Resepsi</h1>
								<p class="mb-1 text-slate-800">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-slate-800">10.00 WIB - Selesai</p>
								<p class=" text-slate-800 mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01</p>
								<p class="text-slate-700 text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman Mempelai Pria)</p>
								<a target="_blank" href="https://goo.gl/maps/HyxMYiBshiDf29f27" class="self-end">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema1-pink/60 font-semibold hover:bg-tema1-pink/100 transition ease-in-out duration-500 text-white">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons//tema1/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Resepsi End-->
					</div>
					<p class="mt-3 md:mt-5 lg:mt-10 text-base-xs 2xs:text-base-sm md:text-[28px]  lg:text-base" data-aos="zoom-in" data-aos-duration="1000">Atas kehadiran serta doa restunya kami ucapkan terimakasih</p>
					<h1 class="font-MontserratBold mt-3 opacity-80 text-base-xs 2xs:text-base-sm md:text-[28px]  lg:text-base" data-aos="zoom-in" data-aos-duration="1000">Wassalamu’alaikum warahmatullahi wabarakatuh</h1>
				</div>
				<!-- Flower Bot -->
				<div class="hidden lg:block">
					<img class="-mt-28 absolute w-14 md:w-20 lg:w-40 left-14 rotate-90" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower7.svg" />
					<img class="-mt-28 absolute w-14 md:w-20 lg:w-40 right-14" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower7.svg" />
				</div>
				<!-- Flower Bot End-->
			</div>
		</section>
		<!-- Resepsi -->

		<div class="cover-shape -mt-5 lg:-mt-10">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 20 1440 320" class="bg-violet-200">
				<path fill="#ebeeee" fill-opacity="1" d="M0,128L16,112C32,96,64,64,96,64C128,64,160,96,192,112C224,128,256,128,288,122.7C320,117,352,107,384,128C416,149,448,203,480,208C512,213,544,171,576,154.7C608,139,640,149,672,154.7C704,160,736,160,768,170.7C800,181,832,203,864,202.7C896,203,928,181,960,165.3C992,149,1024,139,1056,144C1088,149,1120,171,1152,176C1184,181,1216,171,1248,144C1280,117,1312,75,1344,48C1376,21,1408,11,1424,5.3L1440,0L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
			</svg>
		</div>


		<!-- Pesan Bahagia -->
		<section class="bg-[#ebeeee] -mt-6 lg:-mt-20 lg:pb-12" id="pesanBahagia">
			<div class="relative my-4 lg:my-12 pt-8 lg:pt-0 lg:pb-8" data-aos="zoom-in" data-aos-duration="1000">
				<img class="mx-auto w-[140px] h-[16px] lg:h-[20px] lg:w-[170px]" src="<?= base_url() ?>assets/icons/tema1/bg_title_foto.png " />
				<h1 class="absolute font-RadicalsDemo tracking-widest text-xl 2xs:text-2xl 1xs:text-3xl sm:text-4xl md:text-5xl lg:text-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-80">
					Pesan Bahagia
				</h1>
			</div>
			<div class="xl:flex lg:border lg:border-tema1-teal/40 lg:shadow-sm lg:shadow-tema1-teal/80 rounded-2xl xl:rounded-3xl xl:py-5 mx-6 1xs:mx-16 md:mx-24 lg:pl-8 lg:mb-8" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500">
				<div class="xl:w-[70%] text-left mt-7 lg:mt-1">
					<div class="">
						<div class="xl:hidden"></div>
						<div class="">
							<div class="">
								<div class="">
									<div class="">
										<label for="pesan" class="opacity-70 font-semibold tracking-wide cursor-pointer text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">Pesan</label>
										<div class="mt-2">
											<textarea class="form-textarea w-full rounded-md bg-white bg-opacity-30 border-tema1-teal/50 border-r-tema1-teal shadow-sm shadow-tema1-teal/40 hover:shadow-tema1-teal/100 leading-tight focus:ring-0 focus:border focus:border-tema1-teal/80 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" name="pesan" id="pesan" placeholder="Masukan Pesan"></textarea>
										</div>
									</div>
									<div class="mt-3 md:mt-8">
										<label for="konfirmasi" class="opacity-70 font-semibold tracking-wide text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">Konfirmasi Kehadiran</label>
										<div class="flex">
											<div class="mt-2 mr-3 md:mr-5">
												<input type="radio" value="2" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema1-teal/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-green-500 checked:hover:bg-green-600 checked:focus:bg-green-600 cursor-pointer" name="konfirmasiHadir" id="hadir">
												<label class="lg:ml-1 text-slate-700 cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="hadir">Hadir</label>
											</div>
											<div class="mt-2 mr-3 md:mr-5">
												<input type="radio" value="1" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema1-teal/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-400 checked:bg-red-400 checked:hover:bg-red-500 checked:focus:bg-red-500 cursor-pointer" name="konfirmasiHadir" id="tidakHadir">
												<label class="lg:ml-1 text-slate-700 cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="tidakHadir">Tidak Hadir</label>
											</div>
											<div class="mt-2">
												<input type="radio" value="0" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema1-teal/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-yellow-500 checked:hover:bg-yellow-600 checked:focus:bg-yellow-600 cursor-pointer" name="konfirmasiHadir" id="belumPasti">
												<label class="lg:ml-1 text-slate-700 cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="belumPasti">Belum Pasti</label>
											</div>
										</div>
									</div>
									<div class="mt-3 md:mt-8">
										<button type="submit" class="px-4 py-1 md:px-8 md:py-3 lg:py-1.5 lg:px-6 bg-tema1-pink/60 hover:bg-tema1-pink/100  text-white rounded-lg hover:bg-opacity-70 transition-all duration-300 text-sm 2xs:text-base-sm 1xs:text-base md:text-[27px] lg:text-base lg:leading-6 font-semibold">Kirim</button>
									</div>
								</div>
								<div class="">
									<div>
										<p class="opacity-70 font-semibold tracking-wide mb-3 md:mb-5 mt-4 md:mt-8 text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">Total Pesan : <span>fbuhbfb</span></p>
									</div>
									<div class="overflow-y-scroll h-[350px] xl:h-[250px] border border-tema1-teal/60 cursor-all-scroll rounded-md bg-white/30 shadow-sm lg:shadow-md shadow-tema1-teal/50 border-r-tema1-teal mb-5">
										<div class="mx-3 mb-3">
											<div class="flex mt-3">
												<div class="mr-3">
													<div class="flex w-9 h-9 md:w-12 md:h-12 lg:w-10 lg:h-10 font-semibold border border-slate-400 text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6 text-center rounded-full items-center justify-center text-green-500">T</div>
												</div>
												<div>
													<div>
														<p class="font-semibold opacity-80 tracking-wide text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6">Tegar Kusuma</p>
														<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[22px] lg:text-base-sm lg:leading-6 text-slate-500 mb-1 md:mt-2 lg:mt-0">
															22 Januari 2022
														</p>
														<p class="tracking-wide text-slate-800 text-justify mr-2 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[25px] lg:text-base-sm lg:leading-6">Selamat Menempuh Hidup Baru</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class=" xl:w-[30%] h-full xl:mt-10">
					<div class="mx-5 flex justify-center">
						<div class="">
							<div class="flex w-[180px] lg:w-[250px] mx-auto my-10 opacity-80">
								<div class="flex mr-5 animate-wiggleLeft">
									<img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_1.svg" class="w-60 md:w-80 mx-auto mb-4 " alt="">
								</div>
								<div class="flex mr-5">
									<img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_2.svg" class="w-32 mx-auto mb-4" alt="">
								</div>
								<div class="flex animate-wiggleRight">
									<img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_3.svg" class="w-60 md:w-80 mx-auto mb-4" alt="">
								</div>
							</div>
							<h1 class="font-KalunaScriptDemo tracking-wide text-3xl 2xs:text-4xl sm:text-5xl md:text-6xl lg:text-4xl mb-1 lg:mb-3 opacity-80 text-center ">Terimakasih</h1>
							<p class="text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[22px] lg:text-base lg:leading-6 text-center">Atas Do'a Restunya</p>
							<div class="text-center mt-8 font-RadicalsDemo tracking-widest text-3xl 2xs:text-3xl sm:text-4xl md:text-5xl lg:text-4xl text-tema1-pink">
								<p class="">Runa & Ratna</p>
							</div>
							<div class="flex my-10 opacity-80"><img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_4.svg" class="mx-auto mb-4 w-[180px] md:w-[230px] lg:w-[250px]" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Pesan Bahagia End-->

		<footer class="p-4 bg-violet-200 rounded-t-3xl shadow md:px-2 md:py-4 xl:mt-0">
			<div class="flex justify-center items-center">
				<div class="flex ml-3 text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[22px] lg:text-base">
					<div class="flex justify-center items-center w-1/2 mr-5">
						<div class="">
							<img src="<?= base_url() ?>assets/icons/app/logo_metashare.png" class="mr-3 w-[100px] md:w-36" alt="Metashare Logo">
							<p class="self-center text-[10px] text-slate-600 md:text-base-xs lg:text-sm whitespace-nowrap">Powered By Paralogy</p>
						</div>
					</div>
					<div class="flex justify-center items-center w-1/2 ml-5">
						<a target="_blank" href="https://api.whatsapp.com/send/?phone=6287899703471&text=Saya tertarik untuk bikin undangan" class="flex hover:contrast-200 hover:saturate-200 hover:text-green-400">
							<img src="<?= base_url() ?>assets/icons/tema1/wa.png" class="mr-1 h-3 2xs:h-4 md:h-6 md:mt-1 lg:h-5 lg:mt-0" alt="Whatsapp Logo">
							<span class="self-center text-green-800 whitespace-nowrap">Whatsapp</span>
						</a>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- Modal Giftcard-->
	<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modalGiftCard" tabindex="-1" aria-labelledby="modalGiftCardLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
			<div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-[#f4f4f4] bg-clip-padding rounded-md outline-none text-current">
				<!-- Notif Success Copy-->
				<div class="z-30 fixed border border-green-400 bg-green-500 text-white px-8 py-1 w-fit hidden transition ease-in-out rounded-md top-6 lg:top-10 left-1/2 -translate-x-1/2" id="divNotifSuccessCopy">
					<p id="notifSuccessCopy" class="text-center text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[22px] lg:text-base-md font-semibold"></p>
				</div>
				<!-- Notif Success Copy End-->
				<div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-tema1-teal/30 rounded-t-md">
					<h1 class="font-KalunaScriptDemo tracking-widest text-3xl 1xs:text-4xl lg:text-3xl mx-auto">
						Berikan Hadiah</h1>
				</div>
				<div class="modal-body relative p-4">
					<p class="mb-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[20px] lg:text-base-md lg:leading-6 font-normal text-slate-800 text-justify"><span class="font-semibold">
							Tanpa mengurangi rasa hormat,</span> untuk melengkapi kebahagian pengantin, anda dapat memberikan tanda kasih dengan melalui transfer ke rekening berikut :
					</p>
					<!-- content card bca-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bca.svg" alt="bca"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noBca">1342179716</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBca'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bca end-->
					<!-- content card bri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bri.svg" alt="bri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noBri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bri end-->
					<!-- content card mandiri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_mandiri.svg" alt="mandiri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noMandiri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noMandiri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card mandiri end-->
					<!-- content card bsi-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bsi.svg" alt="bsi"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noBsi">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBsi'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bsi end-->
					<!-- content card bni-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bni.svg" alt="bni"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noBni">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBni'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card end bni-->
					<!-- content card cimbniaga-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_cimbniaga.svg" alt="cimbniaga"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noCimbniaga">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noCimbniaga'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card cimbniagaend-->
					<!-- content card dana-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema1-teal/10 border border-tema1-teal/40">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_dana.svg" alt="dana"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-slate-600" id="noDana">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noDana'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-slate-600">a.n. <span class="text-slate-900">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema1-teal/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url() ?>assets/images/example-barcode.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema1-teal/60 text-tema1-teal mx-auto hover:bg-tema1-teal/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card end dana-->
				</div>
				<div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-tema1-teal/30 rounded-b-md">
					<button type="button" class="px-4 py-1 md:px-8 md:py-3 lg:py-1.5 lg:px-6 bg-tema1-pink/70 hover:bg-tema1-pink/100  text-white rounded-lg hover:bg-opacity-70 transition-all duration-300 text-sm 2xs:text-base-sm 1xs:text-base md:text-[27px] lg:text-base lg:leading-6 font-semibold" data-bs-dismiss="modal">
						X
					</button>
				</div>
			</div>
		</div>
	</div>






	<script>
		function showMainPage() {

			let sampul = document.getElementById("sampul")
			let mainPage = document.getElementById("mainPage")

			mainPage.classList.remove("hidden")
			// Show Nav when open button
			document.getElementById("floatingButton").classList.remove("hidden")
			//  Hidden Btn Open
			document.getElementById("btnOpen").classList.add("hidden")
			// Play Song
			song.play();

		}

		// Play Song 
		const song = document.getElementById("song");
		const iconMusic = document.getElementById("iconMusic");

		iconMusic.onclick = function() {
			if (song.paused) {
				song.play();
				iconMusic.src = "<?= base_url('assets/icons/tema1/floating_music_play.svg') ?>"
				iconMusic.classList.add('animate-spin-slow')
			} else {
				song.pause();
				iconMusic.src = "<?= base_url('assets/icons/tema1/floating_music_paused.svg') ?>"
				iconMusic.classList.remove('animate-spin-slow')
			}
		}
		// Play Song 

		// Copy Text>
		function CopyToClipboard(id) {
			var r = document.createRange();
			r.selectNode(document.getElementById(id));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(r);
			document.execCommand('copy');
			window.getSelection().removeAllRanges();

			// notifSuccessCopy
			document.getElementById('notifSuccessCopy').innerHTML = "✓ Berhasil disalin"
			document.getElementById("divNotifSuccessCopy").classList.remove("hidden");
			setTimeout(function() {
				document.getElementById("divNotifSuccessCopy").classList.add("hidden");
			}, 1000);

		}

		// Animate On Scroll

		AOS.init();
	</script>


</body>

</html>
