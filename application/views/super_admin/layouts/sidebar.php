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
							<a href="<?= base_url('su-admin/customer') ?>" class="sidebar-link"><span class="hide-menu"> Data Kustomer</span></a>
						</li>
					</ul>

				</li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/Pengorderan') ?>" aria-expanded="false"><i data-feather="shopping-bag" class="feather-icon"></i><span class="hide-menu">Pengorderan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/Penugasan') ?>" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Penugasan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('su-admin/laporanBulanan') ?>" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Laporan Bulanan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('') ?>" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
				<li class="list-divider"></li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
