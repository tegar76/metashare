<!-- Kategori Special -->
<section>
	<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-5 py-4 mb-8 absolute top-0 left-0 w-full">
		<h1>Profile</h1>
	</div>
	<div class="flex mt-14 mb-8 lg:mt-0 lg:mb-0">
		<!--Img Col-->
		<div class="hidden lg:flex lg:w-[30%] border-slate-600/20 shadow rounded-xl lg:rounded-l-3xl lg:rounded-r-none bg-gradient-to-b from-[#5C9CF0] to-[#8671EA] justify-center border border-r-0 border-b-4 py-20 opacity-70">
			<!-- Big profile image for side bar (desktop) -->
			<div>
				<img src="<?= ($customer->image == 'default.jpg') ? base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg') : base_url('storage/profile_customer/' . $customer->image) ?>" class="hidden lg:flex w-36 border-2 border-white-50 rounded-full">
				<p class="mt-8 text-center text-white font-semibold tracking-wide hidden lg:block">Total Order : <?= $totalOrder ?></p>
			</div>
		</div>

		<!--Main Col-->
		<div id="profile" class="w-full lg:w-[70%] border-slate-600/20 shadow rounded-xl lg:rounded-l-none lg:rounded-r-3xl border border-b-4 mt-12 lg:mt-0 bg-gray-50/30">


			<div class="p-4 md:p-12">
				<!-- Image for mobile view-->
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 md:-mt-24 h-24 w-24 md:h-28 md:w-28 bg-cover bg-center border-2 border-white" style="background-image: url(<?= ($customer->image == 'default.jpg') ? base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg') : base_url('storage/profile_customer/' . $customer->image) ?>)"></div>

				<p class="my-5 text-center text-slate-800 text-base-xs font-medium tracking-wide block lg:hidden">Total Order : <?= $totalOrder ?></p>

				<h1 class="text-xl font-bold hidden pt-0 lg:block mb-6">Profile</h1>

				<div class="grid grid-cols-2 lg:grid-cols-3 gap-3">
					<p class="text-slate-700 font-normal">Nama Lengkap</p>
					<p class="col-span-2 text-slate-500"><?= $customer->name ?></p>
					<div class="col-span-3 border-b border-b-slate-400/30 mb-2"></div>
					<p class="text-slate-700 font-normal">No Telepon</p>
					<p class="col-span-2 text-slate-500"><?= $customer->phone ?></p>
					<div class="col-span-3 border-b border-b-slate-400/30 mb-2"></div>
					<p class="text-slate-700 font-normal">Email</p>
					<p class="col-span-2 text-slate-500"><?= $customer->email ?></p>
					<div class="col-span-3 border-b border-b-slate-400/30 mb-2"></div>
				</div>

				<div class="flex mt-3 sm:mt-5">
					<a class="items-center justify-center text-base-1xs md:text-xs lg:text-sm xl:text-base-sm p-[1px] md:p-[2px] bg-gradient-to-r from-secondary-blue via-secondary-blue-sky to-secondary-blue hover:bg-gradient-to-r hover:from-secondary-blue-sky hover:via-secondary-blue hover:to-secondary-blue-sky transition duration-500 text-blue-800 hover:text-primary-blue-cyan hover:saturate-200 rounded-lg mr-4" href="<?= base_url('profile/update') ?>">
						<div class="bg-white rounded-lg w-full flex justify-center">
							<p class="my-1.5 mx-3 md:my-2 xl:mx-5"> Edit Profile</p>
						</div>
					</a>
					<a href="" id="" role="button" class="logout-button focus:ring-2 focus:ring-offset-2 focus:ring-danger text-sm font-semibold leading-none text-white focus:outline-none bg-danger border border-danger rounded-lg hover:bg-danger-hover py-2 px-3 md:px-6 transition duration-500 text-base-1xs md:text-xs lg:text-sm xl:text-base-sm">Logout</a>
				</div>

			</div>

		</div>

	</div>
</section>
<!-- Kategori Special End-->
