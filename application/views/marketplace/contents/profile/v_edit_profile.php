<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->

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
			<form action="" class="mx-8 lg:mx-1">
				<label class="block mb-2 mt-4 text-base-md font-medium text-black contrast-200 saturate-200" for="small_size">Foto Profile</label>
				<input class="block mb-5 w-full text-xs text-slate-900 bg-gray-50 rounded-lg border border-gray-400 cursor-pointer focus:outline-none opacity-90" id="upload_image" type="file">
			</form>
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
			<button type="submit" name="update" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-success font-semibold leading-none text-white focus:outline-none bg-success border border-success rounded-lg hover:bg-success-hover py-2 px-4 lg:px-6 transition duration-500 text-xs lg:text-sm tracking-wide">Simpan</button>
		</div>
		<?= form_close() ?>
	</div>
</div>


<!-- Modal toggle -->
<!-- <button data-modal-target="modal" data-modal-toggle="modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->

<!-- Main modal -->

<!-- Modal toggle -->
<button data-modal-target="modal" data-modal-toggle="modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
				<img src="" id="sample_image" />
				<div class="preview"></div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="crop">Crop</button>
                <button data-modal-hide="modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>

<!-- 

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Crop Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="img-container">
					<div class="row">
						<div class="col-md-8">
							<img src="" id="sample_image" />
						</div>
						<div class="col-md-4">
							<div class="preview"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="crop" class="btn btn-primary">Crop</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div> -->

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

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

<script>
	$(document).ready(function() {
		var $modal = $("#modal");
		// console.log(modal)
		var image = document.getElementById('sample_image');
		var cropper;

		$('#upload_image').change(function() {
			var files = event.target.files;
			var done = function(url) {
				image.src = url;
				$modal.show();
			};

			if (files && files.length > 0) {
				reader = new FileReader();
				reader.onload = function(event) {
					done(reader.result);
				};
				reader.readAsDataURL(files[0]);
			}
		});

		
		console.log($modal.on('show.bs.modal'))
		$modal.on('shown.bs.modal', function() {
			cropper = new Cropper(image, {
				aspectRatio: 1,
				viewMode: 3,
				preview: '.preview'
			});
		}).on('hidden.bs.modal', function() {
			cropper.destroy();
			cropper = null;
		});

		$('#crop').click(function() {
			canvas = cropper.getCroppedCanvas({
				width: 400,
				height: 400
			});

			canvas.toBlob(function(blob) {
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
				reader.onloadend = function() {
					var base64data = reader.result;
					$.ajax({
						url: '<?php echo base_url('profile/update/do_upload') ?>',
						method: 'POST',
						data: {
							image: base64data
						},
						success: function(data) {
							$modal.modal('hide');
							$('#uploaded_image').attr('src', data);
						}
					});
				};
			});
		});
	});
</script>
