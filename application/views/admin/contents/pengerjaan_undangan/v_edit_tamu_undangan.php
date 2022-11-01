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
                <div class="card shadow-sm px-3">
                    <form class="mt-4">
                        <div class="form-group mb-3">
                            <h6 class="text-dark">Data Ke- 1</h6>
                            <label for="namaLengkapPria">Nama Lengkap <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="namaLengkapPria" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>
                        <div class="flex mt-4 mb-4">
                            <button type="submit" class="btn btn-sm btn-success px-3 py-2 mr-3">Update</button>
                            <button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->