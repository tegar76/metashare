<!-- Kategori Special -->
<section>
	<!-- Title Mobile -->
	<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
		<div class="flex items-center">
			<a href="<?= base_url('history/order/') ?>" class="active:text-primary-blue-cyan-hover py-2 px-3 "><i class="fa-solid fa-angle-left"></i></a>
			<h1><?= $title ?></h1>
		</div>
	</div>
	<!-- Title Mobile End -->
	<!-- Title Lg -->
	<div class="hidden lg:block">
		<h1 class="text-lg font-MontserratBold text-slate-800 mb-1"><?= $title ?></h1>
		<nav class="flex mb-8 opacity-80" aria-label="Breadcrumb">
			<ol class="inline-flex items-center space-x-1 md:space-x-3">
				<li>
					<a href="<?= base_url() ?>" class="inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Home</a>
				</li>
				<li aria-current="page">
					<i class="fa fa-angle-right opacity-50"></i>
					<a href="<?= base_url('history/order') ?>" class="ml-2 inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Riwayat Order</a>
				</li>
				<li aria-current="page">
					<i class="fa fa-angle-right opacity-50"></i>
					<a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder') ?>" class="ml-2 inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Detail Order</a>
				</li>
				<li aria-current="page" class="text-gray-600">
					<i class="fa fa-angle-right opacity-50"></i>
					<span class="ml-2 text-sm font-medium"><?= $title ?></span>
				</li>
			</ol>
		</nav>
	</div>
	<!-- Title Lg End-->
	<div class="mt-14 mb-8 lg:mt-0 lg:mb-0 border border-slate-600/20 shadow pt-2 pb-5 px-5 sm:px-8 rounded-md min-h-[50vh] bg-gray-100/30 xl:overflow-y-scroll xl:h-[60vh] sm:cursor-all-scroll">
		<div>
			<div class="">
				<div class="hidden lg:block mb-5 pb-3 bg-slate-400/10 border-b border-b-slate-400/30 -mt-2 -mx-5 sm:-mx-8 rounded-t-md pt-2 pl-8">
					<h1 class="text-lg fontfont-MontserratBold text-primary-blue-cyan"><?= $title ?></h1>
				</div>
				<div>
					<p class="text-slate-500 tracking-wide mb-5 mt-4 text-base-md lg:text-base">Total Pesan : <?= $rowMessage; ?></span></p>
				</div>
				<div class="mb-3">
					<!-- Pesan -->
					<?php if ($message) : ?>
						<?php foreach ($message as $item) : ?>
							<div class="flex border-b border-b-slate-300/90 pb-3 mt-3">
								<?php echo $item ?>
							</div>
						<?php endforeach ?>
					<?php endif ?>
					<!--  End Pesan -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Kategori Special End-->
