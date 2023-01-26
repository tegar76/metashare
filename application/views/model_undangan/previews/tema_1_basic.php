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


	<title>Wedding <?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></title>

	<style>
		html,
		body {
			overflow-x: hidden;
		}

		html {
			scroll-behavior: smooth;
		}

		.open-main-page-transition {
			transform: translate3d(0, -100%, 0);
			opacity: 0;
			transition: transform 1s ease-in, opacity 1s ease-in;
			z-index: 0;
		}

		.magnify-modal {
			background-color: #dce1de;
			border-radius: 12px;
		}

		.magnify-modal .magnify-footer {
			color: #ef6351;
		}

		.magnify-modal .magnify-header .magnify-title {
			color: #ef6351;
			font-weight: bolder;
			font-family: font-MontserratBold;
		}

		.magnify-modal .magnify-header .magnify-button {
			border-radius: 4px;
			margin-top: 3px;
		}

		.magnify-modal .magnify-header .magnify-button.magnify-button-close {
			background-color: #ef6351;
			margin-left: 8px;
		}

		.magnify-modal .magnify-header .magnify-button.magnify-button-maximize {
			background-color: #618b95ff;
		}

		.magnify-modal .magnify-stage {
			background-color: #dce1de;
		}

		@font-face {
			font-family: "Montserrat";
			src: url("../assets/fonts/MontserratAlternatesLight.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "MontserratBold";
			src: url("../assets/fonts/MontserratAlternatesRegular.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "RadicalsDemo";
			src: url("../assets/fonts/RadicalsDemo.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "KalunaScriptDemo";
			src: url("../assets/fonts/KalunaScriptDemo.otf");
			font-display: block;
		}

		@font-face {
			font-family: "ShareDong";
			src: url("../assets/fonts/ShareDong.ttf");
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

	<!-- Demo Watermark -->
	<div class="">
		<div class="fixed z-50 top-1 right-1 lg:top-2 lg:right-2">
			<img class="w-20 lg:w-28" src="<?= base_url() ?>assets/icons/app/watermark_demo.svg" alt="">
		</div>
	</div>
	<!-- Demo Watermark End -->

	<!-- Nav -->
	<nav id="bottomNavigation" class="hidden fixed inset-x-0 bottom-4 z-20">
		<div id="tabs" class="tabs bg-[#fffdf7] border border-sky-800/30 shadow-lg flex rounded-3xl w-[70%] 2xs:w-[50%] lg:w-[20%] mx-auto">
			<a href="#cover" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-200 hover:saturate-200" style="stroke: #ef6351; stroke-width:2px;">
				<div class="nav-cover flex">
					<svg class="mx-auto my-auto w-[17px] hw-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.6" y="0.6" width="23.8" height="26.8" rx="3.4" />
						<path d="M12.7654 21.3098C12.534 21.5538 12.1474 21.5601 11.9083 21.3237L8.66659 18.1198C7.6668 16.8102 7.50908 15.5626 8.24591 14.3687C8.27026 14.3292 8.30036 14.2925 8.3344 14.261C9.53187 13.1533 11.1648 13.3009 12.2459 14.2344C12.5668 14.5116 13.0908 14.5143 13.3977 14.2216C14.4302 13.2365 15.6202 13.3055 16.8132 14.244C16.8393 14.2645 16.8645 14.2884 16.8861 14.3135C18.0352 15.6494 16.7701 16.8236 15.9198 17.9833L12.7654 21.3098Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
						<path d="M9.12771 0.378296L9.12769 6.68632C9.12769 7.27696 9.89128 7.51222 10.2237 7.02398L11.6849 4.87757C12.0173 4.38933 12.7809 4.62458 12.7809 5.21522V8.03382C12.7809 8.3652 13.0495 8.63382 13.3809 8.63382H15.2721C15.6035 8.63382 15.8721 8.3652 15.8721 8.03382V0.378296" />
					</svg>

				</div>
			</a>
			<a href="#sambutan" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-200 hover:saturate-200" style="stroke: #1A262D;">
				<div class="flex">
					<svg class="mx-auto my-auto w-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.025 22.3245C15.025 25.5949 11.8878 28.4 7.8125 28.4C3.73716 28.4 0.6 25.5949 0.6 22.3245C0.6 19.0541 3.73716 16.249 7.8125 16.249C11.8878 16.249 15.025 19.0541 15.025 22.3245Z" />
						<path d="M24.4 18.7642C24.4 22.0346 21.2628 24.8397 17.1875 24.8397C13.1122 24.8397 9.975 22.0346 9.975 18.7642C9.975 15.4938 13.1122 12.6887 17.1875 12.6887C21.2628 12.6887 24.4 15.4938 24.4 18.7642Z" />
						<path d="M13.4022 8.96877C13.1709 9.21182 12.7853 9.21807 12.5464 8.98264L9.23045 5.71585C8.21038 4.38396 8.0497 3.11516 8.80197 1.90095C8.82641 1.86151 8.8566 1.82484 8.8907 1.79337C10.1175 0.661251 11.7928 0.817359 12.8956 1.77787C13.2148 2.05588 13.7373 2.05873 14.0425 1.76541C15.0991 0.750039 16.3184 0.816915 17.5407 1.77573C17.5668 1.79619 17.5921 1.82007 17.6138 1.84516C18.7869 3.20366 17.4962 4.3977 16.6287 5.57707L13.4022 8.96877Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
					</svg>
				</div>
			</a>
			<a href="#tanggalResepsi" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-200 hover:saturate-200" style="stroke: #1A262D;">
				<div class="flex">
					<svg class="mx-auto my-auto w-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4 2.32821H21C22.8778 2.32821 24.4 3.85044 24.4 5.72821V24C24.4 25.8777 22.8778 27.4 21 27.4H4C2.12223 27.4 0.6 25.8777 0.6 24V5.72821C0.6 3.85045 2.12223 2.32821 4 2.32821Z" />
						<path d="M13.0261 21.1636C12.7957 21.4014 12.4162 21.4075 12.1782 21.1774L8.96571 18.0713C7.97565 16.8026 7.81906 15.5939 8.54784 14.4373C8.57266 14.3979 8.60325 14.3614 8.63779 14.3302C9.82417 13.2576 11.4414 13.4009 12.5121 14.3057C12.8321 14.576 13.3468 14.5787 13.653 14.293C14.6759 13.3384 15.8546 13.4051 17.0363 14.3142C17.0626 14.3344 17.088 14.358 17.1099 14.3829C18.2472 15.6773 16.9941 16.8151 16.1518 17.939L13.0261 21.1636Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
						<line x1="1.10278" y1="8.73301" x2="23.965" y2="8.73301" />
						<line x1="6.48232" y1="0.6" x2="6.48232" y2="4.49094" stroke-linecap="round" />
						<line x1="18.2472" y1="0.6" x2="18.2472" y2="4.49094" stroke-linecap="round" />
					</svg>
				</div>
			</a>
			<a href="#galeriFoto" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-200 hover:saturate-200" style="stroke: #1A262D;">
				<div class="flex">
					<svg class="mx-auto my-auto w-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.7361 4.51132L15.7137 1.71117C15.8557 1.30443 16.2417 1.03436 16.6725 1.03457C17.7006 1.03505 19.1181 1.01744 20.24 1.00637C20.6746 1.00209 21.0615 1.28019 21.1971 1.69321L22.1321 4.54132" />
						<path d="M20.0021 29H7.16C5.14588 29 4.13882 29 3.35394 28.6456C2.4662 28.2447 1.75522 27.5338 1.35439 26.646C1 25.8611 1 24.8541 1 22.84V10.8752C1 8.86109 1 7.85403 1.35439 7.06915C1.75522 6.18141 2.4662 5.47043 3.35394 5.0696C4.13882 4.71521 5.14588 4.71521 7.16 4.71521H13.5H19.84C21.8541 4.71521 22.8612 4.71521 23.6461 5.0696C24.5338 5.47043 25.2448 6.18141 25.6456 7.06915C26 7.85403 26 8.86109 26 10.8752V22.9308C26 24.8395 26 25.7938 25.6791 26.5459C25.2807 27.4796 24.5421 28.2269 23.6132 28.6364C22.8649 28.9661 21.9106 28.9774 20.0021 29V29Z" stroke-miterlimit="9.3" stroke-linecap="round" stroke-linejoin="bevel" />
						<path d="M7 5.0777L7 26.4682L7 28.6375" />
						<path d="M16.0899 22.2677C15.8555 22.6023 15.3625 22.6099 15.1179 22.2826L12.8752 19.2815C12.1299 17.9599 12.0128 16.7009 12.5629 15.4962C12.5803 15.458 12.6028 15.4212 12.629 15.3884C13.4221 14.3965 14.4712 14.4046 15.2598 15.0804C15.6349 15.4019 16.3043 15.3975 16.6616 15.0564C17.3655 14.3845 18.1514 14.5318 18.9392 15.3685C18.9613 15.3919 18.982 15.4184 18.9992 15.4456C19.8522 16.7917 18.9108 17.975 18.2778 19.1439L16.0899 22.2677Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
						<path d="M5.6665 4.35282V3.54053C5.6665 2.98824 6.11422 2.54053 6.6665 2.54053H9.6665C10.2188 2.54053 10.6665 2.98824 10.6665 3.54053V4.35282" />
						<path d="M21.6089 17.6939C21.6089 21.6347 18.8706 24.6981 15.6431 24.6981C12.4155 24.6981 9.67725 21.6347 9.67725 17.6939C9.67725 13.7531 12.4155 10.6897 15.6431 10.6897C18.8706 10.6897 21.6089 13.7531 21.6089 17.6939Z" />
					</svg>
				</div>
			</a>
			<a href="#pesanBahagia" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-200 hover:saturate-200" style="stroke: #1A262D;">
				<div class="flex">
					<svg class="mx-auto my-auto w-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 5V20.9857C1 22.2786 2.04815 23.3268 3.34111 23.3268C4.83237 23.3268 5.94353 24.7025 5.62984 26.1604L5.41176 27.1739C5.24226 27.6364 5.80899 28.0142 6.17072 27.6799L10.3508 23.8162C10.6912 23.5015 11.1377 23.3268 11.6013 23.3268H22C24.2091 23.3268 26 21.5359 26 19.3268V5C26 2.79086 24.2091 1 22 1H5C2.79086 1 1 2.79086 1 5Z" />
						<path d="M13.4101 19.5544C13.1777 19.8067 12.7814 19.8132 12.5409 19.5685L9.52056 16.4955C8.57975 15.2269 8.43089 14.0184 9.12331 12.8618C9.14699 12.8222 9.1764 12.7853 9.20981 12.7536C10.3194 11.6988 11.8253 11.8212 12.8424 12.6878C13.1704 12.9673 13.7077 12.9689 14.021 12.673C14.9819 11.7653 16.084 11.8436 17.189 12.7374C17.2148 12.7583 17.2397 12.7825 17.261 12.808C18.3405 14.1021 17.15 15.2396 16.3498 16.3632L13.4101 19.5544Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
						<line x1="5.63965" y1="8.82056" x2="18.5009" y2="8.82056" stroke-linecap="round" />
						<line x1="5.63965" y1="6.48639" x2="16.3684" y2="6.48639" stroke-linecap="round" />
						<line x1="5.63965" y1="4.15283" x2="13.1696" y2="4.15283" stroke-linecap="round" />
					</svg>

				</div>
			</a>
		</div>
	</nav>
	<!-- Nav End -->

	<!-- floating button -->
	<div id="floatingButton" class="hidden fixed right-5 bottom-28 z-10 md:right-12 w-10 md:-16 lg:w-12">
		<div class="justify-between w-10 md:w-16 lg:w-12 mx-auto lg:py-3 block lg:mx-0 lg:ml-5">
			<button class="w-full h-full bg-amber-50 shadow-lg rounded-full border border-teal-600/80 hover:bg-amber-100 focus:bg-amber-100 justify-center inline-block text-center pt-2 pb-2 mb-3" data-bs-toggle="modal" data-bs-target="#modalGiftCard">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px]" src="<?= base_url() ?>assets/icons/tema1/floating_gift.svg" alt="">
				</div>
			</button>
			<button class="w-full bg-amber-50 shadow-lg border border-tema1-pink/80 rounded-full hover:bg-amber-100 focus:bg-amber-100 justify-center inline-block text-center pt-2 pb-2 mb-2">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px] animate-spin-slow" src="<?= base_url() ?>assets/icons/tema1/floating_music_play.svg" alt="" id="iconMusic">
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
		<img src="<?= base_url('storage/invitations/uploads/' . $invitation->cover_image_1) ?>" class="absolute opacity-80 w-14 2xs:w-20 sm:w-40">

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
				<h1 class="mt-8 2xs:mt-12 sm:mt-14 lg:mt-16 font-KalunaScriptDemo text-3xl 2xs:text-4xl sm:text-6xl lg:text-4xl text-tema1-dark-green">
					The Wedding Of
				</h1>
				<div>
					<h1 class="mt-8 sm:mt-12 lg:mt-8 font-RadicalsDemo text-3xl 2xs:text-4xl sm:text-5xl lg:text-4xl text-tema1-pink tracking-widest">
						<?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?>
					</h1>
					<p class="mt-1 sm:mt-3 text-lg 2xs:text-xl sm:text-3xl lg:text-xl text-tema1-teal font-ShareDong">
						<?= $akadDate['tanggal'] ?><span class="font-normal text-base-sm 2xs:text-base sm:text-xl lg:text-base-md"><?= $akadDate['bulan'] ?></span>
						<span><?= $akadDate['tahun'] ?></span>
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
					<a href="#home" onclick="showMainPage()" id="btnOpen" role="button" class="font-MontserratBold font-medium text-white text-base-xs 2xs:text-sm sm:text-xl lg:text-base-xs w-fit bg-tema1-teal hover:bg-teal-700 rounded-xl sm:rounded-2xl lg:rounded-xl mx-auto transition delay-150 animate-bounce flex justify-center mt-8 mb-8 sm:mt-16 lg:mt-8 px-8 lg:px-8 py-1.5 2xs:py-2.5 sm:py-4 lg:py-1" data-role="link">
						<div class="flex"> <img src="<?= base_url() ?>assets/icons/tema1/cover_icon_unlock.svg" alt="" class="mr-3 w-3">
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


		<img src="<?= base_url() ?>assets/ilustrations/tema1/sampul_ils3.png" class="absolute right-0 opacity-80 -mt-32 sm:-mt-44 lg:bottom-0 w-14 2xs:w-20 sm:w-40">
	</div>
	<!-- Sampul End-->

	<div class="mainPage main-page-transition hidden" id="mainPage">
		<!-- Cover -->
		<section class="absolute -z-10 top-0" id="cover">
			<div class="lg:hidden absolute inset-0  bg-slate-900 bg-opacity-60"></div>
			<div class="w-screen h-screen bg-cover bg-center bg-[url('<?= base_url('storage/invitations/uploads/' . $invitation->cover_image_2) ?>')] lg:bg-none lg:bg-violet-200 text-center">
				<div class="flex justify-center ml-5">
					<div class="lg:w-[50vw] lg:mr-5 lg:h-screen lg:relative absolute bottom-[6vh]" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="500">
						<div class="flex">
							<div class="hidden lg:block">
								<img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower1.png" alt="" class="w-40">
							</div>

							<div class="items-center justify-center bg-pink-100/10 lg:bg-tema1-pink/5 border border-white/50 lg:border-tema1-pink/70 w-44 h-36 2xs:w-56 2xs:h-48 md:w-80 md:h-64 lg:w-64 lg:h-52 rounded-lg text-center mx-auto mt-[21vh] shadow-tema1-pink/80 shadow-sm">
								<div class="bg-white lg:bg-tema1-teal/5  bg-opacity-10 border border-white/20 lg:border-tema1-teal/70 w-full h-full my-auto rounded-lg text-center mx-auto -rotate-12 font-RadicalsDemo text-3xl 2xs:text-5xl sm:text-5xl md:text-[68px] lg:text-5xl text-white/70 lg:text-tema1-pink tracking-widest shadow-[#1774f554] shadow-sm">
									<div class="mt-4 rotate-12 tracking-widest text-shadow-tema1 lg:text-shadow-none">
										<p class="mb-2"><?= $invitation->groom_nickname ?></p>
										<p class="mb-2">&</p>
										<p class="mb-2"><?= $invitation->bride_nickname ?></p>
									</div>
								</div>
							</div>
							<div class="hidden lg:block">
								<img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower2.png" alt="" class="w-40">
							</div>
						</div>
						<div class="flex">
							<div class="hidden lg:block absolute bottom-0">
								<img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower5.png" alt="" class="w-20">
							</div>

							<div class="border border-white/20 w-fit mx-auto px-8 py-2 md:pb-8 lg:py-5 rounded-xl lg:rounded-3xl mt-14 md:mt-24 lg:mt-16 text-pink-100/80 bg-pink-50/10 lg:text-tema1-teal lg:border-tema1-teal/70 lg:bg-tema1-pink/5 font-light font-ShareDong">
								<div class=" lg:saturate-150">
									<h1 class="text-3xl 2xs:text-4xl sm:text-5xl md:text-6xl lg:text-[40px]" id="days">00</h1>
									<p class="md:mt-1 text-base-xs 2xs:text-base-md md:text-[22px] lg:text-md">Hari</p>
								</div>
								<div class="flex gap-x-4 mt-2 lg:saturate-200">
									<div>
										<h1 class="text-xl 2xs:text-3xl sm:text-4xl md:text-5xl lg:text-3xl" id="hours">00</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs">Jam</p>
									</div>
									<div class="md:text-2xl">|</div>
									<div>
										<h1 class="text-xl 2xs:text-3xl sm:text-4xl md:text-5xl lg:text-3xl" id="minutes">00</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs">Menit</p>
									</div>
									<div class="md:text-2xl">|</div>
									<div>
										<h1 class="text-xl 2xs:text-3xl sm:text-4xl md:text-5xl lg:text-3xl" id="seconds">00</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs">Detik</p>
									</div>
								</div>
							</div>
							<div class="hidden lg:block absolute bottom-0 right-0">
								<img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower6.png" alt="" class="w-20">
							</div>
						</div>
					</div>
					<div class="hidden lg:flex ml-5 w-[50vw] justify-center items-center" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="500">
						<div> <img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower4.png" alt="" class="w-20"></div>
						<div class="shadow-md shadow-tema1-pink rounded-[40px]">
							<img src="<?= base_url('storage/invitations/uploads/' . $invitation->cover_image_2) ?>" alt="" class="w-96 my-auto border-2 border-tema1-dark-green rounded-[40px]">
						</div>
						<div> <img src="<?= base_url() ?>assets/ilustrations/tema1/cover_flower3.png" alt="" class="w-20"></div>
					</div>
				</div>
			</div>

		</section>
		<!-- End Cover -->
		<div class="cover-shape hidden lg:block -mt-6">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 20 1440 320" class="bg-violet-200">
				<path fill="#ebeeee" fill-opacity="1" d="M0,128L16,112C32,96,64,64,96,64C128,64,160,96,192,112C224,128,256,128,288,122.7C320,117,352,107,384,128C416,149,448,203,480,208C512,213,544,171,576,154.7C608,139,640,149,672,154.7C704,160,736,160,768,170.7C800,181,832,203,864,202.7C896,203,928,181,960,165.3C992,149,1024,139,1056,144C1088,149,1120,171,1152,176C1184,181,1216,171,1248,144C1280,117,1312,75,1344,48C1376,21,1408,11,1424,5.3L1440,0L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
			</svg>
		</div>

		<!-- Sambutan -->
		<section class="lg:-mt-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100 via-[#ebeeee] to-[#ebeeee] pb-8 pt-8 lg:pt-0 px-6 1xs:px-16 md:px-24 lg:px-72" id="sambutan">
			<div class="flex justify-center items-center text-center">
				<div class="">
					<div class="hidden lg:block"><img class="w-24 lg:w-64 absolute -left-3 lg:-left-10 opacity-70" src="<?= base_url() ?>assets/ilustrations/tema1/sambutan_flower1.png" alt=""></div>
				</div>
				<div class="text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-slate-900">
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000"><img src="<?= base_url() ?>assets/icons/tema1/sambutan_bismillah.svg" class="mx-auto mb-4 md:mb-7 w-[160px] 2xs:w-[180px] 1xs:w-[210px] md:w-[260px] lg:w-[250px]" alt=""></div>
					<h1 class=" mb-5 md:mb-7 opacity-95 font-MontserratBold text-base-md 1xs:text-md md:text-3xl lg:text-xl text-black" data-aos="zoom-in" data-aos-duration="1000">Assalamu’alaikum warahmatullahi wabarakatuh</h1>
					<p class="text-justify lg:text-center" data-aos="zoom-in" data-aos-duration="1000">
						Maha Suci Allah SWT yang telah menciptakan Mahluknya berpasang-pasangan, ya Alloh semoga ridho-mu tercurah mengiringi pernikahan putra-putri kami :
					</p>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-RadicalsDemo tracking-widest text-2xl 2xs:text-3xl sm:text-4xl md:text-[55px] lg:text-4xl text-tema1-pink" data-aos="zoom-in" data-aos-duration="1000">
						<p class=""><?= $invitation->groom_name ?></p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/<?= $invitation->groom_ig ?>" class="mx-auto my-3 md:my-5 lg:my-3 opacity-70 ho90r:bg-pink-300 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url() ?>assets/icons/tema1/sambutan_insta.svg" alt="">
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
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url() ?>assets/icons/tema1/sambutan_insta.svg" alt="">
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
					<div class=""><img class="hidden lg:block w-24 lg:w-64 absolute -right-3 lg:-right-10 opacity-70" src="<?= base_url() ?>assets/ilustrations/tema1/sambutan_flower2.png" alt=""></div>
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
						<img class="-mt-32 absolute w-14 md:w-20 lg:w-40 left-14" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower6.svg" />
						<img class="-mt-32 absolute w-14 md:w-20 lg:w-40 right-14 rotate-90" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower6.svg" />
					</div>
					<!-- Flower Top -->

					<p class="mb-3 md:mb-5 lg:-mt-10 font-MontserratBold text-base-md md:text-[28px] lg:text-lg text-slate-900/90" data-aos="zoom-in" data-aos-duration="1000">Insya Allah Akan Dilaksanakan Pada :</p>
					<div class="lg:flex lg:gap-x-6">
						<!-- Card Tasyakuran -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema1-teal/40 shadow-sm shadow-tema1-teal/80 rounded-2xl lg:rounded-3xl bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-100/80 via-[#ebeeee] to-[#f4f5f5]" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
							<img class=" absolute w-14 md:w-20 lg:w-14 opacity-80 right-5 1xs:right-16 md:right-24 lg:left-[30vw]" src="<?= base_url() ?>assets/ilustrations/tema1/resepsi_flower2.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-slate-900/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">Tasyakuran</h1>
								<p class="mb-1 text-slate-800"><?= $acara['tasyakur']['tanggal']; ?></p>
								<p class="mb-2 text-slate-800"><?= $acara['tasyakur']['waktu']; ?> - Selesai</p>
								<p class="text-slate-800 mb-3"><?= $acara['tasyakur']['alamat']; ?></p>
								<p class="text-slate-700 text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman Mempelai Pria)</p>
								<a target="_blank" href="<?= $acara['tasyakur']['maps']; ?>">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema1-pink/60 font-semibold hover:bg-tema1-pink/100 transition ease-in-out duration-500 text-white">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons//tema1/resepsi_loc.svg" alt="">
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
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons//tema1/resepsi_loc.svg" alt="">
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

		<div class="cover-shape -mt-32 lg:-mt-48">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#ead2fc" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,128C672,139,768,181,864,192C960,203,1056,181,1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
			</svg>
		</div>

		<!-- Pesan Bahagia -->
		<section class="bg-[#ead2fc] -mt-5 lg:-mt-20 lg:pb-12" id="pesanBahagia">
			<div class="relative my-4 lg:my-12 pt-8 lg:pt-0 lg:pb-8" data-aos="zoom-in" data-aos-duration="1000">
				<img class="mx-auto w-[140px] h-[16px] lg:h-[20px] lg:w-[170px]" src="<?= base_url() ?>assets/icons/tema1/bg_title_foto.png " />
				<h1 class="absolute font-RadicalsDemo tracking-widest text-xl 2xs:text-2xl 1xs:text-3xl sm:text-4xl md:text-5xl lg:text-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-80">
					Pesan Bahagia</h1>
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
								<div class="flex mr-5 animate-wiggleLeft"><img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_1.svg" class="w-60 md:w-80 mx-auto mb-4 " alt=""></div>
								<div class="flex mr-5"><img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_2.svg" class="w-32 mx-auto mb-4" alt=""></div>
								<div class="flex animate-wiggleRight"><img src="<?= base_url() ?>assets/ilustrations/tema1/pesan_bahagia_flower_3.svg" class="w-60 md:w-80 mx-auto mb-4" alt=""></div>
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

		<footer class="p-4 bg-slate-100 rounded-t-3xl shadow md:px-2 md:py-4 xl:mt-0">
			<div class="mb-14 md:mb-20 flex justify-center items-center">
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
		// Play Song 
		const song = document.getElementById("song");
		const iconMusic = document.getElementById("iconMusic");

		iconMusic.onclick = function() {
			if (song.paused) {
				song.play();
				iconMusic.src = "<?= base_url() ?>assets/icons/tema1/floating_music_play.svg"
				iconMusic.classList.add('animate-spin-slow')
			} else {
				song.pause();
				iconMusic.src = "<?= base_url() ?>assets/icons/tema1/floating_music_paused.svg"
				iconMusic.classList.remove('animate-spin-slow')
			}
		}
		// Play Song 

		let sampul = document.getElementById("sampul")
		let mainPage = document.getElementById("mainPage")

		function showMainPage() {

			sampul.classList.add("open-main-page-transition")
			mainPage.classList.remove("hidden")
			// Show Nav when open button
			document.getElementById("bottomNavigation").classList.remove("hidden")
			document.getElementById("floatingButton").classList.remove("hidden")
			// Play Song
			song.play();

		}

		// Magnify Galery Zoom
		$("[data-magnify=gallery]").magnify();

		// hitung tanggal akurat 99 hari
		// Set the date we're counting down to
		var countDownDate = new Date("Dec 31, 2022 09:50:25").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id
			document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("days").innerHTML = "0";
				document.getElementById("hours").innerHTML = "0";
				document.getElementById("minutes").innerHTML = "0";
				document.getElementById("seconds").innerHTML = "0";
			}
		}, 1000);


		// Get all sections that have an ID defined
		const sections = document.querySelectorAll("section[id]");

		// Add an event listener listening for scroll
		window.addEventListener("scroll", navHighlighter);

		function navHighlighter() {

			// Get current scroll position
			let scrollY = window.pageYOffset;

			// Now we loop through sections to get height, top and ID values for each
			sections.forEach(current => {
				const sectionHeight = current.offsetHeight;

				const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 50;
				sectionId = current.getAttribute("id");

				if (
					scrollY > sectionTop &&
					scrollY <= sectionTop + sectionHeight
				) {
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.stroke = "#ef6351"
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.strokeWidth = "2px"
				} else {
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.stroke = "#1A262D"
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.strokeWidth = "1.2px"

				}



			});
		}

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
