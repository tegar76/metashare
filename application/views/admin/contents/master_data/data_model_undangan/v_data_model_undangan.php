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
							<li class="breadcrumb-item disabled" aria-current="page">Master Data</li>
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
		<div class="card shadow px-5 py-3">

			<div class="form-group col-4 mt-4">
				<div class="input-group mb-2 ml-n3">
					<select class="form-control" id="change-category">
						<option value="">Pilih Kategori</option>
						<option value="basic" <?= (isset($_GET['category']) and $_GET['category'] == 'basic') ? 'selected' : '' ?>>Basic</option>
						<option value="standard" <?= (isset($_GET['category']) and $_GET['category'] == 'standard') ? 'selected' : '' ?>>Standard</option>
						<option value="special" <?= (isset($_GET['category']) and $_GET['category'] == 'special') ? 'selected' : '' ?>>Special</option>
					</select>
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-filter"></i></div>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Item Model -->
				<?php foreach ($model as $row => $value) : ?>
					<div class="card shadow-sm card-sampul-cover p-2 mx-2 mb-3">
						<div id="carousel-sampul-cover" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="img-sampul-cover mx-auto" src="<?= $value['cover_1'] ?>" alt="Cover">
								</div>
								<div class="carousel-item">
									<img class="img-sampul-cover mx-auto" src="<?= $value['cover_2'] ?>" alt="Cover">
								</div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#carousel-sampul-cover" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-sampul-cover" data-slide-to="1"></li>
							</ol>
						</div>
						<!-- <img class="img-cover mx-auto" src="<?= base_url('storage/cover_model_undangan/cover_a.svg') ?>" alt="Cover"> -->
						<h5 class="text-black mt-4">Model <?= $value['name'] ?></h5>
						<p><?= $value['type'] ?> / <?= $value['category'] ?></p>
						<div>
							<a href="<?= base_url('demo?model=' . $value['view']) ?>" class="btn btn-sm btn-outline-info text-sm  px-2 mr-3">
								<i class="fas fa-eye mr-1"></i>
								<span class="mb-1">Demo</span>
							</a>
						</div>
						<div class="text-xs mt-3 mb-n2">
							<span>
								<i data-feather="plus" class="feather-icon feather-10"></i>
								<?= $value['create']; ?> WIB
							</span>
							<span>
								<i data-feather="edit" class="feather-icon feather-10 ml-2"></i>
								<?= $value['update']; ?> WIB
							</span>
						</div>
						<hr class="mx-n2">
						<p class="mx-2">Total Order : <?= $value['order'] ?></p>
						<span class="border-left mt-n3 mb-2 mx-2"></span>
					</div>
					<!-- Item Model End -->
				<?php endforeach ?>
			</div>


		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<script>
		$("#change-category").change(function() {
			var data = $("#change-category option:selected").val();
			window.location = BASEURL + "admin/master_data/model_undangan?category=" + data;
		});
	</script>
