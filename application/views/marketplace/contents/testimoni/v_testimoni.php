<!-- Title Mobile -->
<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
	<div class="flex items-center  py-2 px-3 ">
		<h1><?= $title ?></h1>
	</div>
</div>

<!-- Title Lg End-->
<div class="mt-14 mb-8 lg:mt-0 lg:mb-0 border border-slate-600/20 shadow pt-2 pb-5 px-5 sm:px-8 rounded-md min-h-[50vh] bg-gray-100/30 xl:overflow-y-scroll xl:h-[60vh] sm:cursor-all-scroll">
	<div>
		<div class="hidden lg:block mb-5 pb-3 bg-slate-400/10 border-b border-b-slate-400/30 -mt-2 -mx-5 sm:-mx-8 rounded-t-md pt-2 pl-8">
			<h1 class="text-lg fontfont-MontserratBold text-primary-blue-cyan"><?= $title ?></h1>
		</div>
		<div class="mb-3">
			<?php foreach ($testimony as $item) : ?>
				<!-- Testimoni -->
				<div class="flex border-b border-b-slate-300/90 mt-3 pb-3">
					<img src="<?= $item['img'] ?>" class="flex rounded-full items-center justify-center w-9 h-9 mr-3"></img>
					<div>
						<p class="tracking-wide text-base-sm lg:text-base-md text-slate-500 mb-1"><?= $item['name'] ?></p>
						<p class="text-base-xs tracking-wide text-slate-500/80 text-justify mr-2"><?= $item['text'] ?></p>
					</div>
				</div>
				<!-- Testimoni End-->
			<?php endforeach ?>

		</div>
	</div>
</div>
