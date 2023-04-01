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
	<link href="<?= base_url('assets/style/tema-2-basic-1.css') ?>" rel="stylesheet" />

	<!-- Tailwind Elements -->
	<script src="<?= base_url() ?>assets/vendor/tw-elements/dist/js/index.min.js"></script>

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/jquery.magnify.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/magnify-white-theme.css" rel="stylesheet" />

	<link href="<?= base_url() ?>assets/vendor/magnify-master/docs/css/docs.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/magnify-master/docs/js/jquery.magnify.js"></script>

	<!-- AOS -->
	<link href="<?= base_url() ?>assets/vendor/aos/dist/aos.css" rel="stylesheet">
	<script src="<?= base_url() ?>assets/vendor/aos/dist/aos.js"></script>


	<title>Tema 2 Basic</title>



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
			src: url("<?= base_url() ?>assets/fonts/HappyPatrick.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "LowBudget";
			src: url("<?= base_url() ?>assets/fonts/LowBudget.ttf");
			font-display: block;
		}

		@font-face {
			font-family: "Oomph";
			src: url("<?= base_url() ?>assets/fonts/Oomph.ttf");
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
	</style>

</head>

<body class="font-Montserrat bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-tema2-dark via-tema2-primary to-tema2-dark bg-opacity-60 text-tema2-light">

	<!-- Demo Watermark -->
	<div class="">
		<div class="fixed z-50 top-1 right-1 lg:top-2 lg:right-2">
			<img class="w-20 lg:w-28" src="<?= base_url('assets/icons/app/watermark_demo.svg') ?>" alt="">
		</div>
	</div>
	<!-- Demo Watermark End -->

	<!-- floating button -->
	<div id="floatingButton" class="hidden fixed right-5 bottom-28 z-10 md:right-12 w-10 md:-16 lg:w-12">
		<div class="justify-between w-10 md:w-16 lg:w-12 mx-auto lg:py-3 block lg:mx-0 lg:ml-5">
			<button class="w-full h-full bg-tema2-light shadow-lg rounded-full border border-tema2-semi-dark hover:text-tema2-light focus:text-tema2-light justify-center inline-block text-center pt-2 pb-2 mb-3" data-bs-toggle="modal" data-bs-target="#modalGiftCard">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px]" src="<?= base_url('assets/icons/tema2/floating_gift_dark.svg') ?>" alt="">
				</div>
			</button>
			<button class="w-full bg-tema2-light shadow-lg border border-tema2-semi-dark rounded-full hover:text-tema2-light focus:text-tema2-light justify-center inline-block text-center pt-2 pb-2 mb-2">
				<div class="flex">
					<img class="mx-auto my-auto w-[20px] h-[20px] 2xs:w-[24px] 2xl:h-[24px] 1xs:w-[28px] 1xl:h-[28px] md:w-10 md:h-10 lg:w-[26px] lg:h-[26px] animate-spin-slow" src="<?= base_url('assets/icons/tema2/floating_music_play_dark.svg') ?>" alt="" id="iconMusic">
				</div>

				<audio id="song" loop>
					<source src="<?= base_url('assets/music/MarryYourDaughter.mp3') ?>" type="audio/mp3">
				</audio>
			</button>
		</div>
	</div>
	<!-- floating button End -->

	<!-- Sampul -->
	<div class="sampul text-center z-0 bg-tema2-dark min-h-[100vh] max-h-max lg:border border-dashed border-tema2-light/60 border-b-transparent" id="sampul">

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
				<h1 class="mt-8 2xs:mt-12 sm:mt-14 lg:mt-24 text-2xl 2xs:text-3xl sm:text-4xl lg:text-3xl font-HappyPatrick text-tema2-light">
					The Wedding Of
				</h1>

				<div>
					<h1 class="mt-12 sm:mt-12 font-LowBudget text-2xl 2xs:text-3xl sm:text-4xl lg:text-3xl text-tema2-light tracking-widest">
						Runa & Ratna
					</h1>

					<div class="border relative mt-20 mb-10 rounded-3xl border-tema2-light">
						<div class="flex absolute -bottom-4 -left-10 rotate-180">
							<img src="<?= base_url('assets/ilustrations/tema2/ils_sampul1.svg') ?>" class="">
						</div>
						<div class="flex absolute -bottom-4 -right-10 -rotate-90">
							<img src="<?= base_url('assets/ilustrations/tema2/ils_sampul1.svg') ?>" class="">
						</div>
					</div>
					<p class="mt-1 sm:mt-3 text-xl 2xs:text-2xl sm:text-4xl lg:text-2xl text-tema2-light font-Oomph tracking-widest">
						22 <span class="font-normal text-base 2xs:text-xl sm:text-2xl lg:text-base">Januari
						</span><span>2022</span>
					</p>
				</div>

				<div class="">
					<div class="flex">
						<div class="border border-tema2-light bg-tema2-semi-light px-8 2xs:px-10 sm:px-14 lg:px-10 py-3 sm:py-5 lg:py-2 rounded-2xl sm:rounded-3xl lg:rounded-2xl mt-8 mx-auto text-xs 2xl:text-sm sm:text-xl lg:text-sm text-tema2-dark">
							<div class="attribute">
								<p class="mb-2 lg:mb-0">Kepada Yth</p>
								<p>Bapak/Ibu/Saudara/I</p>
								<p class="mt-2 lg:mt-0 text-base-xs 2xs:text-base-md sm:text-2xl lg:text-base-md font-semibold">
									Tegar Kusuma
								</p>
							</div>
						</div>
					</div>
					<p class="text-tema2-light leading-4 lg:leading-3 my-3 text-base-2xs 2xs:text-base-1xs sm:text-base-md lg:text-base-1xs">
						*Mohon Maaf Bila Ada Kesalahan Dalam <br> Penulisan Nama dan Gelar</p>
				</div>

				<div class="flex">
					<a href="#sambutan" onclick="showMainPage()" id="btnOpen" role="button" class="font-MontserratBold font-medium text-tema2-light text-base-xs 2xs:text-sm sm:text-xl lg:text-base-xs w-fit bg-tema2-semi-dark hover:bg-tema2-dark border border-tema2-light rounded-xl sm:rounded-2xl lg:rounded-xl mx-auto transition delay-150 animate-bounce flex justify-center mt-8 mb-8 sm:mt-16 lg:mt-8 px-8 lg:px-8 py-1.5 2xs:py-2.5 sm:py-4 lg:py-1" data-role="link">
						<img src="<?= base_url('assets/icons/tema1/cover_icon_unlock.svg') ?>" alt="" class="mr-3 w-3">
						<p>Buka Undangan</p>
					</a>
				</div>
			</div>
		</div>

	</div>

	<img src="<?= base_url('assets/ilustrations/tema2/ils_sampul2.svg') ?>" class="absolute left-0 -mt-20 2xs:bottom-1 lg:bottom-0 w-20 2xs:w-32 sm:w-60">
	<img src="<?= base_url('assets/ilustrations/tema2/ils_sampul2.svg') ?>" class="absolute right-0 -mt-20 2xs:bottom-3 lg:bottom-3 w-20 2xs:w-32 sm:w-60 -rotate-90">
	</div>
	<!-- Sampul End-->

	<div class="mainPage main-page-transition hidden" id="mainPage">

		<!-- Sambutan -->
		<section class="pb-8 pt-8 lg:pt-0 px-6 1xs:px-16 md:px-24 lg:px-72 relative" id="sambutan">
			<div class="flex justify-center items-center text-center">
				<img class="absolute right-0 md:right-20 -top-1" src="<?= base_url('assets/ilustrations/tema2/ils_sambutanpin.svg') ?>" alt="">
				<div class="text-base-xs 2xs:text-base-sm 1xs:text-base-md md:text-[26px] lg:text-base lg:leading-6 text-tema2-light">
					<div class="flex" data-aos="zoom-in" data-aos-duration="1000">
						<img src="<?= base_url('assets/icons/tema2/sambutan_bismillah_white.svg') ?>" class="mx-auto mb-4 lg:mt-5 md:mb-7 w-[160px] 2xs:w-[180px] 1xs:w-[210px] md:w-[260px] lg:w-[250px]" alt="">
					</div>
					<h1 class=" mb-5 md:mb-7 opacity-95 font-MontserratBold text-base-md 1xs:text-md md:text-3xl lg:text-xl text-tema2-light" data-aos="zoom-in" data-aos-duration="1000">Assalamu’alaikum warahmatullahi wabarakatuh</h1>
					<p class="text-justify lg:text-center" data-aos="zoom-in" data-aos-duration="1000">
						Maha Suci Allah SWT yang telah menciptakan Mahluknya berpasang-pasangan, ya Alloh semoga
						ridho-mu tercurah mengiringi pernikahan putra-putri kami :
					</p>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-LowBudget tracking-widest text-1xl 2xs:text-2xl sm:text-3xl md:text-[50px] lg:text-3xl text-tema2-semi-light saturate-150 contrast-150" data-aos="zoom-in" data-aos-duration="1000">
						<p class="">Runa Vha Ningit</p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/runvhan/" class="mx-auto my-3 md:my-5 lg:my-3 opacity-90 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url() ?>assets/icons/tema2/sambutan_insta.svg" alt="">
						</a>
					</div>
					<p class="font-MontserratBold" data-aos="zoom-in" data-aos-duration="1000">
						Putra Kedua Bpk. Iwan Yuli Widianto & Ibu Heny Margarini
					</p>
					<p class="font-MontserratBold opacity-80 mt-5 md:mt-8 text-sm 2xs:text-base-md md:text-[30px] lg:text-lg " data-aos="zoom-in" data-aos-duration="1000">dengan</p>
					<div class="text-center font-semibold mt-5 lg:mt-10 font-LowBudget tracking-widest text-1xl 2xs:text-2xl sm:text-3xl md:text-[50px] lg:text-3xl text-tema2-semi-light saturate-150 contrast-150" data-aos="zoom-in" data-aos-duration="1000">
						<p class="">Ratna Sari Astuti</p>
					</div>
					<div class="flex " data-aos="zoom-in" data-aos-duration="1000">
						<a target="_blank" href="https://www.instagram.com/ratnasariastt/" class="mx-auto my-3 md lg:my-3:my-8 opacity-90 hover:opacity-100">
							<img class="w-5 md:w-8 lg:w-6" src="<?= base_url() ?>assets/icons/tema2/sambutan_insta.svg" alt="">
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
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="<?= base_url() ?>assets/icons/tema2/resepsi_pin.svg" />
							<div class="pt-3 pb-5 px-3 md:pt-8 md:pb-8 lg:px-3  font-semibold text-base-xs 2xs:text-base-sm md:text-[26px]  lg:text-base-md text-tema2-light/90 tracking-wider">
								<h1 class=" mb-3 md:mb-8 font-MontserratBold text-base 2xs:text-md 1xs:text-tiny md:text-[30px] lg:text-xl">
									Tasyakuran</h1>
								<p class="mb-1 text-tema2-light">Jum'at, 21 Oktober 2022</p>
								<p class="mb-2 text-tema2-light">10.00 WIB - Selesai</p>
								<p class=" text-tema2-light mb-3">Jl. Pramuka Timur No.213 RT.02 RW.01 No.213 RT.02 RW.01
								</p>
								<p class="text-tema2-semi-light text-base-1xs 2xs:text-base-xs md:text-xl lg:text-sm">(Kediaman Mempelai Pria)
								</p>
							</div>
						</div>
						<!-- Card Tasyakuran End -->
						<!-- Card Akad -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema2-semi-light/30 shadow-sm shadow-tema2-semi-light/20 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark relative" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="<?= base_url() ?>assets/icons/tema2/resepsi_pin.svg" />
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
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons/tema2/resepsi_loc.svg" alt="">
											<p class="text-xs md:text-xl lg:text-sm">Google Map</p>
										</div>
									</button>
								</a>
							</div>
						</div>
						<!-- Card Akad End-->
						<!-- Card Resepsi -->
						<div class="lg:w-[27vw] mt-5 md:mt-8 items-center border border-tema2-semi-light/30 shadow-sm shadow-tema2-semi-light/20 rounded-2xl lg:rounded-3xl  bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-tema2-semi-dark via-tema2-semi-dark/60 to-tema2-semi-dark relative" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
							<img class="absolute w-6 md:w-10 lg:w-6 right-3 -top-3 opacity-60" src="<?= base_url() ?>assets/icons/tema2/resepsi_pin.svg" />
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
											<img class="mr-3" width="14" height="14" src="<?= base_url() ?>assets/icons/tema2/resepsi_loc.svg" alt="">
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
									<?= form_open("#", ['id' => 'submit-message']) ?>
									<input type="hidden" name="guest_name" value="Tamu Undangan">
									<input type="hidden" id="invtId" name="invt_id" value="0">
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
								<?= form_close() ?>
								<div class="">
									<div>
										<p class="opacity-70 font-semibold tracking-wide mb-3 md:mb-5 mt-4 md:mt-8 text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[27px] lg:text-base lg:leading-6">
											Total Pesan : <span id="count_message"> </span>
										</p>
									</div>
									<div class="overflow-y-scroll h-[350px] xl:h-[250px] border border-tema2-semi-light/60 cursor-all-scroll rounded-md bg-tema2-light/10 shadow-sm lg:shadow-md shadow-tema2-semi-light/50 border-r-tema2-semi-light mb-5">
										<div class="mx-3 mb-3">
											<div id="display_message"></div>
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
								<div class="flex mr-5 animate-wiggleLeft"><img src="<?= base_url() ?>assets/ilustrations/tema2/pesan_bahagia_left.svg" class="w-60 md:w-80 mx-auto mb-4 " alt=""></div>
								<div class="flex mr-5"><img src="<?= base_url() ?>assets/ilustrations/tema2/pesan_bahagia_top.svg" class="w-60 md:w-80 mx-auto mb-4" alt=""></div>
								<div class="flex animate-wiggleRight"><img src="<?= base_url() ?>assets/ilustrations/tema2/pesan_bahagia_right.svg" class="w-60 md:w-80 mx-auto mb-4" alt=""></div>
							</div>
							<h1 class="font-HappyPatrick tracking-wide text-xl 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-3xl mb-1 lg:mb-3 opacity-80 text-center ">
								Terimakasih</h1>
							<p class="text-sm 2xs:text-base-sm 1xs:text-base-md md:text-[22px] lg:text-base lg:leading-6 text-center">
								Atas Do'a Restunya</p>
							<div class="text-center mt-8 font-LowBudget tracking-widest text-xl 2xs:text-2xl sm:text-3xl md:text-4xl lg:text-3xl text-tema2-semi-light">
								<p class="">Runa & Ratna</p>
							</div>
							<div class="flex my-10 opacity-80"><img src="<?= base_url() ?>assets/ilustrations/tema2/pesan_bahagia_bot.svg" class="mx-auto mb-4 w-[180px] md:w-[230px] lg:w-[250px]" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Pesan Bahagia End-->

		<footer class="p-4 bg-tema2-dark rounded-t-3xl shadow md:px-2 md:py-4 xl:mt-0">
			<div class="flex justify-center items-center">
				<div class="flex ml-3 text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[22px] lg:text-base">
					<div class="flex justify-center items-center w-1/2 mr-5">
						<a target="_blank" href="https://metashare.paralogy.id/" class="">
							<img src="<?= base_url() ?>assets/icons/app/logo_metashare.png" class="mr-3 w-[100px] md:w-36" alt="Metashare Logo">
							<p class="self-center text-[10px] text-tema2-light md:text-base-xs lg:text-sm whitespace-nowrap">
								Powered By Paralogy</p>
						</a>
					</div>
					<div class="md:flex md:justify-between gap-3">
						<div class="flex justify-center items-center w-1/2 ml-5 mb-1 md:mb-0">
							<a target="_blank" href="https://www.instagram.com/metasharee/" class="flex hover:contrast-150 hover:saturate-150 hover:text-ping-200">
								<img src="<?= base_url() ?>assets/icons/tema2/footer_insta.svg" class="mr-1.5 h-3 2xs:h-4 md:h-6 md:mt-1 lg:h-5 lg:mt-0" alt="Whatsapp Logo">
								<span class="self-center text-pink-300 whitespace-nowrap">Instagram</span>
							</a>
						</div>
						<div class="flex justify-center items-center w-1/2 ml-5">
							<a target="_blank" href="https://api.whatsapp.com/send/?phone=6287899703471&text=Saya tertarik untuk bikin undangan" class="flex hover:contrast-150 hover:saturate-150 hover:text-green-400">
								<img src="<?= base_url() ?>assets/icons/tema1/wa.png" class="mr-1.5 h-3 2xs:h-4 md:h-6 md:mt-1 lg:h-5 lg:mt-0" alt="Whatsapp Logo">
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
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bca.svg" alt="bca"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBca">1342179716</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBca'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bca end-->
					<!-- content card bri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bri.svg" alt="bri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bri end-->
					<!-- content card mandiri-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_mandiri.svg" alt="mandiri"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noMandiri">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noMandiri'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card mandiri end-->
					<!-- content card bsi-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bsi.svg" alt="bsi"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBsi">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBsi'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card bsi end-->
					<!-- content card bni-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_bni.svg" alt="bni"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noBni">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noBni'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card end bni-->
					<!-- content card cimbniaga-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_cimbniaga.svg" alt="cimbniaga"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noCimbniaga">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noCimbniaga'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
								</div>
							</div>
						</div>
					</div>
					<!-- content card cimbniagaend-->
					<!-- content card dana-->
					<div class="rounded-lg p-4 my-5 tracking-widest shadow-md shadow-tema2-light/10 border border-tema2-light/30">
						<div class="px-2 py-3">
							<div class=""><img class="w-20" src="<?= base_url() ?>assets/icons/app/i_gift_card_va_dana.svg" alt="dana"></div>
							<div class="flex mt-4">
								<div>
									<p class="font-semibold mr-3 text-base-xs 2xs:text-base-md 1xs:text-sm md:text-[20px] lg:text-base-sm lg:leading-6 text-tema2-light" id="noDana">9999999</p>
								</div>
								<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-3 2xs:h-4" src="<?= base_url() ?>assets/icons/tema1/copy.svg" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('noDana'); return false;"></button>
							</div>
							<div>
								<p class="text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[15px] lg:leading-6 font-normal text-tema2-light">
									a.n. <span class="text-tema2-light">Runa Vha Ningit </span></p>
							</div>
							<div class="shadow-sm p-1 shadow-tema2-semi-light/20 my-4 -mx-6"></div>
							<div class="qr-code">
								<div class="flex items-center justify-center">
									<img class="h-32" src="<?= base_url('assets/images/example-barcode.png') ?>" alt="">
								</div>
								<div class="flex items-center justify-center mt-3">
									<button class="px-3 py-1 font-Montserrat font-semibold border border-tema2-semi-light/60 text-tema2-semi-light mx-auto hover:bg-tema2-semi-light/80 hover:text-white transition delay-150 rounded-md text-base-1xs 2xs:text-base-xs 1xs:text-base-sm md:text-[16px] lg:text-[14px] lg:leading-6" onclick="fetchFile('<?= base_url('assets/images/example-barcode.png') ?>')">Simpan</button>
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
				iconMusic.src = "<?= base_url() ?>assets/icons/tema1/floating_music_play.svg"
				iconMusic.classList.add('animate-spin-slow')
			} else {
				song.pause();
				iconMusic.src = "<?= base_url() ?>assets/icons/tema1/floating_music_paused.svg"
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

		// Save Barcode File
		function fetchFile(url) {
			fetch(url).then(res => res.blob()).then(file => {
				let tempUrl = URL.createObjectURL(file);
				const aTag = document.createElement("a");
				aTag.href = tempUrl;
				aTag.download = url.replace(/^.*[\\\/]/, '');
				document.body.appendChild(aTag);
				aTag.click();
				// downloadBtn.innerText = "Download File";
				URL.revokeObjectURL(tempUrl);
				aTag.remove();
			}).catch(() => {
				alert("Failed to download file!");
				// downloadBtn.innerText = "Download File";
			});
		}

		$(document).ready(function() {
			load_comment();
			load_count_comment();
			$("#submit-message").submit(function(e) {
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
					url: "<?= base_url('undangan/get_message_demo_dark_special?id=') ?>" + id,
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
