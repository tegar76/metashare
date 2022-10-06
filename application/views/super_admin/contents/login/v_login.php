<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">
	<title><?= $title ?></title>
	<!-- Custom CSS -->
	<link href="<?= base_url('src/adminmart') ?>/dist/css/style.min.css" rel="stylesheet">
	<!-- Login CSS -->
	<link href="<?= base_url('src/style/adminmart/login.css') ?>" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('src/adminmart/dist/css/icons/font-awesome/css/fontawesome.min.css') ?>">

	<!-- SweetAlert 2 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.min.css">
	<script src="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.all.min.js"></script>
	<!-- End SweetAlert 2 -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative p-3">
			<div class="auth-box row bg-white shadow-sm w-md-75 w-lg-50">
				<div class="col-lg-6 col-md-5  d-none d-sm-flex justify-content-center align-items-center w-md-75 w-lg-50">
					<img src="<?= base_url('assets/ilustrations/s_a_login.svg') ?>">
				</div>
				<div class="col-lg-6 col-md-7 mt-2">
					<div class="p-3">
						<div class="text-center">
							<img src="<?= base_url('assets/icons/logo_metashare.png') ?>" alt="Metashare Logo" width="150">
							<hr>
							<h4 class="text-black">Super Admin</h4>
							<?php if ($this->session->flashdata('message')) : ?>
								<div class="alert alert-warning alert-login" role="alert">
									<?= $this->session->flashdata('message') ?>
								</div>
							<?php endif ?>
						</div>
						<?= form_open('su-admin/login', ['class' => 'mt-4']) ?>
						<div class="row">
							<div class="col-lg-12 mb-1">
								<div class="form-group">
									<div class="input-group rounded shadow-sm">
										<span><label for="username" class="far fa-regular fa-user mt-2 pl-3 text-primary"></label></span>
										<input class="form-control border-0 <?= form_error('username') ? 'is-invalid' : '' ?> " id="username" name="username" type="text" placeholder="Masukan Username">
										<div class="invalid-feedback">
											<?= form_error('username', '<div class="text-danger">', '</div>') ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-1">
								<div class="form-group">
									<div class="input-group rounded shadow-sm">
										<span><label for="password" class="icon-key mt-2 pl-3 text-primary"></label></span>
										<input class="form-control border-0 <?= form_error('password') ? 'is-invalid' : '' ?>" id="password" name="password" type="password" placeholder="Masukan password" autocomplete="current-password" id="id_password"><span role="button" class="d-flex"><i class="fas fa-eye fa-xs mr-2 my-auto" id="togglePassword"></i></span>
										<div class="invalid-feedback">
											<?= form_error('password', '<div class="text-danger">', '</div>') ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center  d-flex justify-items-start">
								<button type="submit" class="btn btn-sm btn-warning rounded px-3">Masuk</button>
							</div>
						</div>
						<?= form_close() ?>
					</div>
				</div>

			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
	</div>
	<footer class="footer text-center">
		&copy; <?= date('Y') ?> Metashare <span class="text-muted">By Paralogy</span>
	</footer>

	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/jquery/dist/jquery.min.js "></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/popper.js/dist/umd/popper.min.js "></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$(".preloader ").fadeOut();

		// Show Toggle Password
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
		});
	</script>

	<script>
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

</body>

</html>
