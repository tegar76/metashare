<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wedding <?= $invitation->groom_nickname . ' & ' . $invitation->bride_nickname ?></title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">

	<!-- Css -->
	<link rel="stylesheet" href="<?= base_url('src/style/css/style32.css') ?>">

	<!-- Hitung tanggal -->
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<!-- Tailwind Elements -->
	<script src="<?= base_url('src/style/tailwindCss/node_modules/tw-elements/dist/js/index.min.js') ?>"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<!-- SweetAlert 2 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.min.css">
	<script src="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.all.min.js"></script>

	<style>
		/****   
            page-anim.css
        ****/

		[data-page] {
			position: fixed;
			/* or absolute if the content exceeds the height of the page */
			transform: translate3d(0, 100%, 0);
			opacity: 0;
			transition: transform 1s ease-in, opacity 1s ease-in;
			z-index: 0;
		}

		[data-page].onLoad {
			position: absolute;
			transform: translate3d(0, 0, 0);
			transition: transform 1s ease-in, opacity 1s ease-in;
			opacity: 1;
			z-index: 1;
		}

		[data-page].active {
			position: absolute;
			transform: translate3d(0, 0, 0);
			transition: transform 0s ease-in, opacity 0s ease-in;
			opacity: 1;
			z-index: -10;
		}

		.transition-page {
			height: 50px;
			background: linear-gradient(#b5b5b5, #DBDBDB, #E4E2E2, #F2EFEF, #FAFAFA, #FAFAFA);
		}

		.transition-page-top {
			height: 30px;
			background: linear-gradient(#f9fafa, #f1f7f7, #e8ecf5);
		}

		.modal-foto {
			transition: opacity 0.25s ease;
		}

		body.modal-foto-active {
			overflow-x: hidden;
			overflow-y: visible !important;
		}
	</style>

</head>

<body class="font-Montserrat">
	<header>
		<nav>
			<!-- Nav -->
			<div id="bottom-navigation" class="hidden fixed inset-x-0 bottom-3 z-0 lg:top-3/10 lg:w-14 lg:h-fit ">
				<div id="tabs" class="tabs bg-[#fffdf7] border border-sky-800/30 shadow-lg flex rounded-3xl w-[60%] mx-auto lg:w-14 lg:h-fit lg:py-3 lg:shadow-md lg:block lg:mx-0 lg:ml-5">
					<a href="#home" class="w-full opacity-70  focus:opacity-100 hover:opacity-100 justify-center inline-block text-center pt-3 pb-3">
						<div class="flex">
							<img class="mx-auto my-auto w-5 h-5" src="<?= base_url('assets/icons/nav_cover_selected.svg') ?>" alt="">
						</div>
					</a>
					<a href="#sambutan" class="w-full  opacity-70 focus:opacity-100 hover:opacity-100 justify-center inline-block text-center pt-3 pb-3 xl:hidden">
						<div class="flex">
							<img class="mx-auto my-auto w-5 h-5" src="<?= base_url('assets/icons/nav_sambutan_selected.svg') ?>" alt="">
						</div>
					</a>
					<a href="#tanggalResepsi" class="w-full  opacity-70 focus:opacity-100 hover: hover:opacity-100 justify-center inline-block text-center pt-3 pb-3">
						<div class="flex">
							<img class="mx-auto my-auto w-5 h-5" src="<?= base_url('assets/icons/nav_tgl_resepsi_selected.svg') ?>" alt="">
						</div>
					</a>
					<a href="#foto" class="w-full  opacity-70 focus:opacity-100 hover: hover:opacity-100 justify-center inline-block text-center pt-3 pb-3">
						<div class="flex">
							<img class="mx-auto my-auto w-5 h-5" src="<?= base_url('assets/icons/nav_foto_selected.svg') ?>" alt="">
						</div>
					</a>
					<a href="#pesanBahagia" class="w-full  opacity-70 focus:opacity-100 hover: hover:opacity-100 justify-center inline-block text-center pt-3 pb-3">
						<div class="flex">
							<img class="mx-auto my-auto w-5 h-5" src="<?= base_url('assets/icons/nav_pesan_bahagia_selected.svg') ?>" alt="">
						</div>
					</a>
				</div>
			</div>
			<!-- Nav End -->
		</nav>

		<!-- floating button -->
		<div id="floating-button" class="fixed right-5 bottom-28 z-0 lg:bottom-7/10 lg:left-3 w-10 ">
			<div class="justify-between w-10 mx-auto lg:py-3 block lg:mx-0 lg:ml-5">
				<button class="w-full h-full bg-yellow-100 shadow-lg border border-yellow-300 rounded-full hover:bg-yellow-200 justify-center inline-block text-center pt-2 pb-2 mb-3" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalGiftCard">
					<div class="flex">
						<img class="mx-auto my-auto w-5 h-5 opacity-80" src="<?= base_url('assets/icons/floating_gift_card.svg') ?>" alt="">
					</div>
				</button>
				<button class="w-full bg-sky-200 shadow-lg border border-blue-300 rounded-full hover:bg-sky-300 focus:bg-sky-300 justify-center inline-block text-center pt-2 pb-2 mb-2">
					<div class="flex">
						<img class="mx-auto my-auto animate-spin-slow w-5 h-5" src="<?= base_url('assets/icons/floating_music_play.svg') ?>" alt="" id="iconMusic">
					</div>

					<audio id="song" loop>
						<source src="<?= base_url('storage/invitations/uploads/' . $invitation->music_bg) ?>" type="audio/mp3">
					</audio>
				</button>
			</div>
		</div>
		<!-- floating button End -->
	</header>

	<main>

		<div id="cover" data-page="cover" class="cover onLoad w-screen h-screen bg-center bg-cover bg-no-repeat overflow-hidden bg-sampul" style=" position: fixed;">
			<div class="cover-content block w-full h-full content-center">
				<div class="w-[250px]  mx-auto">
					<!-- <img src="<?= base_url('assets/img/cover_250x250.png') ?>" class="mx-auto mt-14 rounded-full shadow-lg border-b-8 border-slate-800/30" alt="" style="width: 140px; height: 140px;"> -->
					<img src="<?= base_url('storage/invitations/uploads/' . $invitation->cover_image_1) ?>" class="mx-auto mt-14 rounded-full shadow-lg border-b-8 border-slate-800/30" alt="" style="width: 140px; height: 140px;">
				</div>
				<div class="text-center mt-8 font-BacktoBlack tracking-wide text-3xl text-[#e7a528] contrast-[1.3]">
					<p class=""><?= $invitation->groom_nickname; ?> <span class="mr-2">&</span><span><?= $invitation->bride_nickname ?></span></p>
				</div>
				<div class="">
					<div class="flex">
						<div class="text-center border border-slate-800/20 bg-white/30 px-9 py-3 rounded-xl mt-8 mx-auto  text-sm text-cyan-800">
							<div class="attribute">
								<p class="mb-2">Kepada Yth</p>
								<p>Bapak/Ibu/Saudara/I</p>
								<p class="mt-2 font-extrabold text-[16px]"><?= (!empty($guest) ? $guest : '-') ?></p>
							</div>
						</div>
					</div>
					<p class="text-slate-500  text-[10px] leading-4 my-3 text-center">*Mohon Maaf Bila Ada Kesalahan Dalam <br> Penulisan Nama dan Gelar</p>
				</div>
				<div class="flex">
					<a href="#home" role="button" class="text-center  font-semibold text-white mt-12 py-2 px-4 w-fit bg-sky-800 bg-opacity-40 hover:bg-sky-900/50 rounded-xl mx-auto transition delay-150 animate-bounce" data-role="link">
						<div class="text-sm flex"> <img src="<?= base_url('assets/icons/cover_icon_unlock.svg') ?>" alt="" class="mr-3 w-3">
							<p>Buka Undangan</p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="content mb-20 lg:mb-0" id="home" data-page="home">
			<section id="home" class="">
				<div class="content-cover relative w-screen h-screen bg-cover bg-top bg-no-repeat overflow-hidden lg:w-[100%] bg-cover-full lg:bg-cover-crop lg:bg-[position:top] shadow-md shadow-['#b5b5b5']">
					<div class="">
						<div class="">
							<p class="font-GreatVibes font-semibold text-xl text-[#f0e3bb] text-center tracking-widest mt-16 mx-16 lg:text-2xl sm:mx-[15rem] md:mx-[20rem] lg:mx-[25rem] xl:mx-[30rem]">Mengundang Anda Dengan Hormat Dalam Pernikahan Kami</p>
						</div>
						<div class="absolute inset-0 items-center justify-center top-36 bg-white bg-opacity-10 border border-[white] border-opacity-40 w-60 h-44 rounded-lg  text-center my-auto mx-auto font-BacktoBlack text-4xl text-[#e7a528] shadow-[#ec26905e] shadow-sm">
							<div class="bg-white bg-opacity-10 border border-[white] border-opacity-40 w-full h-full my-auto rounded-lg text-center mx-auto -rotate-12 font-BacktoBlack text-4xl text-[#e7a528] shadow-[#1774f554] shadow-sm">
								<div class="rotate-12 mt-5 contrast-[1.3] tracking-widest">
									<p class="mb-2"><?= $invitation->groom_nickname ?></p>
									<p class="mb-2">&</p>
									<p class="mb-2"><?= $invitation->bride_nickname ?></p>
								</div>
							</div>
						</div>
						<div class="absolute inset-0 flex items-center justify-center top-[500px] text-white tracking-widest font-semibold " x-data="countdown()" x-init="start()">
							<div class="text-center block columns-4">
								<div class="w-12 h-10 px-2 py-1 border border-white/50 bg-yellow-100/20  rounded-lg mb-4 flex items-center justify-center">
									<div>
										<div class=" leading-none text-[20px] text-white font-semibold" x-text="days">00</div>

									</div>

								</div>
								<div class="text-white text-sm leading-none">Hari</div>
								<div class="w-12 h-10 px-2 py-1 border border-white/50 bg-yellow-100/20   rounded-lg mb-4 flex items-center justify-center">
									<div>
										<div class=" leading-none text-[20px] text-white font-semibold" x-text="hours">00</div>

									</div>

								</div>
								<div class=" text-white  text-sm leading-none">Jam</div>
								<div class="w-12 h-10 px-2 py-1 border border-white/50 bg-yellow-100/20   rounded-lg mb-4 flex items-center justify-center">
									<div>
										<div class=" leading-none text-[20px] text-white font-semibold" x-text="minutes">00</div>

									</div>

								</div>
								<div class=" text-white  text-sm leading-none">Menit</div>
								<div class="w-12 h-10 px-2 py-1 border border-white/50 bg-yellow-100/20   rounded-lg mb-4 flex items-center justify-center">
									<div>
										<div class=" leading-none text-[20px] text-white font-semibold" x-text="seconds">00</div>

									</div>

								</div>
								<div class=" text-white text-sm leading-none">Detik</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<div class="content-main text-slate-900 font-medium text-center bg-primary-sm xl:bg-center bg-cover">
				<div class="pb-10 pt-5">

					<div class="xl:flex">
						<section id="sambutan" class="xl:w-[70%]">
							<div class="mx-5 lg:ml-28 lg:mx-0">

								<div id="objekSambutan">
									<div class="flex opacity-80"><img src="<?= base_url('assets/icons/sambutan_bismillah.svg') ?>" class="mx-auto my-4 w-[180px] lg:w-[250px]" alt=""></div>
									<h1 class="font-MontserratBold text-base mb-3 opacity-95 lg:text-xl text-center ">Assalamu’alaikum warahmatullahi wabarakatuh</h1>
									<p class="text-sm lg:text-base lg:leading-6 text-slate-700">
										Maha Suci Allah SWT yang telah menciptakan Mahluknya berpasang-pasangan, ya Alloh semoga ridho-mu tercurah mengiringi pernikahan putra-putri kami :
									</p>
									<div class="flex">
										<img src="<?= base_url('storage/invitations/uploads/' . $invitation->groom_img) ?>" alt="" class="w-[120px] lg:w-[130px] xl:w-[140px] mx-auto mt-3">
									</div>
									<div class="text-center font-semibold mt-5 font-BacktoBlack tracking-widest text-2xl lg:text-3xl text-[#e7a528]">
										<p class=""><?= $invitation->groom_name ?></p>
									</div>
									<div class="flex ">
										<a target="_blank" href="https://www.instagram.com/<?= $invitation->groom_ig ?>" class="mx-auto my-3 opacity-40 hover:bg-pink-300 hover:opacity-80">
											<img src="<?= base_url('assets/icons/sambutan_insta.svg') ?>" alt="" style="width: 22px;">
										</a>
									</div>
									<p class="text-sm text-center text-slate-800 lg:text-tiny">
										Putra <?= $invitation->groom_son ?> Bpk. <?= $invitation->groom_father ?> & Ibu <?= $invitation->groom_mother ?>
									</p>
									<p class="font-MontserratBold text-tiny opacity-70 mt-5 lg:text-xl text-center">dengan</p>
									<div class="flex">
										<img src="<?= base_url('storage/invitations/uploads/' . $invitation->bride_img) ?>" alt="" class="mx-auto mt-3 w-[120px] lg:w-[130px] xl:w-[140px]">
									</div>
									<div class="text-center font-semibold mt-5 font-BacktoBlack tracking-widest text-2xl lg:text-3xl text-[#e7a528]">
										<p class=""><?= $invitation->bride_name ?></p>
									</div>
									<div class="flex ">
										<a target="_blank" href="https://www.instagram.com/<?= $invitation->bride_ig ?>" class="mx-auto my-3 opacity-40 hover:bg-pink-300 hover:opacity-80">
											<img src="<?= base_url('assets/icons/sambutan_insta.svg') ?>" alt="" style="width: 22px;">
										</a>
									</div>
									<p class="text-sm text-center  lg:text-tiny text-slate-800">
										Putri <?= $invitation->bride_daughter; ?> Bpk. <?= $invitation->bride_father ?> & Ibu <?= $invitation->bride_mother ?>
									</p>
									<p class="text-sm mt-5 lg:text-base lg:leading-6 text-slate-700">
										Untuk Melaksanakan Sunah Rosul-mu dalam membentuk Keluarga Sakinah, Mawadah dan Warohmah
									</p>
								</div>
							</div>
						</section>
						<section id="tanggalResepsi" class="xl:mt-7 xl:ml-3">
							<div class="bg-resepsi bg-no-repeat bg-cover bg-center xl:bg-transparent xl:bg-none xl:shadow-none">
								<div class="mx-8 pt-8" id="objekResepsi">
									<p class="font-MontserratBold opacity-80 mb-3 text-center text-base-md lg:text-base">Insya Allah Akan Dilaksanakan Pada :</p>
									<div class="mt-5 items-center border border-sky-800 border-opacity-30 rounded-xl  bg-white bg-opacity-20">
										<img class=" absolute  w-10 lg:w-14 opacity-30" src="<?= base_url('assets/icons/sambutan_flower3.svg') ?>" />
										<div class=" pt-3 pb-5 px-12 lg:px-3">
											<h1 class="font-MontserratBold font-semibold text-tiny mb-3 opacity-60 lg:text-xl">Tasyakuran</h1>
											<p class="mb-1 text-center"><?= $acara['tasyakur']['tanggal']; ?></p>
											<p class="mb-1 text-center"><?= $acara['tasyakur']['waktu']; ?> - Selesai</p>
											<p class="text-sm mt-2 text-slate-800"><?= $acara['tasyakur']['alamat']; ?></p>
											<p class="text-sm text-slate-600">(Kediaman Mempelai Pria)</p>
											<a target="_blank" href="<?= $acara['tasyakur']['maps']; ?>">
												<button class="mt-3 px-4 py-2 rounded-lg bg-sky-800 bg-opacity-40 font-semibold hover:bg-sky-900/50 transition ease-in-out duration-500 text-white">
													<div class="flex justify-items-center">
														<img class="mr-3" width="14" height="14" src="<?= base_url('assets/icons/resepsi_loc.svg') ?>" alt="">
														<p class="text-xs lg:text-sm">Google Map</p>
													</div>
												</button>
											</a>
										</div>
									</div>
									<div class="mt-5 items-center border border-sky-800 border-opacity-20 rounded-xl bg-white bg-opacity-20">
										<img class=" absolute  w-10 lg:w-14 opacity-30" src="<?= base_url('assets/icons/sambutan_flower3.svg') ?>" />
										<div class=" pt-3 pb-5 px-12 lg:px-3">
											<h1 class="font-MontserratBold font-semibold opacity-60 text-tiny mb-3  lg:text-xl">Akad Nikah</h1>
											<p class="mb-1 text-center"><?= $acara['akad']['tanggal'] ?></p>
											<p class="mb-1 text-center"><?= $acara['akad']['waktu'] ?> - Selesai</p>
											<h1 class="font-MontserratBold font-semibold text-tiny mb-3 opacity-60 lg:text-xl mt-5 ">Resepsi</h1>
											<p class="mb-1 text-center"><?= $acara['akad']['tanggal'] ?></p>
											<p class="mb-1 text-center"><?= $acara['resepsi']['tanggal'] ?></p>
											<p class="mb-1 text-center"><?= $acara['resepsi']['waktu']; ?> - Selesai</p>
											<p class="text-sm mt-2 text-slate-800"><?= $acara['resepsi']['alamat'] ?></p>
											<p class="text-sm text-slate-600">(Kediaman Mempelai Wanita)</p>
											<a target="_blank" href="<?= $acara['resepsi']['maps']; ?>">
												<button class="mt-3 px-4 py-2 rounded-lg bg-sky-800 bg-opacity-40 font-semibold hover:bg-sky-900/50 transition ease-in-out duration-500 text-white">
													<div class="flex justify-items-center">
														<img class="mr-3" width="14" height="14" src="<?= base_url('assets/icons/resepsi_loc.svg') ?>" alt="">
														<p class="text-xs lg:text-sm">Google Map</p>
													</div>
												</button>
											</a>
										</div>
									</div>
									<p class="mt-3 text-slate-700">Atas kehadiran serta doa restunya kami ucapkan terimakasih</p>
									<h1 class="font-MontserratBold mt-3 opacity-80 lg:text-lg text-center text-base-md">Wassalamu’alaikum warahmatullahi wabarakatuh</h1>
									<!-- link maps tasyakuran -->
									<!-- https://goo.gl/maps/HyxMYiBshiDf29f27 -->
								</div>
							</div>
						</section>
					</div>
				</div>
				<section id="foto" class="">
					<div class="mb-5 mx-5 xl:mr-10 pt-8">
						<div class="relative">
							<img class="mx-auto w-[120px] h-[16px] opacity-70 lg:h-[20px] lg:w-[150px]" src="<?= base_url('assets/bg_img/bg_title_foto.png') ?>" />
							<h1 class="absolute font-BacktoBlack text-2xl lg:text-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-70">
								Galeri Foto</h1>
						</div>

						<div class="border-2 border-dashed border-sky-800/40 shadow-md shadow-slate-400/40 pb-3 mt-12 px-5 lg:px-8 lg:pt-10 pt-5 rounded-xl relative bg-white bg-opacity-20 xl:ml-28">
							<img class="h-6 absolute right-1/4 -top-3 opacity-60 lg:h-8 lg:-top-4" src="<?= base_url('assets/icons/galeri_pin_foto.png') ?>" />
							<img class="h-6 absolute left-1/4 -top-3 opacity-60 lg:h-8 lg:-top-4" src="<?= base_url('assets/icons/galeri_pin_foto.png') ?>" />

							<div class="columns-2 gap-x-2 xl:gap-x-3 md:columns-5xs lg:columns-4xs xl:columns-3xs" id="objekFoto">
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300  aspect-w-5 aspect-h-3  mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[0]['img']; ?>" photo-id="<?= $photos[0]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[1]['img']; ?>" photo-id="<?= $photos[1]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[2]['img']; ?>" photo-id="<?= $photos[2]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[3]['img']; ?>" photo-id="<?= $photos[3]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[4]['img']; ?>" photo-id="<?= $photos[4]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[5]['img']; ?>" photo-id="<?= $photos[5]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-4 aspect-h-5 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[6]['img']; ?>" photo-id="<?= $photos[6]['id'] ?>" alt="photo">
								</div>
								<div class="modal-foto-open hover:contrast-50 hover:saturate-200 hover:shadow-xl  transition duration-300 aspect-w-5 aspect-h-3 mb-2 xl:mb-3">
									<img class="w-full  rounded-2xl view-photo border cursor-pointer hover:border-2 hover:border-blue-400" src="<?= $photos[7]['img']; ?>" photo-id="<?= $photos[7]['id'] ?>" alt="photo">
								</div>
							</div>

							<div class="mb-2">
								<div class="flex justify-center content-center mt-1 cursor-pointer">
									<img class=" h-[20px] xs:h-[30] lg:h-[35px] opacity-70" src="<?= base_url('assets/icons/galeri_antena_video.svg') ?>" alt="photo">
								</div>
								<div class="flex justify-center content-center ">
									<video class="gdriveVideo md:h-72 rounded-2xl view-photo cursor-pointer" preload="auto" controls poster="<?= $photos[1]['img'] ?>">
										<source src="<?= $invitation->link_video ?>" type='video/mp4'>
									</video>
								</div>
							</div>


						</div>
					</div>
				</section>
				<section class="mb-5 xl:bg-perjalanan-cinta-xl xl:bg-cover">
					<div class="mb-5 pt-12 xl:mr-10 xl:ml-28" id="perjalananCinta">
						<div class="mx-5">
							<div class="relative">
								<img class="mx-auto w-[140px] h-[16px] opacity-70 lg:h-[20px] lg:w-[170px]" src="<?= base_url('assets/bg_img/bg_title_foto.png') ?>" />
								<h1 class="absolute font-BacktoBlack text-2xl lg:text-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-70">
									Perjalanan Cinta</h1>
							</div>
							<div class="absolute right-5 opacity-60 w-20 xl:hidden">
								<img src="<?= base_url('assets/icons/percin_ilustrasi.svg') ?>" alt="">
							</div>
						</div>

						<div class="pt-8 pb-8 mt-5 lg:pt-10 relative ">
							<div class="xl:flex mx-5">
								<div class="xl:mr-8 xl:w-2/3">
									<ol class="relative border-l border-pink-600 border-opacity-30 ml-2">
										<?php $storyIncrement = 1; ?>
										<?php $increment = 1; ?>
										<?php foreach ($loveStories as $story) : ?>
											<li class="mb-10 ml-4">
												<div class="relative border border-sky-800 border-opacity-30 bg-yellow-50/20 ml-3 rounded-xl">
													<div class="absolute border bg-pink-100 border-sky-800 border-opacity-30 text-base-sm text-slate-500 tracking-widest font-semibold px-3 py-1 rounded-3xl left-1/2 transform -translate-x-1/2 -translate-y-1/2 -top-1">Kisah <?= $storyIncrement++ ?></div>
													<div class="mt-3">
														<div class="absolute w-7 h-7 text-white bg-gradient-to-b from-sky-400 to-blue-200 rounded-full -left-11 border border-white  opacity-70">
															<p class="font-MontserratBold font-bold"><?= $increment++ ?></p>
														</div>
														<div class="story mx-3">
															<?php
															$dateObj = DateTime::createFromFormat('!m', date('m', strtotime($story->date)));
															$month = $dateObj->format('F');
															$newDate = $month . ' ' . date('Y', strtotime($story->date));
															?>
															<time class="my-2 text-sm font-normal leading-none text-slate-600 "><?= $newDate; ?></time>
															<p class="mb-4 text-sm lg:text-base font-normal text-slate-800 text-justify"><?= $story->story ?></p>
														</div>
													</div>
												</div>
											</li>
										<?php endforeach ?>
									</ol>
								</div>
								<div class="hidden xl:block opacity-90">
									<img src="<?= base_url('assets/icons/percin_ilustrasi_lg.svg') ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="pesanBahagia" class="xl:ml-28 pt-5">
					<div>
						<div class="relative my-4 lg:my-12">
							<img class="mx-auto w-[140px] h-[16px] opacity-70 lg:h-[20px] lg:w-[170px]" src="<?= base_url('assets/bg_img/bg_title_foto.png') ?>" />
							<h1 class="absolute font-BacktoBlack text-2xl lg:text-3xl top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-70">
								Pesan Bahagia</h1>
						</div>
						<div class="xl:flex xl:mx-5 xl:border xl:border-sky-800 xl:border-opacity-30 xl:rounded-xl xl:py-5 xl:mr-10">
							<div class="xl:w-[70%] text-left mt-7 lg:mt-1">
								<div class="">
									<div class=" xl:hidden"></div>
									<div class="mx-8">
										<div class="">
											<div class="">
												<?= form_open("#", ['id' => 'submit-message']) ?>
												<input type="hidden" name="guest_name" value="<?= $guest ?>">
												<input type="hidden" id="invtId" name="invt_id" value="<?= $invitation->invitation_id ?>">
												<div class="">
													<label for="pesan" class="opacity-60 font-semibold tracking-wide cursor-pointer text-base-md lg:text-md">Pesan</label>
													<div class="mt-2">
														<textarea class="form-textarea w-full rounded-lg bg-white bg-opacity-30 border-blue-900 leading-tight focus:ring-0 focus:border border-dashed focus:border-blue-900 border-opacity-30 focus:border-opacity-50" name="pesan" id="pesan" placeholder="Masukan Pesan"></textarea>
													</div>
												</div>
												<div class="mt-3">
													<label for="konfirmasi" class="opacity-60 font-semibold tracking-wide text-base-md lg:text-md">Konfirmasi Kehadiran</label>
													<div class="flex">
														<div class="mt-2 mr-3 lg:mr-5">
															<input type="radio" value="2" class="w-5 h-4 rounded-md border-blue-900 border-opacity-20 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-green-500 checked:hover:bg-green-600 checked:focus:bg-green-600 cursor-pointer" name="konfirmasiHadir" id="hadir">
															<label class="lg:ml-1 text-slate-600 cursor-pointer text-sm lg:text-base" for="hadir">Hadir</label>
														</div>
														<div class="mt-2 mr-3 lg:mr-5">
															<input type="radio" value="1" class="w-5 h-4 rounded-md border-blue-900 border-opacity-20 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-400 checked:bg-red-400 checked:hover:bg-red-500 checked:focus:bg-red-500 cursor-pointer" name="konfirmasiHadir" id="tidakHadir">
															<label class="lg:ml-1 text-slate-600 cursor-pointer text-sm lg:text-base" for="tidakHadir">Tidak Hadir</label>
														</div>
														<div class="mt-2">
															<input type="radio" value="0" class="w-5 h-4 rounded-md border-blue-900 border-opacity-20 bg-white/30 leading-tight focus:ring-0 focus:bg-transparent focus:border-slate-500 checked:bg-yellow-500 checked:hover:bg-yellow-600 checked:focus:bg-yellow-600 cursor-pointer" name="konfirmasiHadir" id="belumPasti">
															<label class="lg:ml-1 text-slate-600 cursor-pointer text-sm lg:text-base" for="belumPasti">Belum Pasti</label>
														</div>
													</div>
												</div>
												<div class="mt-3">
													<button type="submit" class="px-4 py-1 bg-blue-900 bg-opacity-50 text-white rounded-lg hover:bg-opacity-80 transition-all duration-300 text-base-md lg:text-base font-semibold">Kirim</button>
												</div>
												<?= form_close() ?>
											</div>
											<div class="">
												<div>
													<p class="opacity-60 font-semibold tracking-wide mb-3 mt-4 text-base-md lg:text-md ">Total Pesan : <span><?= $message ?></span></p>
												</div>
												<div class="overflow-y-scroll h-[350px] xl:h-[250px] border border-dashed border-blue-900 border-opacity-30 cursor-all-scroll rounded-md bg-white/30">
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
										<div class="flex opacity-70 w-[180px] lg:w-[250px] mx-auto my-10">
											<div class="flex mr-5 animate-wiggleLeft"><img src="<?= base_url('assets/icons/pes_bahagia_flower_thx_top_l.svg') ?>" class="mx-auto mb-4 " alt=""></div>
											<div class="flex mr-5"><img src="<?= base_url('assets/icons/pes_bahagia_flower_thx_top_m.svg') ?>" class="mx-auto mb-4" alt=""></div>
											<div class="flex animate-wiggleRight"><img src="<?= base_url('assets/icons/pes_bahagia_flower_thx_top_r.svg') ?>" class="mx-auto mb-4" alt=""></div>
										</div>
										<h1 class="font-GreatVibes tracking-widest text-2xl mb-1 lg:mb-3 opacity-95 lg:text-4xl text-center ">Terima Kasih</h1>
										<p class="text-sm lg:text-base lg:leading-6">Telah datang ke pernikahan kami</p>
										<div class="text-center mt-8 font-BacktoBlack tracking-wide text-2xl lg:text-3xl text-[#e7a528]">
											<p class=""><?= $invitation->groom_nickname ?> & <?= $invitation->bride_nickname ?></p>
										</div>
										<div class="flex opacity-70 my-10"><img src="<?= base_url('assets/icons/pes_bahagia_flower_thx_bottom.svg') ?>" class="mx-auto mb-4 w-[180px] lg:w-[250px]" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="py-3"></div>
				</section>

				<footer class="p-4 bg-[#d8d6d2] opacity-60 rounded-t-3xl shadow md:px-2 md:py-4 xl:mt-8">
					<div class="mb-14 lg:mb-0 flex justify-center items-center">
						<div class="flex ml-3">
							<div class="flex justify-center items-center w-1/2 mr-5">
								<div class="">
									<img src="<?= base_url('assets/icons/logo_metashare.png') ?>" class="mr-3 w-[100px] lg:w-40" alt="Flowbite Logo">
									<p class="self-center text-[10px] text-slate-600 lg:text-sm whitespace-nowrap">Powered By Paralogy</p>
								</div>
							</div>
							<div class="flex justify-center items-center w-1/2 ml-5">
								<a target="_blank" href="https://api.whatsapp.com/send/?phone=6287899703471&text=Saya tertarik untuk bikin undangan" class="flex">
									<img src="<?= base_url('assets/icons/wa.png') ?>" class="mr-1 h-4 lg:h-5" alt="Whatsapp Logo">
									<span class="self-center text-[13px] text-green-800 lg:text-[16px] whitespace-nowrap">Whatsapp</span>
								</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</main>

	<!-- Modal Gift Card -->
	<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modalGiftCard" tabindex="-1" aria-labelledby="modalGiftCard" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
			<div class="modal-content border-sky-800/30 border shadow-lg relative flex flex-col w-full pointer-events-auto bg-[#f9fafa] bg-opacity-90  bg-clip-padding rounded-md outline-none text-current  backdrop-blur-md">
				<div class="modal-header text-center p-4 border-b border-sky-800/30 rounded-t-md">
					<h5 class="font-BacktoBlack tracking-widest text-lg lg:text-xl leading-normal mb-2 opacity-60" id="modalGiftCardLabel">
						Berikan Hadiah
					</h5>
					<p class="text-center text-xs lg:text-sm text-slate-600">Tanpa mengurangi rasa hormat, untuk melengkapi kebahagiaan kami, anda dapat memberikan tanda kasih dengan transfer ke rekening berikut :</p>
				</div>
				<div class="modal-body relative p-4 text-md text-slate-900 font-medium mb-3">
					<!-- content card -->
					<?php foreach ($gifts as $gift) : ?>
						<div class="border border-sky-800/30 border-dashed rounded-md p-4 mt-5 mx-10">
							<div class="px-2 py-3">
								<div class=""><img class="h-5" src="<?= base_url('storage/' . $gift->icon) ?>" alt="bca"></div>
								<div class="flex mt-4">
									<div>
										<p class="font-semibold text-base-sm tracking-widest mr-3 text-slate-600" id="<?= $gift->account ?>"><?= $gift->account ?></p>
									</div>
									<button class="hover:shadow-lg focus:shadow-xl active:shadow-xl transition duration-100 ease-in-out"><img class="h-4" src="<?= base_url('assets/icons/copy.svg') ?>" alt="Copy" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Salin" onclick="CopyToClipboard('<?= $gift->account ?>'); return false;"></button>
								</div>
								<div>
									<p class="text-base-md text-slate-600">a.n. <span class="text-slate-900"><?= $gift->recipient ?></span></p>
								</div>
								<div class="flex items-center justify-center mt-4">
									<button class="px-4 py-1 font-Montserrat font-semibold bg-[#2989A8] bg-opacity-80 mx-auto hover:bg-opacity-100 transition delay-150 rounded-md text-white text-base-xs" data-bs-toggle="collapse" data-bs-target="#collapseQcBca" aria-expanded="false" aria-controls="collapseQcBca">QR Code</button>
								</div>
								<div class="collapse mt-5" id="collapseQcBca">
									<div class="flex items-center justify-center">
										<img class="h-32" src="<?= base_url('storage/invitations/gifts/' . $gift->qr) ?>" alt="...">
									</div>
									<!-- <div class="flex items-center justify-center mt-3">
                                    <button class="px-3 py-1 font-Montserrat font-semibold border border-blue-400 text-blue-400 mx-auto hover:border-blue-500 hover:text-blue-500  transition delay-150 rounded-md text-base-1xs">Simpan</button>
                                </div> -->
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-sky-800/30 rounded-b-md">
					<button type="button" class="mx-auto inline-block font-medium  leading-tight uppercase  shadow-md hover:shadow-lg focus:bg-red-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-200 active:shadow-lg transition duration-150 ease-in-out text-red-600 text-sm border border-red-600 rounded-md px-6 py-1.5 opacity-50 hover:bg-yellow-100" data-bs-dismiss="modal">
						<svg class="fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Gift Card End -->

	<!--Modal Foto-->
	<div class="modal-foto opacity-0 pointer-events-none z-30 fixed h-screen w-screen flex items-center justify-center">
		<div class="modal-foto-overlay fixed w-full h-full  bg-slate-50 opacity-95"></div>
		<div class="modal-foto-container fixed w-full h-full  overflow-y-auto ">

			<div class="hidden modal-foto-close fixed z-50 text-center justify-center items-center mx-auto top-0 right-3 left-auto bottom-auto cursor-pointer flex-col  mt-4 text-red-600 bg-slate-100 text-sm border border-red-600 rounded-md px-3 py-1 opacity-70 hover:bg-yellow-100 lg:flex">
				<svg class="fill-current text-red-600" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
					<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
				</svg>
				(Esc)
			</div>

			<!-- Add margin if you want to see grey behind the modal-->
			<div class="modal-foto-content container mx-auto text-left">
				<div id="show-photo"></div>
				<!-- <div class="flex ="><img id="view-detail-photo" class="mx-auto max-w-screen max-h-screen border scale-90 xs:scale-[85%]" src="">
				</div> -->
				<div class="modal-foto-close mt-3 fixed z-50 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center justify-center items-center mx-auto cursor-pointer flex flex-col text-red-400 bg-yellow-100 text-sm border border-red-400 rounded-md px-4 py-1 opacity-60 hover:bg-yellow-200 xs:bottom-0  xs:text-tiny lg:hidden">
					<svg class="fill-current text-red-400" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
						<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
					</svg>
				</div>

			</div>
		</div>
	</div>
	<!--Modal Foto End-->

	<script>
		// Copy Text>
		function CopyToClipboard(id) {
			var r = document.createRange();
			r.selectNode(document.getElementById(id));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(r);
			document.execCommand('copy');
			window.getSelection().removeAllRanges();
		}
		// Copy Text End

		// Modal Foto
		var openmodal = document.querySelectorAll('.modal-foto-open')
		for (var i = 0; i < openmodal.length; i++) {
			openmodal[i].addEventListener('click', function(event) {
				event.preventDefault()
				toggleModal()
			})
		}

		const overlay = document.querySelector('.modal-foto-overlay')
		overlay.addEventListener('click', toggleModal)

		var closemodal = document.querySelectorAll('.modal-foto-close')
		for (var i = 0; i < closemodal.length; i++) {
			closemodal[i].addEventListener('click', toggleModal)
		}

		document.onkeydown = function(evt) {
			evt = evt || window.event
			var isEscape = false
			if ("key" in evt) {
				isEscape = (evt.key === "Escape" || evt.key === "Esc")
			} else {
				isEscape = (evt.keyCode === 27)
			}
			if (isEscape && document.body.classList.contains('modal-foto-active')) {
				toggleModal()
			}
		};


		function toggleModal() {
			const body = document.querySelector('body')
			const modal = document.querySelector('.modal-foto')
			modal.classList.toggle('opacity-0')
			modal.classList.toggle('pointer-events-none')
			body.classList.toggle('modal-foto-active')
		}
		// Modal Foto End

		// Play Song 
		var song = document.getElementById("song");
		var iconMusic = document.getElementById("iconMusic");

		iconMusic.onclick = function() {
			if (song.paused) {
				song.play();
				iconMusic.src = "<?= base_url('assets/icons/floating_music_play.svg') ?>"
				iconMusic.classList.add('animate-spin-slow')
			} else {
				song.pause();
				iconMusic.src = "<?= base_url('assets/icons/floating_music_pause.svg') ?>"
				iconMusic.classList.remove('animate-spin-slow')
			}
		}
		// Play Song End

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

				// Original:
				// const sectionTop = current.offsetTop - 50;
				//  
				// Alex Turnwall's update:
				// Updated original line (above) to use getBoundingClientRect instead of offsetTop, based on:
				// https://plainjs.com/javascript/styles/get-the-position-of-an-element-relative-to-the-document-24/
				// https://newbedev.com/difference-between-getboundingclientrect-top-and-offsettop
				// This allows the use of sections inside a relative parent, which I'm not using here, but needed for a project
				//
				const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 50;
				sectionId = current.getAttribute("id");

				/*
				- If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
				- To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
				*/
				if (
					scrollY > sectionTop &&
					scrollY <= sectionTop + sectionHeight
				) {
					document.querySelector(".tabs a[href*=" + sectionId + "]").classList.add("selected");
				} else {
					document.querySelector(".tabs a[href*=" + sectionId + "]").classList.remove("selected");

				}

			});
		}



		// Show ButtonNav When Scroll
		let buttomNav = document.getElementById("bottom-navigation");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction();
		};

		function scrollFunction() {
			if (
				document.body.scrollTop > 500 ||
				document.documentElement.scrollTop > 500
			) {
				buttomNav.style.display = "block";
				// buttomNav.classList.add('animate-fade')
			} else {
				buttomNav.style.display = "none";
			}

			// transition
			if (
				document.body.scrollTop > 60 ||
				document.documentElement.scrollTop > 60
			) {
				document.getElementById("objekSambutan").classList.add("animate-fade");
				document.getElementById("objekResepsi").classList.add("xl:animate-fadeRight");
				buttomNav.classList.add('animate-fadeLeft')
			} else {
				document.getElementById("objekSambutan").classList.remove("animate-fade");
				document.getElementById("objekResepsi").classList.remove("xl:animate-fadeRight");
			}

			if (
				document.body.scrollTop > 650 ||
				document.documentElement.scrollTop > 650
			) {
				document.getElementById("objekResepsi").classList.add("animate-fade");
			} else {
				document.getElementById("objekResepsi").classList.remove("animate-fade");
			}

			if (
				document.body.scrollTop > 700 ||
				document.documentElement.scrollTop > 700
			) {
				document.getElementById("foto").classList.add("xl:animate-fade");
			} else {
				document.getElementById("foto").classList.remove("xl:animate-fade");
			}

			if (
				document.body.scrollTop > 800 ||
				document.documentElement.scrollTop > 800
			) {
				document.getElementById("objekFoto").classList.add("xl:animate-fadeIn");
			} else {
				document.getElementById("objekFoto").classList.remove("xl:animate-fadeIn");
			}

			if (
				document.body.scrollTop > 1300 ||
				document.documentElement.scrollTop > 1200
			) {
				document.getElementById("foto").classList.add("animate-fade");
			} else {
				document.getElementById("foto").classList.remove("animate-fade");
			}

			if (
				document.body.scrollTop > 1300 ||
				document.documentElement.scrollTop > 1300
			) {
				document.getElementById("objekFoto").classList.add("animate-fadeIn");
			} else {
				document.getElementById("objekFoto").classList.remove("animate-fadeIn");
			}

			if (
				document.body.scrollTop > 1350 ||
				document.documentElement.scrollTop > 1350
			) {
				document.getElementById("perjalananCinta").classList.add("xl:animate-fade");
			} else {
				document.getElementById("perjalananCinta").classList.remove("xl:animate-fade");
			}

			if (
				document.body.scrollTop > 1900 ||
				document.documentElement.scrollTop > 1900
			) {
				document.getElementById("perjalananCinta").classList.add("animate-fade");
			} else {
				document.getElementById("perjalananCinta").classList.remove("animate-fade");
			}

			if (
				document.body.scrollTop > 1850 ||
				document.documentElement.scrollTop > 1850
			) {
				document.getElementById("pesanBahagia").classList.add("xl:animate-fade");
			} else {
				document.getElementById("pesanBahagia").classList.remove("xl:animate-fade");
			}

			if (
				document.body.scrollTop > 2600 ||
				document.documentElement.scrollTop > 2600
			) {
				document.getElementById("pesanBahagia").classList.add("animate-fade");
			} else {
				document.getElementById("pesanBahagia").classList.remove("animate-fade");
			}

		}


		// hitung tanggal akurat 99 hari
		function countdown() {
			return {
				seconds: '00',
				minutes: '00',
				hours: '00',
				days: '00',
				distance: 0,
				countdown: null,
				countdownTime: new Date('<?= $countdown ?>').getTime(),
				now: new Date().getTime(),
				start: function() {
					this.countdown = setInterval(() => {
						// Calculate time
						this.now = new Date().getTime();
						this.distance = this.countdownTime - this.now;
						// Set Times
						this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)));
						this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
						this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60)));
						this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
						// Stop
						if (this.distance < 0) {
							clearInterval(this.countdown);
							this.days = '00';
							this.hours = '00';
							this.minutes = '00';
							this.seconds = '00';
						}
					}, 100); // Batas Hari Hitung
				},
				padNum: function(num) {
					var zero = '';
					for (var i = 0; i < 2; i++) {
						zero += '0';
					}
					return (zero + num).slice(-2);
				}
			}
		}

		// Transisi down 
		//page-anim.js
		//iife version of basic animation and navigation (without History API)
		var app = (function() {
			let pages = [];
			let links = [];

			document.addEventListener("DOMContentLoaded", function() {
				pages = document.querySelectorAll('[data-page]');
				links = document.querySelectorAll('[data-role="link"]');
				//pages[0].className = "active";  - already done in the HTML
				[].forEach.call(links, function(link) {
					link.addEventListener("click", navigate)
				});
			});

			function navigate(ev) {
				ev.preventDefault();
				let id = ev.currentTarget.href.split("#")[1];
				let home = ev.currentTarget.href.split();
				[].forEach.call(pages, function(page) {
					if (page.id === id) {
						page.classList.add('active');
						// play song when load home page
						document.getElementById('song').play();
					} else {
						page.classList.remove('active');
						page.classList.remove('onLoad');
					}
				});
				return false;
			}

			return {
				pages,
				links,
				xhr: ajax
			}
		})();
		//the navigate method is private inside our iife
		//the variables pages and links are public and can be accessed as app.pages or app.links

		// Tooltip
		var tooltipTriggerList = [].slice.call(
			document.querySelectorAll('[data-bs-toggle="tooltip"]')
		);
		var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
			return new Tooltip(tooltipTriggerEl);
		});
		// Tooltip End
	</script>

	<script>
		$(document).ready(function() {
			load_comment();
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
							swal.fire(
								"Pesan Tersampaikan",
								"Terima kasih atas ucapannya",
								"success"
							);
							load_comment();
							form.reset();
						}
					},
					error: function() {
						swal.fire(
							"Gagal",
							"Pesan tidak tersampaikan",
							"error"
						);
					},
				});
			});

			function load_comment() {
				$id = $('#invtId').val();
				$.ajax({
					type: "GET",
					url: "<?= base_url('undangan/get_message?id=') ?>" + $id,
					dataType: "json",
					success: function(reponse) {
						$("#display_message").html(reponse);
					},
					error: function(reponse) {
						console.log(reponse.responseText);
					},
				});
			}
		});

		$(document).ready(function() {
			$(".view-photo").click(function(e) {
				e.preventDefault();
				var id_photo = $(e.currentTarget).attr('photo-id');
				var baseurl = "<?= base_url() ?>";
				if (id_photo === '') return;
				$.ajax({
					type: "POST",
					url: '<?= base_url('undangan/view_photo'); ?>',
					data: {
						id: id_photo
					},
					success: function(data) {
						$("#show-photo").html(data);
					},
				});

			});
		});
	</script>

</body>

</html>
