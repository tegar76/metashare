<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/Dashboard') ?>" class="text-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $title?></li>
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
                <div class="card shadow px-3">
                    <form target="blank" class="mt-4" action="<?= base_url('SuperAdmin/LaporanBulanan/cetakLaporanBulanan')?>">
                        <div class="form-group mb-3">
                            <label for="bulan">Bulan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input class="form-control" type="text" onfocus="(this.type='month')" placeholder="Pilih Bulan" id="bulan">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="format">Format <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="format">
                                    <option>Pilih Format</option>
                                    <option>Pdf</option>
                                    <option>Excel</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex mt-3 mb-4">
                            <button type="submit" class="btn btn-sm btn-warning px-3 py-2 mr-3">Cetak</button>
                            <button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->