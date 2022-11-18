<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">
	<title>Super Admin Metashare</title>
	<!-- Custom CSS -->
	<link href="<?= base_url('src/adminmart') ?>/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
	<link href="<?= base_url('src/adminmart') ?>/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
	<link href="<?= base_url('src/adminmart') ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!-- Custom CSS -->
	<link href="<?= base_url('src/adminmart') ?>/dist/css/style.min.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="<?= base_url('src/fontawesome-free-6.2.0-web/css/all.css') ?>">
	<!-- Bootstrap Select search -->
	<link rel="stylesheet" href="<?= base_url('src/bootstrap-select-1.13.14/dist/css/bootstrap-select.min.css') ?>">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	<!-- Data Table -->
	<link href="<?= base_url('src/adminmart') ?>/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="<?= base_url('src/adminmart') ?>/assets/extra-libs/datatables.net-bs4/css/dataTables.style.css" rel="stylesheet">
	<!-- Data Table -->

	<!-- Css All -->
	<link href="<?= base_url('src/style/adminmart/style24.css') ?>" rel="stylesheet">
	<!-- Css All End -->

	<!-- SweetAlert 2 -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.min.css">
	<script src="<?= base_url('assets/') ?>plugin/sweetalert2/sweetalert2.all.min.js"></script>
	<!-- End SweetAlert 2 -->

</head>

<body>

	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- apps -->
	<!-- apps -->
	<script src="<?= base_url('src/adminmart') ?>/dist/js/app-style-switcher.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/dist/js/feather.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?= base_url('src/adminmart') ?>/dist/js/custom.min.js"></script>
	<!--This page JavaScript -->
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/c3/d3.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/c3/c3.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/chartist/dist/chartist.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/dist/js/pages/dashboards/dashboard1.min.js"></script>

	<!-- Data Table -->
	<!-- Javascript Here -->
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('src/adminmart') ?>/dist/js/pages/datatable/datatable-basic.init.js"></script>
	<!-- id data table -->
	<script src="<?= base_url('src/adminmart') ?>/assets/extra-libs/datatables.net/js/dataTablesId.js"></script>
	<!-- End Data Table -->

	<!-- Bootstrap Select search -->
	<script src="<?= base_url('src/bootstrap-select-1.13.14/dist/js/bootstrap-select.min.js') ?>"></script>

	<script>
		function base_url() {
			var pathparts = location.pathname.split("/");
			if (location.host == "localhost:8080" || location.host == "localhost") {
				var url = location.origin + "/" + pathparts[1].trim("/") + "/"; // http://localhost/siberhyl/
			} else {
				var url = location.origin + "/"; // http://localhost/
			}
			return url;
		}

		const BASEURL = base_url();
		// console.log(BASEURL);
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
