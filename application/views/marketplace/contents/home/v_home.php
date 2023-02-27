<section>
	<div class="xl:hidden flex justify-end my-3">
		<?php if ($this->session->userdata('logged_in') == false) : ?>
			<!-- Signup -->
			<a href="<?= base_url('register') ?>" class="xs:text-base-1xs lg:text-sm rounded-3xl border-slate-300 bg-danger border hover:bg-danger-hover text-white py-1">
				<span class="px-2 md:px-3 lg:px-4"><i class="fa-solid fa-arrow-right-from-bracket rotate-180"></i>Sign Up</span>
			</a>
		<?php else : ?>
			<!-- Signup -->
			<a href="#" class="logout-button xs:text-base-1xs lg:text-sm rounded-3xl border-slate-300 bg-danger border hover:bg-danger-hover text-white py-1">
				<span class="px-2 md:px-3 lg:px-4"><i class="fa-solid fa-arrow-right-from-bracket rotate-180"></i>Logout</span>
			</a>
		<?php endif; ?>
	</div>
	<div class="xl:items-center md:flex">
		<div class="lg:w-[60%] xl:w-[60%] md:pr-12 lg:pr-18 xl:pr-24">
			<h1 class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-Montserrat font-extrabold text-center md:text-left">Hallo, <?= $this->session->userdata('fullName'); ?> <p>Selamat Datang!</p>
			</h1>
			<div class="flex mt-5">
				<img class="w-8 xl:w-10 mr-3 hidden md:block" src="<?= base_url('assets/ilustrations/marketplace/ils_home_2.svg') ?>" alt="">
				<p class="flex text-base-2xs sm:text-base-1xs lg:text-base-xs text-center md:text-justify items-center mr-4 xl-text-center lg:mr-8 xl:mr-12">PIlih Desain Undangan Penikahan Digital Yang Menurut Anda Paling Menarik, Lalu Kami Yang Akan Mensettingnya Untuk Anda </p>
			</div>
			<div class="mt-4 md:mt-8">
				<!-- Button Sign In -->
				<?php if ($this->session->userdata('logged_in') == true and $this->session->userdata('level') == 'customer') : ?>
					<!-- Button Riwayat Order -->
					<div class="flex justify-center md:justify-start">
						<a class="w-36 lg:w-44 flex items-center justify-center md:text-xs lg:text-sm xl:text-base-md p-[1px] md:p-[2px] bg-gradient-to-r from-secondary-blue via-secondary-blue-sky to-secondary-blue hover:bg-gradient-to-r hover:from-secondary-blue-sky hover:via-secondary-blue hover:to-secondary-blue-sky transition duration-500 text-blue-800 hover:text-primary-blue-cyan hover:saturate-200 rounded-lg" href="<?= base_url('history/order') ?>">
							<div class="bg-white rounded-lg w-full flex justify-center">
								<p class="my-1.5 mx-2 md:my-2 xl:mx-4"> <span><i class="fas fa-cart-shopping opacity-70 mr-1"></i></span> Riwayat Order</p>
							</div>
						</a>
					</div>
				<?php else : ?>
					<div class="flex justify-center md:justify-start">
						<a class="text-base-xs xl:text-base-md px-3 md:px-4 lg:px-5 py-2 bg-gradient-to-r from-secondary-blue-sky to-secondary-blue hover:bg-gradient-to-l hover:from-secondary-blue-sky hover:to-secondary-blue hover:saturate-200 text-white rounded-lg transition duration-500" href="<?= base_url('login') ?>">
							Sign In
						</a>
					</div>
				<?php endif ?>

			</div>
		</div>
		<div class="flex lg:w-[40%] xl:w-[40%] lg:pl-8 xl:pl-16 mt-8 md:mt-0">
			<!-- Ils Desktop -->
			<img class="hidden md:block w-[330px] xl:w-[350px]" src="<?= base_url('assets/ilustrations/marketplace/ils_home.svg') ?>" alt="ilustration">

			<!-- Ils Mobile -->
			<img class="md:hidden w-[330px] xl:w-[350px]" src="<?= base_url('assets/ilustrations/marketplace/ils_home_mobile.svg') ?>" alt="ilustration">
		</div>
	</div>
</section>

<!-- Kategori Special -->
<section>
	<div class="md:border md:border-slate-600/40 md:shadow md:bg-white md:rounded-xl pl-[4vw] xs:px-6 mt-12">
		<h4 class="text-xs text-center md:hidden">Desain Terbaru Dari Semua Kategori</h4>
		<div class="flex justify-center md:justify-between text-base-md xl:text-lg font-MontserratBold mt-5">
			<h1 class="underline decoration-blue-500 underline-offset-8 decoration-2 mb-2 md:mb-0 md:no-underline">Kategori Special</h1>
			<!-- Button SLider XL -->
			<div class="hidden xs:flex">
				<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-80 mr-8" id="prevKategoriSpecialXl">
					<i class="fa fa-chevron-left"></i>
				</button>
				<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-80" id="nextKategoriSpecialXl">
					<i class="fa fa-chevron-right"></i>
				</button>
			</div>
			<!-- Button SLider XL -->
		</div>
		<div class="flex items-center justify-center w-full h-full pt-4 pb-1 xs:pb-6">
			<div class="w-full relative flex items-center justify-center">
				<div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
					<div id="sliderKategoriSpecial" class="h-full grid grid-flow-col auto-cols-max gap-[6vw] xs:gap-6 items-center justify-start transition ease-out duration-700">
						<?php if (!empty($specials)) : ?>
							<?php foreach ($specials as $special) : ?>
								<div class="relative">
									<div class="flex justify-center items-center">
										<div>
											<div class="cover-image w-[80vw] 1xs:w-full rounded-2xl flex justify-center border border-slate-600/60 shadow bg-white md:border-slate-600/40 md:shadow-none md:bg-none">
												<div class="mx-3">
													<div id="carouselCoverSpecial<?= $special->model_id ?>" class="carousel slide relative" data-bs-ride="carousel">
														<div class="carousel-indicators justify-center flex p-0 my-3">
															<button type="button" data-bs-target="#carouselCoverSpecial<?= $special->model_id ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
															<button type="button" data-bs-target="#carouselCoverSpecial<?= $special->model_id ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
														</div>
														<div class=" carousel-inner relative w-full overflow-hidden">
															<div class="carousel-item active float-left w-full rounded-xl shadow-xl">
																<img src="<?= base_url('storage/designs/cover/' . $special->cover_1) ?>" class=" block w-[270px] h-[378px] object-cover rounded-xl border border-slate-600 md:border-slate-600/30" alt="Sampul" />
															</div>
															<div class="carousel-item float-left w-full rounded-xl shadow-xl">
																<img src="<?= base_url('storage/designs/cover/' . $special->cover_2) ?>" class=" block w-[270px] h-[378px] object-cover  rounded-xl border border-slate-600 md:border-slate-600/30" alt="Sampul" />
															</div>
														</div>
													</div>

													<div class="my-3 text-center lg:text-left">
														<h1 class="text-base-xs xl:text-base font-semibold opacity-90"><?= $special->name ?></h1>
														<p class="text-base-1xs xl:text-base-xs opacity-80">Undangan Pernikahan Digital/ <?= $special->category ?></p>
													</div>
													<div class="flex mb-4 justify-center">
														<a target="_blank" href="<?= base_url('demo?model=' . $special->view_model) ?>" class="text-base-xs xl:text-sm border text-primary-blue-cyan/90 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Demo</a>
														<?php if ($this->session->userdata('logged_in') == true and $this->session->userdata('level') == 'customer') : ?>
															<?= form_open('#', ['class' => 'order-now']) ?>
															<input type="hidden" name="model_id" value="<?= $special->model_id; ?>">
															<button type="submit" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</button>
															<?= form_close() ?>
														<?php else : ?>
															<a href="<?= base_url('login') ?>" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
														<?php endif ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Button SLider Mobile -->
		<div class="flex xs:hidden justify-center pb-1">
			<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-70 mr-4 p-3" id="prevKategoriSpecialMobile">
				<i class="fa fa-chevron-left fa-lg"></i>
			</button>
			<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-70 ml-4 p-3" id="nextKategoriSpecialMobile">
				<i class="fa fa-chevron-right fa-lg"></i>
			</button>
		</div>
		<!-- Button SLider Mobile -->
	</div>
</section>
<!-- Kategori Special End-->

<!-- Kategori Standard -->
<section>
	<div class="md:border md:border-slate-600/40 md:shadow md:bg-white md:rounded-xl pl-[4vw] xs:px-6 mt-8 md:mt-12">
		<div class="flex justify-center md:justify-between text-base-md xl:text-lg font-MontserratBold mt-5">
			<h1 class="underline decoration-red-500/80 underline-offset-8 decoration-2 mb-2 md:mb-0 md:no-underline">Kategori Standard</h1>
			<!-- Button SLider XL -->
			<div class="hidden xs:flex">
				<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-80 mr-8" id="prevKategoriStandardXl">
					<i class="fa fa-chevron-left"></i>
				</button>
				<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-80" id="nextKategoriStandardXl">
					<i class="fa fa-chevron-right"></i>
				</button>
			</div>
			<!-- Button SLider XL -->
		</div>
		<div class="flex items-center justify-center w-full h-full pt-4 pb-1 xs:pb-6">
			<div class="w-full relative flex items-center justify-center">
				<div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
					<div id="sliderKategoriStandard" class="h-full grid grid-flow-col auto-cols-max gap-[6vw] xs:gap-6 items-center justify-start transition ease-out duration-700">
						<?php if ($standards) : ?>
							<?php foreach ($standards as $standard) : ?>
								<div class="relative">
									<div class="flex justify-center items-center">
										<div>
											<div class="cover-image w-[80vw] 1xs:w-full rounded-2xl flex justify-center border border-slate-600/60 shadow bg-white md:border-slate-600/40 md:shadow-none md:bg-none">
												<div class="mx-3">
													<div id="carouselCoverStandard<?= $standard->model_id ?>" class="carousel slide relative" data-bs-ride="carousel">
														<div class="carousel-indicators justify-center flex p-0 my-3">
															<button type="button" data-bs-target="#carouselCoverStandard<?= $standard->model_id ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
															<button type="button" data-bs-target="#carouselCoverStandard<?= $standard->model_id ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
														</div>
														<div class=" carousel-inner relative w-full overflow-hidden">
															<div class="carousel-item active float-left w-full rounded-xl shadow-xl">
																<img src="<?= base_url('storage/designs/cover/' . $standard->cover_1) ?>" class=" block w-[270px] h-[378px]  object-cover  border border-slate-600 md:border-slate-600/30 rounded-xl" alt="Sampul" />
															</div>
															<div class="carousel-item float-left w-full">
																<img src="<?= base_url('storage/designs/cover/' . $standard->cover_2) ?>" class=" block w-[270px] h-[378px]  object-cover  border border-slate-600 md:border-slate-600/30 rounded-xl " alt="Sampul" />
															</div>
														</div>

													</div>
													<div class="my-3 text-center lg:text-left">
														<h1 class="text-base-xs xl:text-base font-semibold opacity-90"><?= $standard->name ?></h1>
														<p class="text-base-1xs xl:text-base-xs opacity-80">Undangan Pernikahan Digital/<?= $standard->category ?></p>
													</div>
													<div class="flex mb-4 justify-center">
														<a target="_blank" href="<?= base_url('demo?model=' . $standard->view_model) ?>" class="text-base-xs xl:text-sm border text-primary-blue-cyan/90 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Demo</a>
														<?php if ($this->session->userdata('logged_in') == true and $this->session->userdata('level') == 'customer') : ?>
															<?= form_open('#', ['class' => 'order-now']) ?>
															<input type="hidden" name="model_id" value="<?= $standard->model_id; ?>">
															<button type="submit" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</button>
															<?= form_close() ?>
														<?php else : ?>
															<a href="<?= base_url('login') ?>" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
														<?php endif ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Button SLider Mobile -->
		<div class="flex xs:hidden justify-center pb-1">
			<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-70 mr-4 p-3" id="prevKategoriStandardMobile">
				<i class="fa fa-chevron-left fa-lg"></i>
			</button>
			<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-70 ml-4 p-3" id="nextKategoriStandardMobile">
				<i class="fa fa-chevron-right fa-lg"></i>
			</button>
		</div>
		<!-- Button SLider Mobile -->
	</div>
</section>
<!-- Kategori Standard End-->

<!-- Kategori Basic -->
<section>
	<div class="md:border md:border-slate-600/40 md:shadow md:bg-white md:rounded-xl pl-[4vw] xs:px-6 mt-8 md:mt-12">
		<div class="flex justify-center md:justify-between text-base-md xl:text-lg font-MontserratBold mt-5">
			<h1 class="underline decoration-blue-500 underline-offset-8 decoration-2 mb-2 md:mb-0 md:no-underline">Kategori Basic</h1>
			<!-- Button SLider XL -->
			<div class="hidden xs:flex">
				<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-80 mr-8" id="prevKategoriBasicXl">
					<i class="fa fa-chevron-left"></i>
				</button>
				<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-80" id="nextKategoriBasicXl">
					<i class="fa fa-chevron-right"></i>
				</button>
			</div>
			<!-- Button SLider XL -->
		</div>
		<div class="flex items-center justify-center w-full h-full pt-4 pb-1 xs:pb-6">
			<div class="w-full relative flex items-center justify-center">
				<div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
					<div id="sliderKategoriBasic" class="h-full grid grid-flow-col auto-cols-max gap-[6vw] xs:gap-6 items-center justify-start transition ease-out duration-700">
						<?php if ($basics) : ?>
							<?php foreach ($basics as $basic) : ?>
								<div class="relative">
									<div class="flex justify-center items-center">
										<div>
											<div class="cover-image w-[80vw] 1xs:w-full rounded-2xl flex justify-center border border-slate-600/60 shadow bg-white md:border-slate-600/40 md:shadow-none md:bg-none">
												<div class="mx-3">
													<div id="carouselCoverBasic<?= $basic->model_id ?>" class="carousel slide relative" data-bs-ride="carousel">
														<div class="carousel-indicators justify-center flex p-0 my-3">
															<button type="button" data-bs-target="#carouselCoverBasic<?= $basic->model_id ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
															<button type="button" data-bs-target="#carouselCoverBasic<?= $basic->model_id ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
														</div>
														<div class=" carousel-inner relative w-full overflow-hidden">
															<div class="carousel-item active float-left rounded-xl shadow-xl">
																<img src="<?= base_url('storage/designs/cover/' . $basic->cover_1) ?>" class=" block w-[270px] h-[378px]  object-cover  border border-slate-600 md:border-slate-600/30 rounded-xl" alt="Sampul" />
															</div>
															<div class="carousel-item float-left w-full">
																<img src="<?= base_url('storage/designs/cover/' . $basic->cover_1) ?>" class=" block w-[270px] h-[378px]  object-cover  border border-slate-600 md:border-slate-600/30 rounded-xl " alt="Sampul" />
															</div>
														</div>
													</div>
													<div class="my-3 text-center lg:text-left">
														<h1 class="text-base-xs xl:text-base font-semibold opacity-90"><?= $basic->name ?></h1>
														<p class="text-base-1xs xl:text-base-xs opacity-80">Undangan Pernikahan Digital/<?= $basic->category ?></p>
													</div>
													<div class="flex mb-4 justify-center">
														<a target="_blank" href="<?= base_url('demo?model=' . $basic->view_model) ?>" class="text-base-xs xl:text-sm border text-primary-blue-cyan/90 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Demo</a>
														<?php if ($this->session->userdata('logged_in') == true and $this->session->userdata('level') == 'customer') : ?>
															<?= form_open('#', ['class' => 'order-now']) ?>
															<input type="hidden" name="model_id" value="<?= $basic->model_id; ?>">
															<button type="submit" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</button>
															<?= form_close() ?>
														<?php else : ?>
															<a href="<?= base_url('login') ?>" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
														<?php endif ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Button SLider Mobile -->
		<div class="flex xs:hidden justify-center pb-1">
			<button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer opacity-70 mr-4 p-3" id="prevKategoriBasicMobile">
				<i class="fa fa-chevron-left fa-lg"></i>
			</button>
			<button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan opacity-70 ml-4 p-3" id="nextKategoriBasicMobile">
				<i class="fa fa-chevron-right fa-lg"></i>
			</button>
		</div>
		<!-- Button SLider Mobile -->
	</div>
</section>
<!-- Kategori Basic End-->

<!-- Paket Harga -->
<section>
	<div class="pt-8 md:pt-12">
		<h1 class="text-center text-md xl:text-xl font-Montserrat font-semibold my-8 underline decoration-slate-400 underline-offset-8 decoration-2 md:no-underline">Paket Harga</h1>
		<div class="columns-1 md:gap-6 lg:gap-x-10 md:columns-3">
			<div class="border border-slate-600/60 md:border-slate-600/40 shadow rounded-2xl pb-5 mb-10 xl:mb-0">
				<div class="chead text-white text-md tracking-widest bg-[#4C92EF] rounded-t-xl border border-[#4C92EF] text-center py-5">
					<h1>Special</h1>
				</div>
				<div class="mx-5">
					<p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl lg:text-2xl">130.000</span></p>
					<p class="mb-3">Fitur yang tersedia : </p>
					<ul class="space-y-1 max-w-md list-inside/70">
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Sampul</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Cover</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Data Mempelai Pria & Wanita</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Mempelai Pria(Opsional)</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Mempelai Wanita(Opsional )</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Waktu Acara Tasyakuran, Akad & Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Video Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Cerita Singkat Tentang Perjalan Cinta</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Berikan Hadiah</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Ucapan Bahagia</p>
						</li>
					</ul>
					<p class="mt-5 mb-3">Ketentuan : </p>
					<ul class=/70 list-disc list-inside mb-5">
						<li>Unlimited Penginputan Tamu Undangan</li>
						<li>Berhak Memilih Lagu Backsong</li>
						<li>Foto Prewedding Max 8 Foto</li>
						<li>Perjalanan Cinta Max 3 Tahap</li>
						<li>Unlimited Revisi</li>
					</ul>
				</div>
			</div>
			<div class="border border-slate-600/60 md:border-slate-600/40 shadow rounded-2xl pb-5 mb-10 xl:mb-0">
				<div class="chead text-white tracking-widest text-md bg-[#EC268F] rounded-t-xl border border-[#EC268F] text-center py-5 relative">
					<h1>Standard</h1>
					<img class=" absolute -right-5 -top-[2px] w-24 opacity-90" src="<?= base_url('assets/icons/icons_marketplace/watermark_rekomend.svg') ?>" />
				</div>
				<div class="mx-5">
					<p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl lg:text-2xl">100.000</span></p>
					<p class="mb-3">Fitur yang tersedia : </p>
					<ul class="space-y-1 max-w-md list-inside/70">
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Sampul</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Cover</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Data Mempelai Pria & Wanita</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Mempelai Pria(Opsional)</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Mempelai Wanita(Opsional )</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Waktu Acara Tasyakuran, Akad & Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-400 flex-shrink-0 fa fa-circle-check"></i>
							<p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Foto Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Video Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Cerita Singkat Tentang Perjalan Cinta</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Berikan Hadiah</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Ucapan Bahagia</p>
						</li>
					</ul>
					<p class="mt-5 mb-3">Ketentuan : </p>
					<ul class=/70 list-disc list-inside mb-5">
						<li>Unlimited Penginputan Tamu Undangan</li>
						<li>Berhak Memilih Lagu Backsong</li>
						<li>Foto Prewedding Max 6 Foto</li>
						<li class="line-through">Perjalanan Cinta Max 3 Tahap</li>
						<li>Revisi Max 3 Kali</li>
					</ul>
				</div>
			</div>
			<div class="border border-slate-600/60 md:border-slate-600/40 shadow rounded-2xl pb-5">
				<div class="chead text-white text-md tracking-widest bg-[#EBD045] rounded-t-xl border border-[#EBD045] text-center py-5">
					<h1>Basic</h1>
				</div>
				<div class="mx-5">
					<p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl lg:text-2xl">80.000</span></p>
					<p class="mb-3">Fitur yang tersedia : </p>
					<ul class="space-y-1 max-w-md list-inside/70">
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Sampul</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Cover</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Data Mempelai Pria & Wanita</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Mempelai Pria(Opsional)</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Mempelai Wanita(Opsional )</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Waktu Acara Tasyakuran, Akad & Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-400 flex-shrink-0 fa fa-circle-check"></i>
							<p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Foto Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Video Prewedding</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
							<p>Cerita Singkat Tentang Perjalan Cinta</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Berikan Hadiah</p>
						</li>
						<li class="flex items-center">
							<i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
							<p>Ucapan Bahagia</p>
						</li>
					</ul>
					<p class="mt-5 mb-3">Ketentuan : </p>
					<ul class=/70 list-disc list-inside mb-5">
						<li>Unlimited Penginputan Tamu Undangan</li>
						<li class="line-through">Berhak Memilih Lagu Backsong</li>
						<li class="line-through">Foto Prewedding Max 8 Foto</li>
						<li class="line-through">Perjalanan Cinta Max 3 Tahap</li>
						<li>Revisi Max 3 Kali</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Paket Harga End -->

<section>
	<div class="pt-12" id="accordion-open" data-accordion="open">
		<h1 class="text-xs md:text-base-md xl:text-md font-Montserrat font-semibold my-5">Beberapa Hal Yang Mungkin Anda Tanyakan :</h1>
		<div class="md:flex leading-5">
			<ul class="md:w-1/2 md:mr-5">
				<li>
					<h2 id="accordion-open-heading-1">
						<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#1C2D46] focus:font-semibold rounded-t-xl border border-b-0 border-slate-600/60 md:border-slate-600/40" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
							<span class="flex items-center"><svg class="opacity-70 w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
								</svg>Apa Itu Undangan Digital?</span>
							<svg data-accordion-icon class="opacity-70 w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h2>
					<div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
						<div class="p-5 font-light border border-b-0 border-slate-600/60 md:border-slate-600/40 dark:border-gray-700">
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Undangan digital adalah sebuah undangan yang berupa gambar, video & website. Dalam hal ini Metashare berfokus pada undangan pernikahan digital berbentuk website
							</p>
						</div>
					</div>
				</li>
				<li>
					<h2 id="accordion-open-heading-2">
						<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#1C2D46] focus:font-semibold border border-b-0 border-slate-600/60 md:border-slate-600/40" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
							<span class="flex items-center"><svg class="opacity-70 w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
								</svg>Bagaimana Cara Melakukan Pengorderan Undangan Pernikahan Digital Pada Metashare?</span>
							<svg data-accordion-icon class="opacity-70 w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h2>
					<div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
						<div class="p-5 font-light border border-b-0 border-slate-600/60 md:border-slate-600/40 dark:border-gray-700">
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Untuk dapat melakukan pengorderan anda diharuskan untuk login terlebih dahulu, jika belum memiliki akun anda akan diarahkan untuk melakukan signup/daftar agar memperoleh akun untuk bisa login. Setelah proses login berhasil selanjutnya anda cukup model undangan pernikahan yang berdasarkan kategori. Setelah anda menemukan model undangan yang dirasa paling menarik sesuai hati anda.
							</p>
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Langkah terakhir pilih tombol order pada model undangan pernikahan yang dipilih, lalu anda sebagi pengorder akan diarahkan ke Whatapps Admin. Nantinya admin langsung menanggapinya, <span class="text-gray-600 underline">Sebelum admin mengerjakan orderan tersebut admin akan menyarankan sipengorder untuk melakukan pembayaran terlebih dahulu</span> sesuai paket harga model undangan pernikahan yang dipilih yang berdasarkan kategori
							</p>
						</div>
					</div>
				</li>
				<li>
					<h2 id="accordion-open-heading-3">
						<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#1C2D46] focus:font-semibold border border-slate-600/60 md:border-slate-600/40" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
							<span class="flex items-center"><svg class="opacity-70 w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
								</svg> Apakah Model Undangan Pernikahan Yang Tersedia di Metashare Responsive Terhadap Layar?</span>
							<svg data-accordion-icon class="opacity-70 w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h2>
					<div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
						<div class="p-5 font-light border border-t-0 border-slate-600/60 md:border-slate-600/40 dark:border-gray-700">
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Jawabannya iya, semua model undangan pernikahan yang tersedia di Metashare itu sudah responsive terhadap layar. artinya jika anda/tamu undangan mengaksesnya di Desktop, Laptop, Tablet, Ipad, Apple Smartphone maupun Android Smartphone tampilan dari setiap model undangan pernikahan akan menyesuaikan pada setiap layar perangkat tersebut.
							</p>
						</div>
					</div>
				</li>
			</ul>
			<ul class="md:w-1/2 md:ml-5">
				<li>
					<h2 id="accordion-open-heading-4">
						<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#1C2D46] focus:font-semibold md:rounded-t-xl border border-b-0 border-slate-600/60 md:border-slate-600/40" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
							<span class="flex items-center"><svg class="opacity-70 w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
								</svg>Bagaimana Cara Mengirim Undangan Pernikahan Yang Berbentuk Website?</span>
							<svg data-accordion-icon class="opacity-70 w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h2>
					<div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
						<div class="p-5 font-light border border-b-0 border-slate-600/60 md:border-slate-600/40 dark:border-gray-700">
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Dalam hal ini caranya sangat mudah dengan menggunakan link url saja nantinya dapat dikirimkan kepada tamu undangan yang dituju melalui media Whatapps, Email, Telegram dll
							</p>
						</div>
					</div>
				</li>
				<li>
					<h2 id="accordion-open-heading-5">
						<button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-[#1C2D46] focus:font-semibold border border-slate-600/60 md:border-slate-600/40" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
							<span class="flex items-center"><svg class="opacity-70 w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
								</svg> Kapan Dimulainya Proses Pengerjaan & Butuh Perapa Lama Proses Pengerjaannya?</span>
							<svg data-accordion-icon class="opacity-70 w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h2>
					<div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
						<div class="p-5 font-light border border-t-0 border-slate-600/60 md:border-slate-600/40 dark:border-gray-700">
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								Setelah anda melakukan pembayaran dan admin sudah mengkonfirmasi bahwa pembayaran sudah diterima oleh admin, maka proses pengerjaan sudah dapat dimulai. Lalu admin akan meminta data-data yang berkaitan dengan acara pernikahan tersebut seperti data mempelai pria & wanita, waktu pelaksanaan acara, tamu undangan dll(sesuai data yang ada pada model undangan pernikahan yang telah di order). Untuk lama waktu pengerjaannya itu tergantung kepada anda, semakin cepat anda penyerahkan <span class="underline">semua data-data</span> yang diperlukan kepada admin maka semakin cepat pula proses pengerjaannya. Jika semua data-data yang diperlukan sudah diterima oleh admin, maka proses pengerjaanya kurang dari 24jam dipastikan pengerjaan sudah selesai.
							</p>
							<p class="mb-2 text-[#1C2D46] focus:font-semibold dark:text-gray-400 text-justify">
								<span class="underline">
									Untuk Masa Aktif Undangan yaitu 3 minggu dihitung mulai dari awal penginputan data-data yang dilakukan oleh admin.
								</span>
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>


</section>

<script>
	// slider Kategori Special
	let sliderKategoriSpecial = document.getElementById("sliderKategoriSpecial");
	let defaultTransformSpecialMobile = 0;

	function goNextKategoriSpecialMobile() {
		defaultTransformSpecialMobile = defaultTransformSpecialMobile - 86;
		if (Math.abs(defaultTransformSpecialMobile) >= 86 * <?= count($specials) ?>) defaultTransformSpecialMobile = 0;
		sliderKategoriSpecial.style.transform = "translateX(" + defaultTransformSpecialMobile + "vw)";
	}
	let defaultTransformSpecialXl = 0;

	function goNextKategoriSpecialXl() {
		defaultTransformSpecialXl = defaultTransformSpecialXl - 320;
		if (Math.abs(defaultTransformSpecialXl) >= sliderKategoriSpecial.scrollWidth) defaultTransformSpecialXl = 0;
		sliderKategoriSpecial.style.transform = "translateX(" + defaultTransformSpecialXl + "px)";
	}
	nextKategoriSpecialMobile.addEventListener("click", goNextKategoriSpecialMobile);
	nextKategoriSpecialXl.addEventListener("click", goNextKategoriSpecialXl);

	function goPrevKategoriSpecialMobile() {
		if (Math.abs(defaultTransformSpecialMobile) < 86) defaultTransformSpecialMobile = 0;
		else defaultTransformSpecialMobile = defaultTransformSpecialMobile + 86;
		sliderKategoriSpecial.style.transform = "translateX(" + defaultTransformSpecialMobile + "vw)";
	}

	function goPrevKategoriSpecialXl() {
		if (Math.abs(defaultTransformSpecialXl) < 320) defaultTransformSpecialXl = 0;
		else defaultTransformSpecialXl = defaultTransformSpecialXl + 320;
		sliderKategoriSpecial.style.transform = "translateX(" + defaultTransformSpecialXl + "px)";
	}
	prevKategoriSpecialMobile.addEventListener("click", goPrevKategoriSpecialMobile);
	prevKategoriSpecialXl.addEventListener("click", goPrevKategoriSpecialXl)
	// Slider Kategori Special End

	// slider Kategori Standard
	let sliderKategoriStandard = document.getElementById("sliderKategoriStandard");
	let defaultTransformStandardMobile = 0;

	function goNextKategoriStandardMobile() {
		defaultTransformStandardMobile = defaultTransformStandardMobile - 86;
		if (Math.abs(defaultTransformStandardMobile) >= 86 * <?= count($standards) ?>) defaultTransformStandardMobile = 0;
		sliderKategoriStandard.style.transform = "translateX(" + defaultTransformStandardMobile + "vw)";
	}
	let defaultTransformStandardXl = 0;

	function goNextKategoriStandardXl() {
		defaultTransformStandardXl = defaultTransformStandardXl - 320;
		if (Math.abs(defaultTransformStandardXl) >= sliderKategoriStandard.scrollWidth) defaultTransformStandardXl = 0;
		sliderKategoriStandard.style.transform = "translateX(" + defaultTransformStandardXl + "px)";
	}
	nextKategoriStandardMobile.addEventListener("click", goNextKategoriStandardMobile);
	nextKategoriStandardXl.addEventListener("click", goNextKategoriStandardXl);

	function goPrevKategoriStandardMobile() {
		if (Math.abs(defaultTransformStandardMobile) < 86) defaultTransformStandardMobile = 0;
		else defaultTransformStandardMobile = defaultTransformStandardMobile + 86;
		sliderKategoriStandard.style.transform = "translateX(" + defaultTransformStandardMobile + "vw)";
	}

	function goPrevKategoriStandardXl() {
		if (Math.abs(defaultTransformStandardXl) < 320) defaultTransformStandardXl = 0;
		else defaultTransformStandardXl = defaultTransformStandardXl + 320;
		sliderKategoriStandard.style.transform = "translateX(" + defaultTransformStandardXl + "px)";
	}
	prevKategoriStandardMobile.addEventListener("click", goPrevKategoriStandardMobile);
	prevKategoriStandardXl.addEventListener("click", goPrevKategoriStandardXl)
	// Slider Kategori Standard End

	// slider Kategori Basic
	let sliderKategoriBasic = document.getElementById("sliderKategoriBasic");
	let defaultTransformBasicMobile = 0;

	function goNextKategoriBasicMobile() {
		defaultTransformBasicMobile = defaultTransformBasicMobile - 86;
		if (Math.abs(defaultTransformBasicMobile) >= 86 * <?= count($basics) ?>) defaultTransformBasicMobile = 0;
		sliderKategoriBasic.style.transform = "translateX(" + defaultTransformBasicMobile + "vw)";
	}
	let defaultTransformBasicXl = 0;

	function goNextKategoriBasicXl() {
		defaultTransformBasicXl = defaultTransformBasicXl - 320;
		if (Math.abs(defaultTransformBasicXl) >= sliderKategoriBasic.scrollWidth) defaultTransformBasicXl = 0;
		sliderKategoriBasic.style.transform = "translateX(" + defaultTransformBasicXl + "px)";
	}
	nextKategoriBasicMobile.addEventListener("click", goNextKategoriBasicMobile);
	nextKategoriBasicXl.addEventListener("click", goNextKategoriBasicXl);

	function goPrevKategoriBasicMobile() {
		if (Math.abs(defaultTransformBasicMobile) < 86) defaultTransformBasicMobile = 0;
		else defaultTransformBasicMobile = defaultTransformBasicMobile + 86;
		sliderKategoriBasic.style.transform = "translateX(" + defaultTransformBasicMobile + "vw)";
	}

	function goPrevKategoriBasicXl() {
		if (Math.abs(defaultTransformBasicXl) < 320) defaultTransformBasicXl = 0;
		else defaultTransformBasicXl = defaultTransformBasicXl + 320;
		sliderKategoriBasic.style.transform = "translateX(" + defaultTransformBasicXl + "px)";
	}
	prevKategoriBasicMobile.addEventListener("click", goPrevKategoriBasicMobile);
	prevKategoriBasicXl.addEventListener("click", goPrevKategoriBasicXl)
	// Slider Kategori Basic End
</script>
