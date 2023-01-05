<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 align-self-center">
				<h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb m-0 p-0">
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan') ?>">Pengerjaan undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/detail/' . $code->code) ?>">Setting Data Undangan</a></li>
							<li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('admin/undangan/love-story/detail?code=' . $code->code . '&id=' . $detail->invitation_id) ?>">Edit Perjalanan Cinta</a></li>
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
		<!-- Looping Card -->
		<div class="card shadow-sm px-3">
			<?= form_open($this->uri->uri_string(), ['class' => 'mt-4']) ?>
			<input type="hidden" name="id" value="<?= $detail->story_id ?>">
			<div class="form-group mb-3">
				<h6 class="text-dark">Data Perjalanan Cinta Tahap 1</h6>
				<label for="tahap">Tahap <span class="text-danger">*</span></label>
				<div class="input-group">
					<!-- <select name="title" id="tahap" class="form-control">
						<option>Pilih Tahap</option>
						<option selected value="Tahap 1">Tahap 1</option>
						<option value="Tahap 2">Tahap 2</option>
						<option value="Tahap 3">Tahap 3</option>
					</select> -->
					<input type="text" name="title" class="form-control" id="tahap" value="<?= $detail->title ?>" readonly>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="tanggal">Tanggal <span class="text-danger">*</span></label>
				<div class="input-group">
					<input type="date" name="date" class="form-control <?= (form_error('date')) ? 'is-invalid' : '' ?>" id="tanggal" value="<?= (set_value('date')) ? set_value('date') : $detail->date ?>">
					<div id="dateFeedback" class="invalid-feedback"><?= form_error('date') ?></div>
				</div>
			</div>
			<div class="form-group mb-3">
				<label for="cerita">Cerita <span class="text-danger">*</span></label>
				<div class="input-group">
					<textarea name="story" id="cerita" placeholder="Masukan Cerita" class="form-control <?= (form_error('story')) ? 'is-invalid' : '' ?>"><?= (set_value('story')) ? set_value('story') : $detail->story ?></textarea>
					<div id="storyFeedback" class="invalid-feedback"><?= form_error('story') ?></div>
				</div>
			</div>
			<div class="flex mt-4 mb-4">
				<button type="submit" name="update" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
				<button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
