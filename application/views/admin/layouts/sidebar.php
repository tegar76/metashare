<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar" data-sidebarbg="skin6">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li class="sidebar-item <?= ($this->uri->segment(2) == "dashboard") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "MasterData") ? 'selected' : '' ?>""> <a class=" sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Master Data </span></a>
					<ul aria-expanded="false" class="collapse  first-level base-level-line">
						<li class="sidebar-item">
							<a href="<?= base_url('Guru/Data/dataSiswa') ?>" class="sidebar-link"><span class="hide-menu"> Data Admin</span></a>
						</li>
						<li class="sidebar-item">
							<a href="<?= base_url('Guru/Data/dataMateriGuru') ?>" class="sidebar-link"><span class="hide-menu"> Data Konsumen</span></a>
						</li>
						<li class="sidebar-item">
							<a href="<?= base_url('Guru/Data/dataMateriAdmin') ?>" class="sidebar-link"><span class="hide-menu"> Data Model Undangan</span></a>
						</li>
					</ul>
				</li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "dashboard") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/undangan') ?>" aria-expanded="false"><i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Settings Undangan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "dashboard") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('Guru/Dashboard') ?>" aria-expanded="false"><i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Settings Pemberitahuan</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "dashboard") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('Guru/Dashboard') ?>" aria-expanded="false"><i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Laporan Bulanan</span></a></li>
				<li class="list-divider"></li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
