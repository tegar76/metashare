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
	<link href="../../src/css/tema2/style5.css" rel="stylesheet" />

	<!-- Tailwind Elements -->
	<script src="<?= base_url() ?>assets/vendor/tw-elements/dist/js/index.min.js"></script>

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/jquery.magnify.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/magnify-white-theme.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/docs.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/magnify-master/docs/js/jquery.magnify.js"></script>

	<!-- AOS -->
	<link href="<?= base_url() ?>assets/vendor/aos/dist/aos.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/aos/dist/aos.js"></script>


	<title>Tema 2 Special</title>



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
			background-color: #1A120B;
			border-radius: 12px;
		}

		.magnify-modal .magnify-footer {
			color: #E8E8CF;
		}

		.magnify-modal .magnify-header .magnify-title {
			color: #E8E8CF;
			font-weight: bolder;
			font-family: font-MontserratBold;
		}

		.magnify-modal .magnify-header .magnify-button {
			border-radius: 4px;
			margin-top: 3px;
		}

		.magnify-modal .magnify-header .magnify-button.magnify-button-close {
			background-color: #e26804;
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
			src: url("<?= base_url() ?>assets/fonts/MontserratAlternatesLight.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "MontserratBold";
			src: url("<?= base_url() ?>assets/fonts/MontserratAlternatesRegular.ttf");
			font-display: block;
		}


		@font-face {
			font-family: "HappyPatrick";
			src: url("../../assets/fonts/tema2/HappyPatrick.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "LowBudget";
			src: url("../../assets/fonts/tema2/LowBudget.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "Oomph";
			src: url("../../assets/fonts/tema2/Oomph.ttf");
			font-display: block;
		}

		.font-HappyPatrick {
			font-family: "HappyPatrick";
		}

		.font-LowBudget {
			font-family: "LowBudget";
		}


		.font-Oomph {
			font-family: "Oomph";
		}

		.font-Montserrat {
			font-family: "Montserrat";
		}

		.font-MontserratBold {
			font-family: "MontserratBold";
		}

		/* Bg Mobille */

		.bg-cover-mobile {
			background-image: url('../../assets/foto/foto_cover_full.jpg');
			width: 100vw;
			height: 100vh;
			background-size: cover;
			background-position: center;
			text-align: center;
		}

		@media (min-width:1024px) {
			.bg-cover-mobile {
				background-image: none;
			}
		}
	</style>

</head>

<body class="font-Montserrat bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-tema2-dark via-tema2-primary to-tema2-dark bg-opacity-60 text-tema2-light">

	<!-- Demo Watermark -->
	<div class="">
		<div class="fixed z-50 top-1 right-1 lg:top-2 lg:right-2">
			<img class="w-20 lg:w-28" src="../../assets/icons/app/watermark_demo.svg" alt="">
		</div>
	</div>
	<!-- Demo Watermark End -->

	<!-- Nav -->
	<nav id="bottomNavigation" class="hidden fixed inset-x-0 bottom-4 z-20">
		<div id="tabs" class="tabs bg-tema2-dark border border-tema2-semi-dark shadow-lg flex rounded-3xl w-[70%] 2xs:w-[50%] lg:w-[20%] mx-auto">
			<a href="#cover" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-150 hover:saturate-150" style="stroke: #1A120B; stroke-width:2px;">
				<div class="nav-cover flex">
					<svg class="mx-auto my-auto w-[17px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.6" y="0.6" width="23.8" height="26.8" rx="3.4" />
						<path d="M12.7654 21.3098C12.534 21.5538 12.1474 21.5601 11.9083 21.3237L8.66659 18.1198C7.6668 16.8102 7.50908 15.5626 8.24591 14.3687C8.27026 14.3292 8.30036 14.2925 8.3344 14.261C9.53187 13.1533 11.1648 13.3009 12.2459 14.2344C12.5668 14.5116 13.0908 14.5143 13.3977 14.2216C14.4302 13.2365 15.6202 13.3055 16.8132 14.244C16.8393 14.2645 16.8645 14.2884 16.8861 14.3135C18.0352 15.6494 16.7701 16.8236 15.9198 17.9833L12.7654 21.3098Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
						<path d="M9.12771 0.378296L9.12769 6.68632C9.12769 7.27696 9.89128 7.51222 10.2237 7.02398L11.6849 4.87757C12.0173 4.38933 12.7809 4.62458 12.7809 5.21522V8.03382C12.7809 8.3652 13.0495 8.63382 13.3809 8.63382H15.2721C15.6035 8.63382 15.8721 8.3652 15.8721 8.03382V0.378296" />
					</svg>

				</div>
			</a>
			<a href="#sambutan" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-150 hover:saturate-150" style="stroke:#1A120B;">
				<div class="flex">
					<svg class="mx-auto my-auto w-[18px] h-[18px] 2xs:w-[22px] 2xl:h-[22px] 1xs:w-[26px] 1xl:h-[26px] md:w-8 md:h-8 lg:w-6 lg:h-6" width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.025 22.3245C15.025 25.5949 11.8878 28.4 7.8125 28.4C3.73716 28.4 0.6 25.5949 0.6 22.3245C0.6 19.0541 3.73716 16.249 7.8125 16.249C11.8878 16.249 15.025 19.0541 15.025 22.3245Z" />
						<path d="M24.4 18.7642C24.4 22.0346 21.2628 24.8397 17.1875 24.8397C13.1122 24.8397 9.975 22.0346 9.975 18.7642C9.975 15.4938 13.1122 12.6887 17.1875 12.6887C21.2628 12.6887 24.4 15.4938 24.4 18.7642Z" />
						<path d="M13.4022 8.96877C13.1709 9.21182 12.7853 9.21807 12.5464 8.98264L9.23045 5.71585C8.21038 4.38396 8.0497 3.11516 8.80197 1.90095C8.82641 1.86151 8.8566 1.82484 8.8907 1.79337C10.1175 0.661251 11.7928 0.817359 12.8956 1.77787C13.2148 2.05588 13.7373 2.05873 14.0425 1.76541C15.0991 0.750039 16.3184 0.816915 17.5407 1.77573C17.5668 1.79619 17.5921 1.82007 17.6138 1.84516C18.7869 3.20366 17.4962 4.3977 16.6287 5.57707L13.4022 8.96877Z" stroke-miterlimit="8.7" stroke-linecap="round" stroke-linejoin="bevel" />
					</svg>

				</div>
			</a>
			<a href="#tanggalResepsi" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-150 hover:saturate-150" style="stroke: #1A120B;">
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
			<a href="#galeriFoto" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-150 hover:saturate-150" style="stroke: #1A120B;">
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
			<a href="#pesanBahagia" class="w-full justify-center inline-block text-center pt-3 pb-3 hover:contrast-150 hover:saturate-150" style="stroke: #1A120B;">
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
			<button class="w-full h-full bg-tema2-light shadow-lg rounded-full border border-tema2-semi-dark hover:text-tema2-light focus:text-tema2-light justify-center inline-block text-center pt-2 pb-2 mb-3" data-bs-toggle="modal" data-bs-target="#modalGiftCard">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px]" src="../../assets/icons/tema2/floating_gift.svg" alt="">
				</div>
			</button>
			<button class="w-full bg-tema2-light shadow-lg border border-tema2-semi-dark rounded-full hover:text-tema2-light focus:text-tema2-light justify-center inline-block text-center pt-2 pb-2 mb-2">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px] animate-spin-slow" src="../../assets/icons/tema2/floating_music_play.svg" alt="" id="iconMusic">
				</div>

				<audio id="song" loop>
					<source src="../../assets/music/MarryYourDaughter.mp3" type="audio/mp3">
				</audio>
			</button>
		</div>
	</div>
	<!-- floating button End -->

	<!-- Sampul -->
	<div class="sampul text-center z-0 bg-tema2-dark min-h-[100vh] max-h-max lg:border border-dashed border-tema2-light/60" id="sampul">

		<div class="absolute left-[35vw] top-5 hidden lg:block">
			<div class="flex">
				<div class="border border-tema2-light bg-tema2-semi-light -rotate-45  h-10 w-2 rounded-xl -mr-8"></div>
				<div class="border border-tema2-light bg-tema2-semi-light -rotate-45 hidden lg:block h-14 w-2 rounded-xl">
				</div>
			</div>
		</div>

		<div class="absolute right-[33vw] top-5 hidden lg:block">
			<div class="flex">
				<div class="border border-tema2-light bg-tema2-semi-light -rotate-45 h-10 w-2 rounded-xl -mr-8"></div>
				<div class="border border-tema2-light bg-tema2-semi-light -rotate-45 h-14 w-2 rounded-xl"></div>
			</div>
		</div>

		<div class="flex justify-center">

			<div class="">
				<h1 class="mt-8 2xs:mt-12 sm:mt-14 lg:mt-8 text-2xl 2xs:text-3xl sm:text-4xl lg:text-3xl font-HappyPatrick text-tema2-light">
					The Wedding Of</h1>

				<div class="border relative mt-8 rounded-3xl border-tema2-light">
					<div class="flex -mb-8 flex-wrap justify-center mt-5 sm:mt-12 lg:mt-8">
						<div class="w-36 2xs:w-40 sm:w-60 lg:w-36
                        
                        ">
							<img src="../../assets/foto/cover_250x250.png" class="shadow-xl max-w-full h-auto align-middle border-b-4 border-2 border-tema2-light rounded-3xl" />
						</div>
					</div>
					<div class="flex absolute -bottom-4 -left-10 rotate-180">
						<img src="../../assets/ilustrations/tema2/ils_sampul1.svg" class="">
					</div>
					<div class="flex absolute -top-4 -right-10 ">
						<img src="../../assets/ilustrations/tema2/ils_sampul1.svg" class="">
					</div>
				</div>

				<div>
					<h1 class="mt-12 sm:mt-12 font-LowBudget text-2xl 2xs:text-3xl sm:text-4xl lg:text-3xl text-tema2-light tracking-widest">
						Runa & Ratna</h1>
					<p class="mt-1 sm:mt-3 text-xl 2xs:text-2xl sm:text-4xl lg:text-2xl text-tema2-light font-Oomph tracking-widest">
						22 <span class="font-normal text-base 2xs:text-xl sm:text-2xl lg:text-base">Januari
						</span><span>2022</span></p>
				</div>

				<div class="">
					<div class="flex">
						<div class="border border-tema2-light bg-tema2-semi-light px-8 2xs:px-10 sm:px-14 lg:px-10 py-3 sm:py-5 lg:py-2 rounded-2xl sm:rounded-3xl lg:rounded-2xl mt-8 mx-auto text-xs 2xl:text-sm sm:text-xl lg:text-sm text-tema2-dark">
							<div class="attribute">
								<p class="mb-2 lg:mb-0">Kepada Yth</p>
								<p>Bapak/Ibu/Saudara/I</p>
								<p class="mt-2 lg:mt-0 text-base-xs 2xs:text-base-md sm:text-2xl lg:text-base-md font-semibold">
									Tegar Kusuma</p>
							</div>
						</div>
					</div>
					<p class="text-tema2-light leading-4 lg:leading-3 my-3 text-base-2xs 2xs:text-base-1xs sm:text-base-md lg:text-base-1xs">
						*Mohon Maaf Bila Ada Kesalahan Dalam <br> Penulisan Nama dan Gelar</p>
				</div>

				<div class="flex">
					<a href="#home" onclick="showMainPage()" id="btnOpen" role="button" class="font-MontserratBold font-medium text-tema2-light text-base-xs 2xs:text-sm sm:text-xl lg:text-base-xs w-fit bg-tema2-semi-dark hover:bg-tema2-dark border border-tema2-light rounded-xl sm:rounded-2xl lg:rounded-xl mx-auto transition delay-150 animate-bounce flex justify-center mt-8 mb-8 sm:mt-16 lg:mt-8 px-8 lg:px-8 py-1.5 2xs:py-2.5 sm:py-4 lg:py-1" data-role="link">
						<div class="flex"> <img src="../../assets/icons/tema1/cover_icon_unlock.svg" alt="" class="mr-3 w-3">
							<p>Buka Undangan</p>
						</div>
					</a>
				</div>
			</div>

		</div>

		<img src="../../assets/ilustrations/tema2/ils_sampul2.svg" class="absolute left-0 -mt-20 2xs:bottom-1 lg:bottom-0 w-20 2xs:w-32 sm:w-60">
		<img src="../../assets/ilustrations/tema2/ils_sampul2.svg" class="absolute right-0 -mt-20 2xs:bottom-3 lg:bottom-3 w-20 2xs:w-32 sm:w-60 -rotate-90">
	</div>
	<!-- Sampul End-->

	<div class="mainPage main-page-transition hidden" id="mainPage">
		<!-- Cover -->
		<section class="absolute -z-10 top-0" id="cover">
			<div class="lg:hidden absolute inset-0  bg-slate-900 bg-opacity-60"></div>
			<div class="w-screen h-screen bg-cover bg-cover-mobile lg:bg-none lg:bg-tema2-semi-dark text-center">
				<div class="flex justify-center">
					<div class="hidden w-[5vw] h-screen bg-tema2-dark lg:flex flex-col space-y-10 justify-center" data-aos="zoom-in-right" data-aos-easing="ease-out-cubic" data-aos-duration="500">
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="mx-auto opacity-80">
							<img src="../../assets/ilustrations/tema2/ils_cover2.svg" alt="">
						</div>
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="p-1.5 border-2 border-tema2-light/80 bg-tema2-semi-light/40 w-fit rounded-full mx-auto mb-3">
						</div>
						<div class="absolute bg-gradient-to-b bottom-0 from-tema2-dark via-tema2-dark/60 to-tema2-primary w-[5vw] h-[2vh]">
						</div>
					</div>
					<div class="lg:w-[50vw] lg:bg-tema2-semi-dark lg:h-screen lg:relative absolute bottom-[4vh] lg:bottom-0">
						<div class="flex">

							<div class="bg-tema2-dark/30 border border-tema2-light lg:border-0 lg:bg-transparent lg:shadow-none w-full h-full my-auto rounded-lg text-center mx-auto font-LowBudget text-3xl 2xs:text-5xl sm:text-5xl md:text-[68px] lg:text-5xl text-tema2-light lg:text-tema2-semi-light tracking-widest shadow-tema2-semi-light shadow-sm p-3 lg:mt-32" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="500">
								<div class="font-LowBudget text-2xl 2xs:text-3xl sm:text-4xl lg:text-3xl text-tema2-light tracking-widest">
									<p class="mb-2">Runa & Ratna</p>
								</div>
								<div class="flex justify-center items-center opacity-80">
									<img src="../../assets/ilustrations/tema2/ils_cover1.svg" alt="">
								</div>
							</div>
						</div>
						<div class="flex">

							<div class="border border-tema2-light w-fit mx-auto px-8 py-2 md:pb-8 lg:py-5 rounded-xl lg:rounded-3xl mt-6 md:mt-12 lg:mt-14 text-tema2-light bg-tema2-semi-dark/60 font-light font-Oomph" data-aos="zoom-in-top" data-aos-easing="ease-out-cubic" data-aos-duration="500">
								<div class="text-lg 2xs:text-xl sm:text-2xl lg:text-xl text-tema2-light font-HappyPatrick tracking-widest">
									<h3>Menuju Hari Bahagia</h3>
								</div>
								<div class="border-b-2 border-tema2-semi-light -mx-8 my-3 flex">
									<div class="p-1 border-2 border-tema2-light w-fit rounded-full mx-auto mb-3"></div>
									<div class="p-1 border-2 border-tema2-light w-fit rounded-full mx-auto mb-3"></div>
									<div class="p-1 border-2 border-tema2-light w-fit rounded-full mx-auto mb-3"></div>
									<div class="p-1 border-2 border-tema2-light w-fit rounded-full mx-auto mb-3"></div>
									<div class="p-1 border-2 border-tema2-light w-fit rounded-full mx-auto mb-3"></div>
								</div>
								<div class=" lg:saturate-150 flex justify-center items-center">
									<h1 class="text-3xl 2xs:text-4xl sm:text-5xl md:text-6xl lg:text-[40px]" id="days">0
									</h1>
									<p class="text-md 2xs:text-xl sm:text-2xl md:text-3xl lg:text-xl font-LowBudget tracking-widest ml-2 mt-2">
										Hari</p>
								</div>
								<div class="flex gap-x-4 mt-2 lg:saturate-200 justify-center items-center">
									<div>
										<h1 class="text-lg 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-2xl" id="hours">
											0</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs font-LowBudget tracking-widest">
											Jam</p>
									</div>
									<div class="md:text-2xl">|</div>
									<div>
										<h1 class="text-lg 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-2xl" id="minutes">0</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs font-LowBudget tracking-widest">
											Menit</p>
									</div>
									<div class="md:text-2xl">|</div>
									<div>
										<h1 class="text-lg 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-2xl" id="seconds">0</h1>
										<p class="md:mt-1 text-base-2xs 2xs:text-xs md:text-md lg:text-base-xs font-LowBudget tracking-widest">
											Detik</p>
									</div>
								</div>
							</div>
						</div>
						<div class="hidden lg:block absolute bg-gradient-to-b bottom-0 from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-primary w-[45vw] h-[2vh]">
						</div>
					</div>


					<div class="hidden lg:block h-screen bg-gradient-to-r from-tema2-semi-dark via-tema2-semi-dark/40 to-tema2-semi-light w-[5vw]">
					</div>
					<div class="hidden lg:block absolute bg-gradient-to-b bottom-0 from-tema2-semi-dark via-tema2-semi-dark to-tema2-primary w-[4.5vw] h-[2vh]">
					</div>


					<div class="hidden lg:flex flex-col  w-[50vw] justify-center items-center bg-tema2-semi-light">
						<div class="shadow-lg shadow-tema2-dark rounded-[40px]" data-aos="zoom-in-left" data-aos-easing="ease-out-cubic" data-aos-duration="500"><img src="../../assets/foto/foto_cover_full.jpg" alt="" class="w-96 my-auto border-2 border-tema2-light rounded-[40px]"></div>
						<div class="hidden lg:block absolute bg-gradient-to-b bottom-0 from-tema2-semi-light via-tema2-semi-light/60 to-tema2-primary w-[45vw] h-[2vh]">
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- Sambutan -->
		<section class="pb-8 pt-8 lg:pt-0 px-6 1xs:px-16 md:px-24 lg:px-72 relative" id="sambutan">
			<div class="flex justify-center items-center text-center">
				<img class="absolute right-0 md:right-20 -top-1" src="../../assets/ilustrations/tema2/ils_sambutanpin.svg" alt="">
				<div class="text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-tema2-light">
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000"><img src="../../assets/icons/tema2/sambutan_bismillah_white.svg" class="mx-auto mb-4 lg:mt-5 md:mb-7 w-[160px] 2xs:w-[180px] 1xs:w-[210px] md:w-[260px] lg:w-[250px]" alt="">
					</div>
					<h1 class=" mb-5 md:mb-7 opacity-95 font-MontserratBold text-base-md 1xs:text-md md:text-3xl lg:text-xl text-tema2-light" data-aos="zoom-in" data-aos-duration="1000">Assalamu’alaikum warahmatullahi wabarakatuh</h1>
					<p class="text-justify lg:text-center" data-aos="zoom-in" data-aos-duration="1000">
						Maha Suci Allah SWT yang telah menciptakan Mahluknya berpasang-pasangan, ya Alloh semoga
						ridho-mu tercurah mengiringi pernikahan putra-putri kami :
					</p>
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000">
						<img src="../../assets/foto/mempelai_pria.PNG" alt="" class="mx-auto mt-3 md:mt-8 w-[80px] 1xs:w-[120px] lg:w-[130px] xl:w-[140px] h-[80px] 1xs:h-[120px] lg:h-[130px] xl:h-[140px] rounded-full">
					</div>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-LowBudget tracking-widest text-1xl 2xs:text-2xl sm:text-3xl md:text-[50px] lg:text-3xl text-tema2-semi-light saturate-150 contrast-150" data-aos="zoom-in" data-aos-duration="1000">
						<p class="">Runa Vha Ningit</p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/runvhan/" class="mx-auto my-3 md:my-5 lg:my-3 opacity-90 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="../../assets/icons/tema2/sambutan_insta.svg" alt="">
						</a>
					</div>
					<p class="font-MontserratBold" data-aos="zoom-in" data-aos-duration="1000">
						Putra Kedua Bpk. Iwan Yuli Widianto & Ibu Heny Margarini
					</p>
					<p class="font-MontserratBold opacity-80 mt-5 md:mt-8 text-sm 2xs:text-base-md md:text-[30px] lg:text-lg " data-aos="zoom-in" data-aos-duration="1000">dengan</p>
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000">
						<img src="../../assets/foto/mempelai_wanite.PNG" alt="" class="mx-auto mt-3 md:mt-8 w-[80px] 1xs:w-[120px] lg:w-[130px] xl:w-[140px] h-[80px] 1xs:h-[120px] lg:h-[130px] xl:h-[140px] rounded-full">
					</div>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-LowBudget tracking-widest text-1xl 2xs:text-2xl sm:text-3xl md:text-[50px] lg:text-3xl text-tema2-semi-light saturate-150 contrast-150" data-aos="zoom-in" data-aos-duration="1000">
						<p class="">Ratna Sari Astuti</p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/ratnasariastt/" class="mx-auto my-3 md lg:my-3:my-8 opacity-90 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="../../assets/icons/tema2/sambutan_insta.svg" alt="">
						</a>
					</div>
					<p class="font-MontserratBold" data-aos="zoom-in" data-aos-duration="1000">
						Putri Kedua Bpk. Kifi Norhasis & Ibu Rumiati
					</p>
					<p class="mt-5 md:mt-8" data-aos="zoom-in" data-aos-duration="1000">
						Untuk Melaksanakan Sunah Rosul-mu dalam membentuk Keluarga Sakinah, Mawadah dan Warohmah
					</p>
				</div>
			</div>
		</section>
		<!-- Sambutan End -->

		<!-- Resepsi -->
		<section class="-mt-5 px-6 1xs:px-16 md:px-24 lg:px-8 text-center lg:flex" id="tanggalResepsi">
			<div class="lg:mx-auto">
				<div class="pt-8 lg:pt-28" id="objekResepsi">

					<p class="mb-3 md:mb-5 lg:-mt-10 font-MontserratBold text-base-md md:text-[28px] lg:text-lg text-tema2-light/90" data-aos="zoom-in" data-aos-duration="1000">Insya Allah Akan Dilaksanakan Pada :</p>
					<div class="lg:flex lg:gap-x-6">
						<!-- Card Tasyakuran -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema2-semi-light/30 shadow-sm shadow-tema2-semi-light/20 rounded-2xl lg:rounded-3xl bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark relative" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="../../assets/icons/tema2/resepsi_pin.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-tema2-light/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">
									Tasyakuran</h1>
								<p class="mb-1 text-tema2-light">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-tema2-light">10.00 WIB - Selesai</p>
								<p class=" text-tema2-light mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01 No.213 RT.02 RW.01
								</p>
								<p class="text-tema2-semi-light text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman
									Mempelai Pria)</p>
							</div>
						</div>
						<!-- Card Tasyakuran End -->
						<!-- Card Akad -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema2-semi-light/30 shadow-sm shadow-tema2-semi-light/20 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark relative" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="../../assets/icons/tema2/resepsi_pin.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-tema2-light/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">
									Akad</h1>
								<p class="mb-1 text-tema2-light">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-tema2-light">10.00 WIB - Selesai</p>
								<p class=" text-tema2-light mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01</p>
								<p class="text-tema2-semi-light text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman
									Mempelai Pria)</p>
								<a target="_blank" href="https://goo.gl/maps/HyxMYiBshiDf29f27">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema2-dark/20 text-tema2-semi-light font-semibold hover:bg-tema2-dark border border-tema2-light/40 transition ease-in-out duration-500">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="../../assets/icons/tema2/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Akad End-->
						<!-- Card Resepsi -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema2-semi-light/30 shadow-sm shadow-tema2-semi-light/20 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark relative" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="../../assets/icons/tema2/resepsi_pin.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3 font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-tema2-light/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">
									Resepsi</h1>
								<p class="mb-1 text-tema2-light">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-tema2-light">10.00 WIB - Selesai</p>
								<p class=" text-tema2-light mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01</p>
								<p class="text-tema2-semi-light text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman
									Mempelai Pria)</p>
								<a target="_blank" href="https://goo.gl/maps/HyxMYiBshiDf29f27" class="self-end">
									<button class="mt-4 md:mt-8 px-4 py-2 rounded-lg bg-tema2-dark/20 text-tema2-semi-light font-semibold hover:bg-tema2-dark border border-tema2-light/40 transition ease-in-out duration-500">
										<div class="flex justify-items-center">
											<img class="mr-3" width="14" height="14" src="../../assets/icons/tema2/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Resepsi End-->
					</div>
					<p class="mt-3 md:mt-5 lg:mt-10 text-base-xs 2xs:text-base-sm md:text-[28px]  lg:text-base" data-aos="zoom-in" data-aos-duration="1000">Atas kehadiran serta doa restunya kami ucapkan
						terimakasih</p>
					<h1 class="font-MontserratBold mt-3 opacity-80 text-base-xs 2xs:text-base-sm md:text-[28px]  lg:text-base" data-aos="zoom-in" data-aos-duration="1000">Wassalamu’alaikum warahmatullahi wabarakatuh</h1>
				</div>
			</div>
		</section>
		<!-- Resepsi -->
		<!-- 
        <div class="cover-shape -mt-5 lg:-mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 20 1440 320" class="bg-violet-200">
                <path fill="#ebeeee" fill-opacity="1"
                    d="M0,128L16,112C32,96,64,64,96,64C128,64,160,96,192,112C224,128,256,128,288,122.7C320,117,352,107,384,128C416,149,448,203,480,208C512,213,544,171,576,154.7C608,139,640,149,672,154.7C704,160,736,160,768,170.7C800,181,832,203,864,202.7C896,203,928,181,960,165.3C992,149,1024,139,1056,144C1088,149,1120,171,1152,176C1184,181,1216,171,1248,144C1280,117,1312,75,1344,48C1376,21,1408,11,1424,5.3L1440,0L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z">
                </path>
            </svg>
        </div> -->

		<!-- Galery Foto -->
		<section id="galeriFoto">
			<div class="flex w-screen gap-x-2 md:gap-x-0 justify-center items-center  mt-6 mb-4 1xs:mt-12 1xs:mb-10" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
				<div class="w-full flex">
					<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
					<div class="border-l-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
				</div>
				<h1 class="font-HappyPatrick tracking-widest text-md 2xs:text-lg 1xs:text-xl sm:text-2xl md:text-3xl opacity-80 mt-3 text-center w-full text-tema2-semi-light contrast-150 saturate-150">
					Galeri Foto</h1>
				<div class="w-full flex">
					<div class="border-r-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
					<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
				</div>
			</div>

			<div class="border border-tema2-semi-light/30 pb-3 md:pb-5 lg:pt-10 pt-5 md:pt-8 rounded-2xl lg:rounded-3xl relative mx-6 1xs:mx-16 md:mx-24  px-4 md:px-8 lg:px-16" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-delay="1000">

				<div class="columns-2 gap-x-2 lg:gap-x-4 md:columns-5xs lg:columns-4xs xl:columns-3xs" id="objekFoto">
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300  aspect-w-5 aspect-h-3  mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_1.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_1.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_2.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_2.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_3.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_3.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_4.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_4.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_5.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_5.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_6.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_6.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_7.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_7.png">
					</div>
					<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
						<img class="w-full  rounded-2xl view-photo border cursor-pointer border-tema2-semi-light/30 hover:border-2 hover:border-tema2-primary" src="../../assets/foto/foto_8.png" alt="photo" data-magnify="gallery" data-src="../../assets/foto/foto_8.png">
					</div>
				</div>

				<div class="mb-2 mt-4">
					<div class="flex justify-center content-center ">
						<video class="gdriveVideo md:h-72 rounded-2xl view-photo cursor-pointer" preload="auto" controls poster="../../assets/foto/foto_tumbnail_video.jpg">
							<source src="https://drive.google.com/uc?export=download&id=1-zNYEW_2Hoc7CIhmqbZuxi3HPiAjwh4S" type='video/mp4'>
						</video>
					</div>
				</div>


			</div>
		</section>
		<!-- Galery Foto End -->

		<!-- <div class="cover-shape -mt-32 lg:-mt-48">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ead2fc" fill-opacity="1"
                    d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,128C672,139,768,181,864,192C960,203,1056,181,1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div> -->

		<!-- Perjalanan Cinta -->
		<div id="perjalananCinta">
			<div class="">
				<div class="flex w-screen gap-x-2 md:gap-x-0 justify-center items-center  mt-6 mb-4 1xs:mt-12 1xs:mb-10" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
					<div class="w-full flex">
						<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
						<div class="border-l-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
					</div>
					<h1 class="font-HappyPatrick tracking-widest text-md 2xs:text-lg 1xs:text-xl sm:text-2xl md:text-3xl opacity-80 mt-3 text-center w-full text-tema2-semi-light contrast-150 saturate-150">
						Perjalanan Cinta</h1>
					<div class="w-full flex">
						<div class="border-r-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
						<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
					</div>
				</div>
				<div class="absolute right-5 w-16 2xs:w-20 1xs:w-28 sm:w-32 md:w-36 lg:w-40 xl:hidden">
					<img src="../../assets/ilustrations/tema2/percin_lg.svg" alt="ils percin" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="500">
				</div>
			</div>

			<div class="pt-8 mt-10 pb-8 lg:pt-10 relative">
				<div class="xl:flex mx-6 1xs:mx-16 md:mx-24 xl:items-center">
					<div class="xl:mr-8 xl:w-2/3" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="500">
						<ol class="relative border-l border-tema2-semi-light/50 ml-2">
							<li class="mb-10 lg:mb-14 ml-8">
								<div class="relative border border-tema2-light/30 shadow-sm bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark shadow-tema2-semi-dark text-tema2-semi-light/60 rounded-2xl lg:rounded-3xl">
									<div class="absolute border bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark text-tema2-semi-light/60 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-tema2-semi-light tracking-widest font-semibold px-3 py-1 rounded-xl left-1/2 transform -translate-x-1/2 -translate-y-1/2 -top-1">
										<p class="contrast-150">Kisah 1</p>
									</div>
									<div class="mt-3">
										<div class="absolute w-7 h-7 text-tema2-semi-light b bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark rounded-full -left-12 border">
											<p class="font-MontserratBold font-bold ml-2">1</p>
										</div>
										<div class="story mx-3">
											<time class="my-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal leading-none text-tema2-semi-light">February
												2022</time>
											<p class="mb-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal text-tema2-light text-justify">
												Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates
												praesentium voluptatem cupiditate repellendus quis, modi facilis
												dignissimos. Earum perspiciatis quam iure amet recusandae veniam
												officia, natus eaque rem nobis cupiditate?</p>
										</div>
									</div>
								</div>
							</li>
							<li class="mb-10 lg:mb-14 ml-8">
								<div class="relative border border-tema2-light/30 shadow-sm bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark shadow-tema2-semi-dark text-tema2-semi-light/60 rounded-2xl lg:rounded-3xl">
									<div class="absolute border bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark text-tema2-semi-light/60 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-tema2-semi-light tracking-widest font-semibold px-3 py-1 rounded-xl left-1/2 transform -translate-x-1/2 -translate-y-1/2 -top-1">
										<p class="contrast-150">Kisah 2</p>
									</div>
									<div class="mt-3">
										<div class="absolute w-7 h-7 text-tema2-semi-light  bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark rounded-full -left-12 border border-tema2-text-tema2-semi-light/60">
											<p class="font-MontserratBold font-bold ml-2">2</p>
										</div>
										<div class="story mx-3">
											<time class="my-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal leading-none text-tema2-semi-light">February
												2022</time>
											<p class="mb-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal text-tema2-light text-justify">
												Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates
												praesentium voluptatem cupiditate repellendus quis, modi facilis
												dignissimos. Earum perspiciatis quam iure amet recusandae veniam
												officia, natus eaque rem nobis cupiditate?</p>
										</div>
									</div>
								</div>
							</li>
							<li class="ml-8">
								<div class="relative border border-tema2-light/30 shadow-sm shadow-tema2-semi-light/20 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark text-tema2-semi-light/60 rounded-2xl lg:rounded-3xl">
									<div class="absolute border bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark text-tema2-semi-light/60 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-tema2-semi-light tracking-widest font-semibold px-3 py-1 rounded-xl left-1/2 transform -translate-x-1/2 -translate-y-1/2 -top-1">
										<p class="contrast-150">Kisah 3</p>
									</div>
									<div class="mt-3">
										<div class="absolute w-7 h-7 text-tema2-semi-light  bg-tema2-primary saturate-150 border-tema2-semi-light/40 shadow-sm shadow-tema2-semi-dark rounded-full -left-12 border border-tema2-text-tema2-semi-light/60">
											<p class="font-MontserratBold font-bold ml-2">3</p>
										</div>
										<div class="story mx-3">
											<time class="my-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal leading-none text-tema2-semi-light">February
												2022</time>
											<p class="mb-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 font-normal text-tema2-light text-justify">
												Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates
												praesentium voluptatem cupiditate repellendus quis, modi facilis
												dignissimos. Earum perspiciatis quam iure amet recusandae veniam
												officia, natus eaque rem nobis cupiditate?</p>
										</div>
									</div>
								</div>
							</li>
						</ol>
					</div>
					<div class="hidden xl:block" data-aos="zoom-out-down" data-aos-duration="1000">
						<img class="opacity-70" src="../../assets/ilustrations/tema2/percin_lg.svg" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Perjalanan Cinta End-->

		<!-- Pesan Bahagia -->
		<section id="pesanBahagia">
			<div class="flex w-screen gap-x-2 md:gap-x-0 justify-center items-center  mt-6 mb-4 1xs:mt-12 1xs:mb-10" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
				<div class="w-full flex">
					<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
					<div class="border-l-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
				</div>
				<h1 class="font-HappyPatrick tracking-widest text-md 2xs:text-lg 1xs:text-xl sm:text-2xl md:text-3xl opacity-80 mt-3 text-center w-full text-tema2-semi-light contrast-150 saturate-150">
					Pesan Bahagia</h1>
				<div class="w-full flex">
					<div class="border-r-2 border-tema2-semi-light h-[4vh] w-[1vh]"></div>
					<div class="border-t-2 border-tema2-semi-light h-[1vh] w-full"></div>
				</div>
			</div>
			<div class="xl:flex lg:border lg:border-tema2-semi-light/30 lg:shadow-sm lg:shadow-tema2-semi-light/20 rounded-2xl xl:rounded-3xl xl:py-5 mx-6 1xs:mx-16 md:mx-24 lg:pl-8 lg:mb-8 lg:bg-gradient-to-r lg:from-tema2-dark/40 lg:via-tema2-primary lg:to-tema2-semi-dark" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500">
				<div class="xl:w-[70%] text-left mt-7 lg:mt-1">
					<div class="">
						<div class="xl:hidden"></div>
						<div class="">
							<div class="">
								<div class="">
									<div class="">
										<label for="pesan" class="opacity-70 font-semibold tracking-wide cursor-pointer text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">Pesan</label>
										<div class="mt-2">
											<textarea class="form-textarea w-full rounded-md bg-tema2-light/10 border-tema2-semi-light/50 border-r-tema2-semi-light shadow-sm shadow-tema2-semi-light/40 hover:shadow-tema2-semi-light/100 leading-tight focus:ring-0 focus:border focus:border-tema2-semi-light/80 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6 placeholder-tema2-semi-light" name="pesan" id="pesan" placeholder="Masukan Pesan"></textarea>
										</div>
									</div>
									<div class="mt-3 md:mt-8">
										<label for="konfirmasi" class="opacity-70 font-semibold tracking-wide text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">Konfirmasi
											Kehadiran</label>
										<div class="flex">
											<div class="mt-2 mr-3 md:mr-5">
												<input type="radio" value="2" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema2-semi-light/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-green-500 checked:hover:bg-green-600 checked:focus:bg-green-600 cursor-pointer" name="konfirmasiHadir" id="hadir">
												<label class="lg:ml-1 text-tema2-semi-light cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="hadir">Hadir</label>
											</div>
											<div class="mt-2 mr-3 md:mr-5">
												<input type="radio" value="1" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema2-semi-light/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-400 checked:bg-red-400 checked:hover:bg-red-500 checked:focus:bg-red-500 cursor-pointer" name="konfirmasiHadir" id="tidakHadir">
												<label class="lg:ml-1 text-tema2-semi-light cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="tidakHadir">Tidak Hadir</label>
											</div>
											<div class="mt-2">
												<input type="radio" value="0" class="w-5 h-4 md:w-6 md:h-7 lg:w-5 lg:h-4 rounded-md border-tema2-semi-light/50 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-yellow-500 checked:hover:bg-yellow-600 checked:focus:bg-yellow-600 cursor-pointer" name="konfirmasiHadir" id="belumPasti">
												<label class="lg:ml-1 text-tema2-semi-light cursor-pointer text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6" for="belumPasti">Belum Pasti</label>
											</div>
										</div>
									</div>
									<div class="mt-3 md:mt-8">
										<button type="submit" class="px-4 py-1 md:px-8 md:py-3 lg:py-1.5 lg:px-6 bg-tema2-dark/80 border border-tema2-light/70 hover:bg-tema2-dark/100 text-tema2-light rounded-lg hover:bg-opacity-70 transition-all duration-300 text-sm 2xs:text-base-sm 1xs:text-base md:text-[27px] lg:text-base lg:leading-6 font-semibold">Kirim</button>
									</div>
								</div>
								<div class="">
									<div>
										<p class="opacity-70 font-semibold tracking-wide mb-3 md:mb-5 mt-4 md:mt-8 text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">
											Total Pesan : <span>fbuhbfb</span></p>
									</div>
									<div class="overflow-y-scroll h-[350px] xl:h-[250px] border border-tema2-semi-light/60 cursor-all-scroll rounded-md bg-tema2-light/10 shadow-sm lg:shadow-md shadow-tema2-semi-light/50 border-r-tema2-semi-light mb-5">
										<div class="mx-3 mb-3">
											<div class="flex mt-3">
												<div class="mr-3">
													<div class="flex w-9 h-9 md:w-12 md:h-12 lg:w-10 lg:h-10 font-semibold border border-slate-400 text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6 text-center rounded-full items-center justify-center text-green-500">
														T</div>
												</div>
												<div>
													<div>
														<p class="font-semibold opacity-80 tracking-wide text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base-md lg:leading-6">
															Tegar Kusuma</p>
														<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[22px] lg:text-base-sm lg:leading-6 text-tema2-semi-light mb-1 md:mt-2 lg:mt-0">
															22 Januari 2022
														</p>
														<p class="tracking-wide text-tema2-light text-justify mr-2 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[25px] lg:text-base-sm lg:leading-6">
															Selamat Menempuh Hidup Baru</p>
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
								<div class="flex mr-5 animate-wiggleLeft"><img src="../../assets/ilustrations/tema2/pesan_bahagia_left.svg" class="w-60 md:w-80 mx-auto mb-4 " alt=""></div>
								<div class="flex mr-5"><img src="../../assets/ilustrations/tema2/pesan_bahagia_top.svg" class="w-60 md:w-80 mx-auto mb-4" alt=""></div>
								<div class="flex animate-wiggleRight"><img src="../../assets/ilustrations/tema2/pesan_bahagia_right.svg" class="w-60 md:w-80 mx-auto mb-4" alt=""></div>
							</div>
							<h1 class="font-HappyPatrick tracking-wide text-xl 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-3xl mb-1 lg:mb-3 opacity-80 text-center ">
								Terimakasih</h1>
							<p class="text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[22px] lg:text-base lg:leading-6 text-center">
								Atas Do'a Restunya</p>
							<div class="text-center mt-8 font-LowBudget tracking-widest text-xl 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-3xl text-tema2-semi-light">
								<p class="">Runa & Ratna</p>
							</div>
							<div class="flex my-10 opacity-80"><img src="../../assets/ilustrations/tema2/pesan_bahagia_bot.svg" class="mx-auto mb-4 w-[180px] md:w-[230px] lg:w-[250px]" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Pesan Bahagia End-->

		<footer class="p-4 bg-tema2-dark rounded-t-3xl shadow md:px-2 md:py-4 xl:mt-0">
			<div class="mb-14 md:mb-20 flex justify-center items-center">
				<div class="flex ml-3 text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[22px] lg:text-base">
					<div class="flex justify-center items-center w-1/2 mr-5">
						<a target="_blank" href="https://metashare.paralogy.id/" class="">
							<img src="../../assets/icons/app/logo_metashare.png" class="mr-3 w-[100px] md:w-36" alt="Metashare Logo">
							<p class="self-center text-[10px] text-tema2-light md:text-base-xs lg:text-sm whitespace-nowrap">
								Powered By Paralogy</p>
						</a>
					</div>
					<div class="md:flex md:justify-between gap-3">
						<div class="flex justify-center items-center w-1/2 ml-5 mb-1 md:mb-0">
							<a target="_blank" href="https://www.instagram.com/metasharee/" class="flex hover:contrast-150 hover:saturate-150 hover:text-ping-200">
								<img src="../../assets/icons/tema2/footer_insta.svg" class="mr-1.5 h-3 2xs:h-4 md:h-6 md:mt-1 lg:h-5 lg:mt-0" alt="Whatsapp Logo">
								<span class="self-center text-pink-300 whitespace-nowrap">Instagram</span>
							</a>
						</div>
						<div class="flex justify-center items-center w-1/2 ml-5">
							<a target="_blank" href="https://api.whatsapp.com/send/?phone=6287899703471&text=Saya tertarik untuk bikin undangan" class="flex hover:contrast-150 hover:saturate-150 hover:text-green-400">
								<img src="../../assets/icons/tema1/wa.png" class="mr-1.5 h-3 2xs:h-4 md:h-6 md:mt-1 lg:h-5 lg:mt-0" alt="Whatsapp Logo">
								<span class="self-center text-green-300 whitespace-nowrap">Whatsapp</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- Modal Giftcard-->
	<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modalGiftCard" tabindex="-1" aria-labelledby="modalGiftCardLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
			<div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-tema2-dark bg-clip-padding rounded-md outline-none text-current">
				<!-- Notif Success Copy-->
				<div class="z-30 fixed border border-green-400 bg-green-500 text-white px-8 py-1 w-fit hidden transition ease-in-out rounded-md top-6 lg:top-10 left-1/2 -translate-x-1/2" id="divNotifSuccessCopy">
					<p id="notifSuccessCopy" class="text-center text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[22px] lg:text-base-md font-semibold">
					</p>
				</div>
				<!-- Notif Success Copy End-->
				<div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-tema2-semi-light/30 rounded-t-md">
					<h1 class="font-HappyPatrick tracking-widest text-3xl 1xs:text-4xl lg:text-3xl mx-auto">
						Berikan Hadiah</h1>
				</div>
				<div class="modal-body relative p-4">
					<p class="mb-4 text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[20px] lg:text-base-md lg:leading-6 font-normal text-tema2-light text-justify">
						<span class="font-semibold">
							Tanpa mengurangi rasa hormat,</span> untuk melengkapi kebahagian pengantin, anda dapat
						memberikan tanda kasih dengan melalui transfer ke rekening berikut :
					</p>
					<!-- content card bca-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_bca.svg" alt="bca"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBca">1342179716</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBca'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bca end-->
					<!-- content card bri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_bri.svg" alt="bri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bri end-->
					<!-- content card mandiri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_mandiri.svg" alt="mandiri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noMandiri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noMandiri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card mandiri end-->
					<!-- content card bsi-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_bsi.svg" alt="bsi"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBsi">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBsi'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bsi end-->
					<!-- content card bni-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_bni.svg" alt="bni"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBni">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBni'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card end bni-->
					<!-- content card cimbniaga-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_cimbniaga.svg" alt="cimbniaga"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noCimbniaga">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noCimbniaga'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card cimbniagaend-->
					<!-- content card dana-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="../../assets/icons/app/i_gift_card_va_dana.svg" alt="dana"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noDana">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="../../assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noDana'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="../../assets/contoh_barcode/bca_runa.png" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card end dana-->
				</div>
				<div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-tema2-semi-light/30 rounded-b-md">
					<button type="button" class="px-4 py-1 md:px-8 md:py-3 lg:py-1.5 lg:px-6 bg-red-900 hover:bg-tema2-semi-light/100 text-white rounded-lg hover:bg-opacity-70 transition-all duration-300 text-sm 2xs:text-base-sm 1xs:text-base md:text-[27px] lg:text-base lg:leading-6 font-semibold" data-bs-dismiss="modal">
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
				iconMusic.src = "../../assets/icons/tema2/floating_music_play.svg"
				iconMusic.classList.add('animate-spin-slow')
			} else {
				song.pause();
				iconMusic.src = "../../assets/icons/tema2/floating_music_paused.svg"
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
			document.getElementById("floatingButton").classList.remove("hidden")
			// Play Song
			song.play();

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {
				scrollFunction();
			};

			function scrollFunction() {
				if (
					document.body.scrollTop > 100 ||
					document.documentElement.scrollTop > 100
				) {
					bottomNavigation.classList.remove("hidden");
				} else {
					bottomNavigation.classList.add("hidden");
				}

			}

		}

		// Magnify Galery Zoom
		$("[data-magnify=gallery]").magnify();

		// hitung tanggal akurat 99 hari
		// Set the date we're counting down to
		var countDownDate = new Date("Mar 21, 2023 09:50:25").getTime();

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
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.stroke = "#E8E8CF"
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.strokeWidth = "2px"
				} else {
					document.querySelector(".tabs a[href*=" + sectionId + "]").style.stroke = "#cfc796"
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
