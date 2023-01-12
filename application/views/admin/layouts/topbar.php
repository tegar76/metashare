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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    	<!-- ============================================================== -->
    	<!-- Topbar header - style you can find in pages.scss -->
    	<!-- ============================================================== -->
    	<header class="topbar" data-navbarbg="skin6">
    		<nav class="navbar top-navbar navbar-expand-md">
    			<div class="navbar-header" data-logobg="skin6">
    				<!-- This is for the sidebar toggle which is visible on mobile only -->
    				<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    				<!-- ============================================================== -->
    				<!-- Logo -->
    				<!-- ============================================================== -->
    				<div class="navbar-brand">
    					<!-- Logo icon -->
    					<a href="index.html">
    						<b class="logo-icon">
    							<!-- Dark Logo icon -->
    							<img src="<?= base_url() ?>/assets/icons/logo_metashare.png" width="180" alt="homepage" class="dark-logo" />
    							<!-- Light Logo icon -->
    							<img src="<?= base_url() ?>/assets/icons/logo_metashare.png" width="180" alt="homepage" class="light-logo" />
    						</b>
    					</a>
    				</div>
    				<!-- ============================================================== -->
    				<!-- End Logo -->
    				<!-- ============================================================== -->
    				<!-- ============================================================== -->
    				<!-- Toggle which is visible on mobile only -->
    				<!-- ============================================================== -->
    				<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
    			</div>
    			<!-- ============================================================== -->
    			<!-- End Logo -->
    			<!-- ============================================================== -->
    			<div class="navbar-collapse collapse" id="navbarSupportedContent">
    				<!-- ============================================================== -->
    				<!-- toggle and nav items -->
    				<!-- ============================================================== -->
    				<ul class="navbar-nav float-left mr-auto ml-3 pl-1"></ul>
    				<!-- ============================================================== -->
    				<!-- Right side toggle and nav items -->
    				<!-- ============================================================== -->
    				<ul class="navbar-nav float-right">
    					<!-- ============================================================== -->
    					<!-- User profile and search -->
    					<!-- ============================================================== -->
    					<li class="nav-item dropdown">
    						<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    							<span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"><?= ($this->session->userdata('fullName')) ? $this->session->userdata('fullName') : '' ?></span>
    								<i data-feather="chevron-down" class="svg-icon"></i></span>
    						</a>
    						<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
    							<a class="dropdown-item" href="<?= base_url('admin/profile') ?>"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
    								Profile</a>
    							<a class="dropdown-item" href="<?= base_url('admin/profile/update_password') ?>"><i data-feather="key" class="svg-icon mr-2 ml-1"></i>
    								Edit Password</a>
    							<hr>
    							<a class="dropdown-item" id="logout" href="javascript:void(0)"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>Logout</a>
    						</div>
    					</li>
    					<!-- ============================================================== -->
    					<!-- User profile and search -->
    					<!-- ============================================================== -->
    				</ul>
    			</div>
    		</nav>
    	</header>
    	<!-- ============================================================== -->
    	<!-- End Topbar header -->
    	<!-- ============================================================== -->
    	<script>
    		// logout
    		$(document).ready(function() {
    			$("#logout").click(function(event) {
    				event.preventDefault();
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
    							type: "GET",
    							url: BASEURL + "admin/logout",
    							beforeSend: function() {
    								swal.fire({
    									imageUrl: BASEURL + "assets/logo/rolling.png",
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
    								window.location.href = BASEURL;
    							},
    						});
    					}
    				});
    			});
    		});
    	</script>
