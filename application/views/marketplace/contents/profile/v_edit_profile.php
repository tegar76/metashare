<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
	<div class="flex items-center">
		<a href="<?= base_url('profile') ?>" class="py-2 px-3 active:text-primary-blue-cyan-hover"><i class="fa-solid fa-angle-left"></i></a>
		<h1><?= $title ?></h1>
	</div>
</div>

<div class="mt-14 mb-8 lg:flex lg:mt-0 lg:mb-0">
	<!--Img Col-->
	<div class="lg:flex lg:w-[30%] border-slate-400 shadow rounded-xl lg:rounded-l-3xl lg:rounded-r-none bg-gradient-to-b from-[#5C9CF0] to-[#8671EA] justify-center border border-r-0 border-b-4 py-8 lg:py-20 mb-4 lg:mb-0 opacity-70">
		<div>
			<img src="<?= ($customer->image == 'default.jpg') ? base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg') : base_url('storage/profiles/' . $customer->image) ?>" id="uploaded_image" class="w-20 lg:w-36 border-2 border-white-50 rounded-full mx-auto">
			<?= form_open_multipart('profile/update/update_photo', ['class' => 'mx-8 lg:mx-1']) ?>
			<label class="block mb-2 mt-4 text-base-md font-medium text-black contrast-200 saturate-200" for="small_size">Foto Profile</label>
			<input class="block mb-5 w-full text-xs text-slate-900 bg-gray-50 rounded-lg border border-gray-400 cursor-pointer focus:outline-none opacity-90" id="upload_image" type="file" name="image" onchange="form.submit()" accept="image/png, image/gif, image/jpeg">
			<?= form_close() ?>
		</div>
	</div>

	<div class="p-4 md:p-12 w-full">
		<h1 class="text-xl font-bold hidden pt-0 lg:block mb-6">Edit Profile</h1>
		<?= form_open($this->uri->uri_string()) ?>
		<p class="text-primary-blue-cyan text-base-md mb-3">Settings Profile</p>
		<input type="hidden" name="id" value="<?= $customer->cus_id ?>">
		<div>
			<label for="namaLengkap" class="text-slate-700">Nama Lengkap</label>
			<input id="namaLengkap" name="name_update" aria-labelledby="namaLengkap" type="text" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" value="<?= $customer->name ?>" />
			<?= (form_error('name_update')) ? form_error('name_update', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-4 w-full">
			<label for="noTelp" class="text-slate-700">No Telepon</label>
			<input id="noTelp" name="phone_update" aria-labelledby="noTelp" type="number" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" value="<?= $customer->phone ?>" />
			<?= (form_error('phone_update')) ? form_error('phone_update', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-4 w-full">
			<label for="noTelp" class="text-slate-700">Email</label>
			<input id="email" name="email_update" aria-labelledby="email" type="email" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" value="<?= $customer->email ?>" />
			<?= (form_error('email_update')) ? form_error('email_update', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-5">
			<button type="submit" name="update_profile" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-success font-semibold leading-none text-white focus:outline-none bg-success border border-success rounded-lg hover:bg-success-hover py-2 px-4 lg:px-6 transition duration-500 text-xs lg:text-sm tracking-wide">Simpan</button>
		</div>
		<?= form_close() ?>

		<!-- form update password -->
		<?= form_open($this->uri->uri_string()) ?>
		<p class="text-primary-blue-cyan text-base-md mt-5">Settings Password</p>
		<div class="mt-3 w-full">
			<label for="inputOldPassword" class="text-slate-700">Password Lama</label>
			<div class="relative flex items-center justify-center">
				<input id="inputOldPassword" name="current_password" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10 placeholder:text-gray-500" placeholder="Masukan Password Lama" />
				<div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showOldPassword()">
					<div id="showOldPassword">
						<i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
					</div>
					<div id="hideOldPassword" class="hidden">
						<i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
					</div>
				</div>
			</div>
			<?= (form_error('current_password')) ? form_error('current_password', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-4 w-full">
			<label for="inputNewPassword" class="text-slate-700">Password Baru</label>
			<div class="relative flex items-center justify-center">
				<input id="inputNewPassword" name="new_password" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10 placeholder:text-gray-500" placeholder="Masukan Password Baru" />
				<div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showNewPassword()">
					<div id="showNewPassword">
						<i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
					</div>
					<div id="hideNewPassword" class="hidden">
						<i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
					</div>
				</div>
			</div>
			<?= (form_error('new_password')) ? form_error('new_password', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-4 w-full">
			<label for="inputConfirmPassword" class="text-slate-700">Konfirmasi Password</label>
			<div class="relative flex items-center justify-center">
				<input id="inputConfirmPassword" name="confirm_password" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10 placeholder:text-gray-500" placeholder="Masukan Konfirmasi Password" />
				<div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showConfirmPassword()">
					<div id="showConfirmPassword">
						<i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
					</div>
					<div id="hideConfirmPassword" class="hidden">
						<i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
					</div>
				</div>
			</div>
			<?= (form_error('confirm_password')) ? form_error('confirm_password', '<p class="text-danger">', '</p>') : '' ?>
		</div>
		<div class="mt-5">
			<button type="submit" name="update_password" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-success font-semibold leading-none text-white focus:outline-none bg-success border border-success rounded-lg hover:bg-success-hover py-2 px-4 lg:px-6 transition duration-500 text-xs lg:text-sm tracking-wide">Simpan</button>
		</div>
		<?= form_close() ?>
	</div>
</div>

<script>
	function showNewPassword() {
		let passwordType = document.getElementById("inputNewPassword");
		let showNewPassword = document.getElementById("showNewPassword");
		let hideNewPassword = document.getElementById("hideNewPassword");
		if (passwordType.type === "password") {
			passwordType.type = "text";
			hideNewPassword.classList.remove("hidden");
			showNewPassword.classList.add("hidden");
		} else {
			passwordType.type = "password";
			hideNewPassword.classList.add("hidden");
			showNewPassword.classList.remove("hidden");
		}
	}

	function showOldPassword() {
		let passwordType = document.getElementById("inputOldPassword");
		let showOldPassword = document.getElementById("showOldPassword");
		let hideOldPassword = document.getElementById("hideOldPassword");
		if (passwordType.type === "password") {
			passwordType.type = "text";
			hideOldPassword.classList.remove("hidden");
			showOldPassword.classList.add("hidden");
		} else {
			passwordType.type = "password";
			hideOldPassword.classList.add("hidden");
			showOldPassword.classList.remove("hidden");
		}
	}

	function showConfirmPassword() {
		let passwordType = document.getElementById("inputConfirmPassword");
		let showConfirmPassword = document.getElementById("showConfirmPassword");
		let hideConfirmPassword = document.getElementById("hideConfirmPassword");
		if (passwordType.type === "password") {
			passwordType.type = "text";
			hideConfirmPassword.classList.remove("hidden");
			showConfirmPassword.classList.add("hidden");
		} else {
			passwordType.type = "password";
			hideConfirmPassword.classList.add("hidden");
			showConfirmPassword.classList.remove("hidden");
		}
	}
</script>