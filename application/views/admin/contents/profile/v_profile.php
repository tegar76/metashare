<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-7 align-self-center">
				<h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb m-0 p-0">
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/dashboard') ?>" class="text-link">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<div class="card shadow-sm px-3 py-2">
			<table class="table">
				<tbody>
					<tr class="table-borderless">
						<th scope="row">Kode</th>
						<td>ADM002</td>
					</tr>
					<tr>
						<th scope="row">Nama</th>
						<td>Firmansah</td>
					</tr>
					<tr>
						<th scope="row">No Telepon</th>
						<td>082322452311</td>
					</tr>
					<tr>
						<th scope="row">Email</th>
						<td>fsah@gmail.com</td>
					</tr>
					<tr>
						<th scope="row">Alamat</th>
						<td>Paguyangan</td>
					</tr>
					<tr>
						<th scope="row">Status</th>
						<td>Aktif</td>
					</tr>
				</tbody>
			</table>
			<hr class="mt-n3">
			<a href="<?= base_url('admin/profile/update_profile') ?>" class="btn btn-sm btn-primary col-1 py-1 mb-3 mt-1">Edit Profile</a>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
