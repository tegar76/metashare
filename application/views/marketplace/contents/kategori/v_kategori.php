<!-- Kategori Special -->
<section>
	<div class="xl:border xl:border-slate-600/20 xl:shadow xl:bg-white xl:rounded-xl xl:px-10 xl:py-8">
		<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-5 py-4 mb-8 absolute top-0 left-0 w-full">
			<h1><?= $title ?></h1>
		</div>
		<!-- Dropdown Filter Mobile -->
		<div class="xl:hidden mb-8 mt-14 lg:mt-0 ">
			<!-- Select Kategori -->
			<div class="flex">
				<div class="flex-shrink-0 z-10 inline-flex items-center py-1 md:py-2.5 px-4 text-slate-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:outline-none focus:ring-0 ">
					<label for="kategori"><i class="fa fa-filter fa-sm"></i></label>
				</div>
				<select id="kategori" class="bg-gray-50 border border-gray-300 text-base-xs rounded-r-lg border-l-gray-100 focus:ring-0 focus:border-primary-blue-cyan/70 block w-full p-2.5 text-slate-500 ">
					<option selected class="text-base-xs ">Pilih Kategori</option>
					<option value="special" <?= (isset($_GET['val']) and $_GET['val'] == 'special') ? 'selected' : '' ?> class="text-base-xs">Special</option>
					<option value="standard" <?= (isset($_GET['val']) and $_GET['val'] == 'standard') ? 'selected' : '' ?> class="text-base-xs">Standard</option>
					<option value="basic" <?= (isset($_GET['val']) and $_GET['val'] == 'basic') ? 'selected' : '' ?> class="text-base-xs">Basic</option>
				</select>
			</div>
			<!-- Select Jenis End-->
		</div>
		<!-- Dropdown Filter Mobile End -->
		<h1 class="text-base xl:text-lg font-MontserratBold mb-4">Kategori <?= $category ?></h1>
		<div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-4 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-12 xl:gap-y-6">
			<!-- Limit 6 Card -->
			<?php if (!empty($model)) : ?>
				<!-- TRUE -->
				<?php foreach ($model as $item) : ?>
					<div class="cover-image border border-slate-400/30 rounded-2xl flex justify-center mb-6 px-4">
						<div class="">
							<div id="carouselCoverSpecial<?= $item->model_id ?>" class="carousel slide relative" data-bs-ride="carousel">
								<div class="carousel-indicators justify-center flex my-3">
									<button type="button" data-bs-target="#carouselCoverSpecial<?= $item->model_id ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselCoverSpecial<?= $item->model_id ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
								</div>
								<div class=" carousel-inner relative w-full overflow-hidden">
									<div class="carousel-item active float-left w-full border rounded-xl">
										<img src="<?= base_url('storage/model_undangan_sampul/' . $item->cover_1) ?>" class="w-[330px] h-[438px] sm-[300px] sm:h-[308px] md:w-[310px] md:h-[418px] lg:w-[290px] lg:h-[398px] rounded-xl object-cover" alt="Sampul" />
									</div>
									<div class="carousel-item float-left w-full border rounded-xl">
										<img src="<?= base_url('storage/model_undangan_sampul/' . $item->cover_2) ?>" class="w-[330px] h-[438px] sm-[300px] sm:h-[308px] md:w-[310px] md:h-[418px] lg:w-[290px] lg:h-[398px]  rounded-xl object-cover" alt="Sampul" />
									</div>
								</div>
							</div>
							<div class="my-3">
								<h1 class="text-base-xs xl:text-base text-slate-600"><?php echo $item->name ?></h1>
								<p class="text-base-xs xl:text-xs text-slate-400">Undangan Pernikahan Digital/<?= $item->category ?></p>
							</div>
							<div class="flex mb-4 justify-center">
								<a target="_blank" href="<?= base_url('preview?model=' . $item->view_model) ?>" class="text-base-xs xl:text-sm border text-primary-blue-cyan/70 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Demo</a>
								<a href="" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
		<a class="w-20 md:w-32 mx-auto flex items-center justify-center text-base-1xs md:text-xs lg:text-sm xl:text-base-sm p-[1px] md:p-[2px] bg-gradient-to-r from-secondary-blue via-secondary-blue-sky to-secondary-blue hover:bg-gradient-to-r hover:from-secondary-blue-sky hover:via-secondary-blue hover:to-secondary-blue-sky transition duration-500 text-blue-800 hover:text-primary-blue-cyan hover:saturate-200 rounded-lg sm:mt-5" href="">
			<div class="bg-white rounded-lg w-full flex justify-center">
				<p class="my-1 mx-2 md:my-2 xl:mx-4"> Load More</p>
			</div>
		</a>
	</div>
</section>
<!-- Kategori Special End-->

<script>
	$(document).ready(function() {
		$("#kategori").change(function() {
			var kategori = $("#kategori").val();
			window.location.href = "<?= base_url('categories?val=') ?>" + kategori;
		});
	});
</script>
