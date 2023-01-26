<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar" data-sidebarbg="skin6">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li class="sidebar-item <?= ($this->uri->segment(2) == "dashboard") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/dashboard') ?>" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "master_data") ? 'selected' : '' ?>""> <a class=" sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Master Data </span></a>
					<ul aria-expanded="false" class="collapse  first-level base-level-line">
						<li class="sidebar-item">
							<a href="<?= base_url('admin/master_data/model_undangan') ?>" class="sidebar-link"><span class="hide-menu"> Data Model Undangan</span></a>
						</li>
						<li class="sidebar-item">
							<a href="<?= base_url('admin/master_data/admin') ?>" class="sidebar-link"><span class="hide-menu"> Data Admin</span></a>
						</li>
					</ul>
				</li>
				<li class="list-divider"></li>
				<li class="sidebar-item <?= ($this->uri->segment(2) == "undangan") ? 'selected' : '' ?>"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/undangan') ?>" aria-expanded="false"><i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Pengerjaan Undangan</span></a></li>
				<li class="list-divider"></li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
