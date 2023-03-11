</main>

<footer class="text-base-1xs xl:text-xs xl:text-base-xs <?= ($this->uri->segment(1) == "profile") || ($this->uri->segment(1) == "history") ? 'hidden' : '' ?>">
	<div class="px-5 xl:px-20 pt-4 pb-2 xl:pt-5 xl:pb-5 bg-[#3B4B62] dark:bg-gray-900">
		<div class="">
			<div class="flex items-center justify-center">
				<img class="h-[14px] lg:h-[18px] xl:h-[20px] saturate-150" src="<?= base_url('assets/icons/logo_metashare.png') ?>" alt="">
			</div>
			<div class="sm:mx-12 md:mx-40 lg:mx-52 xl:mx-72 md:text-center lg:text-base-xs xl:text-sm leading-4 lg:leading-5 mt-3 text-slate-300 text-center">Metashare adalah sebuah platfrom yang menyediakan berbagai macam model undangan Pernikahan digital berdasarkan Kategori kategori Special, Standard, dan Basic</div>
			<div class="flex items-center justify-center mt-1">
				<a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]" src="<?= base_url('assets/icons/icons_marketplace/footer_fb.svg') ?>" alt="Icon Facebook"></a>
				<a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]" src="<?= base_url('assets/icons/icons_marketplace/footer_ig.svg') ?>" alt="Icon Instagram"></a>
				<a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]" src="<?= base_url('assets/icons/icons_marketplace/footer_wa.svg') ?>" alt="Icon Whatsapp"></a>
			</div>
		</div>
	</div>
	<div class="text-base-2xs xl:text-base-xs text-center pb-16 pt-1 xl:px-12 xl:py-2 bg-[#1C2D46] xl:flex xl:items-center sm:justify-between">
		<span class="text-slate-400 xl:text-center dark:text-slate-400">© 2023 <a href="" class="hover:underline">Metashare</a> by Paralogy Team
		</span>
		<div class="hidden xl:flex mt-4 text-sm space-x-6 xl:justify-center xl:mt-0">
			<!-- Icon -->
			<ul class="navbar-nav flex">
				<li class="nav-item p-2">
					<a class="nav-link text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(1) == "") ? 'text-primary-blue-cyan font-semibold' : '' ?>" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item p-2">
					<button class="nav-link text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Kategori") ? 'text-primary-blue-cyan font-semibold' : '' ?>" href="<?= base_url('categories') ?>" id="multiLevelDropdownButtonFoot" data-dropdown-toggle="dropdownFoot">Kategori <span><i class="fa fa-chevron-down fa-xs"></i></span></button>
					<!-- Dropdown menu -->
					<div id="dropdownFoot" class="hidden z-10 w-48 text-base-xs bg-slate-300 rounded divide-y divide-slate-100 shadow dark:bg-slate-700">
						<ul class="py-1 text-slate-600 dark:text-slate-200" aria-labelledby="multiLevelDropdownButtonFoot">
							<li>
								<a href="<?= base_url('categories?val=special') ?>" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-400 dark:hover:text-white">Special</a>
							</li>
							<li>
								<a href="<?= base_url('categories?val=standard') ?>" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
							</li>
							<li>
								<a href="<?= base_url('categories?val=basic') ?>" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item p-2">
					<a class="nav-link  text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Testimoni") ? 'text-primary-blue-cyan font-semibold' : '' ?>" href="<?= base_url('testimony') ?>">Testimoni</a>
				</li>
				<li class="nav-item p-2">
					<a class="nav-link  text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Tentang") ? 'text-primary-blue-cyan font-semibold' : '' ?>" href="<?= base_url('about') ?>">Tentang</a>
				</li>
				<!-- <li class="nav-item p-2">
              <a class="nav-link border bg-slate-600 rounded-xl border-slate-300 text-slate-300 hover:bg-primary-blue-cyan hover:text-white focus:bg-primary-blue-cyan focus:text-white py-1" href="<?= base_url('Marketplace/AuthMarketplace/signUp') ?>"><span class="px-2">Sign Up</span></a>
            </li> -->
				<!-- *** Button Profile dan logout aktif menggantikan sign up ketika user telah daftar dan login *** -->
				<li class="nav-item p-2">
					<a class="nav-link  text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Kategori") ? 'text-primary-blue-cyan font-semibold' : '' ?>" href="<?= base_url('profile') ?>">Profile</a>
				</li>
				<li class="nav-item p-2">
					<a class="nav-link  text-slate-400 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0" href="#">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	$(document).ready(function() {
		$('.logout-button').click(function(e) {
			e.preventDefault();
			Swal.fire({
				title: "Anda Yakin Keluar?",
				text: "Anda yakin ingin keluar dari METASHARE?",
				icon: "warning",
				showConfirmButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Logout",
			}).then((result) => {
				if (result.value) {
					$.ajax({
						url: '<?php echo base_url('logout'); ?>',
						type: 'POST',
						beforeSend: function() {
							swal.fire({
								imageUrl: "<?php echo base_url() ?>" + "assets/logo/rolling.png",
								title: "Logging Out",
								text: "silahkan tunggu...",
								showConfirmButton: false,
								allowOutsideClick: false,
							});
						},
						success: function(data) {
							swal.fire({
								icon: "success",
								title: "Logout",
								text: "Silahkan login kembali untuk melanjutkan :)",
								showConfirmButton: false,
								allowOutsideClick: false,
							});
							window.location.href = "<?php echo base_url('login') ?>";
						},
					});
				}
			});
		});
	});

	$(function() {
		var title = '<?= $this->session->flashdata("title") ?>';
		var text = '<?= $this->session->flashdata("text") ?>';
		var type = '<?= $this->session->flashdata("type") ?>';
		if (title) {
			swal.fire({
				icon: type,
				title: title,
				text: text,
				type: type,
				button: true,
			});
		};
	});
</script>

<script>
	$('.order-now').submit(function(e) {
		e.preventDefault();
		var form = this;
		var formdata = new FormData(form);
		$.ajax({
			url: "<?= base_url('history/order_now'); ?>",
			type: 'POST',
			data: formdata,
			processData: false,
			contentType: false,
			dataType: 'json',
			beforeSend: function() {
				swal.fire({
					imageUrl: "<?= base_url() ?>assets/logo/rolling.png",
					title: "Pesanan Sedang Diproses",
					text: "Silahkan Tunggu",
					showConfirmButton: false,
					allowOutsideClick: false,
				});
			},
			success: function(response) {
				if (response.success == true) {
					window.open(
						'https://api.whatsapp.com/send/?phone=6281335841009&text=' + response.message,
						'_blank'
					);
					swal.fire({
						icon: 'success',
						title: 'Pemesanan Undangan Berhasil',
						text: 'Silahkan lanjutkan proses pembayaran melaui WhatsApp',
						showConfirmButton: true,
					}).then((result) => {
						if (result.value) {
							location.href = '<?= base_url('history/order') ?>';
						}
					});
				}
			}

		})

	});
</script>

</body>

</html>