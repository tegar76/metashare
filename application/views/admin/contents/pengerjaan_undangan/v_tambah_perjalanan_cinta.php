<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan') ?>">Pengerjaan undangan</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('Admin/PengerjaanUndangan/settingUndangan') ?>">Setting Data Undangan</a></li>
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
                <div class="card shadow-sm px-3 pb-2">
                    <form class="mt-4">
                        <div class="form-group mb-3">
                            <h6 class="text-dark">Data Ke- 1</h6>
                            <label for="tahap">Tahap <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select name="" id="tahap" class="form-control">
                                    <option selected>Pilih Tahap</option>
                                    <option value="tahap1">Tahap 1</option>
                                    <option value="tahap2">Tahap 2</option>
                                    <option value="tahap3">Tahap 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cerita">Cerita <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <textarea name="" id="cerita" placeholder="Masukan Cerita" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="flex mt-3 mb-4">
                    <button type="submit" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

            <!-- Floating Button Add -->
            <div class="floating-container">
                <a href="">
                    <div class="floating-button">+</div>
                </a>
            </div>
            <!-- Floating Button Add End -->