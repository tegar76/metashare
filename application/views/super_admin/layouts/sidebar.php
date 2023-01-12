<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar" data-sidebarbg="skin6">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class=" sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Master Data </span></a>
					<ul aria-expanded="false" class="collapse  first-level base-level-line">
						<li class="sidebar-item">
							<a href="<?= base_url('su-admin/master/model_undangan') ?>" class="sidebar-link"><span class="hide-menu"> Data Model Undangan</span></a>
						</li>
						<li class="sidebar-item">
							<a href="<?= base_url('su-admin/master/data_admin') ?>" class="sidebar-link"><span class="hide-menu"> Data Admin</span></a>
						</li>
						<li class="sidebar-item">
							<a href="<?= base_url('su-admin/master/customer') ?>" class="sidebar-link"><span class="hide-menu"> Data Kustomer</span></a>
						</li>
					</ul>

				</li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/order') ?>" aria-expanded="false"><i data-feather="shopping-bag" class="feather-icon"></i><span class="hide-menu">Pengorderan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/penugasan') ?>" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Penugasan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/laporan_bulanan') ?>" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Laporan Bulanan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="javascript:void(0)" id="logout" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
				<li class="list-divider"></li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>

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
						url: BASEURL + "su-admin/logout",
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
