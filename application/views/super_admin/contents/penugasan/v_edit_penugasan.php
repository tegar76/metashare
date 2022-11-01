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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/Penugasan') ?>" class="text-link">Penugasan</a></li>
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
                    <form class="mt-4">
                        <p class="text-primary">Data Kustomer</p>
                        <div class="form-group mb-3">
                            <label for="namaKustomer">Nama Kustomer</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="dnknd" id="namaKustomer" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="noTelp">No Telepon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="noTelp" value="dnknd" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" value="dnknd" readonly>
                            </div>
                        </div>
                        <p class="text-primary">Data Transaksi</p>
                        <div class="form-group mb-3">
                            <label for="kode">Kode</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kode" value="00001" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jenis" value="Undangan Pernikahan" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kategori" value="Spesial" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="model" value="Flower Flaying" readonly>
                            </div>
                        </div>
                        <p class="text-primary">Data Penugasan</p>
                        <div class="form-group mb-3">
                            <label for="adminYangMenangani">Admin Yang Menangani <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="adminYangMenangani">
                                    <option>Tegar</option>
                                    <option selected>Firman</option>
                                    <option>Bayu</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex mt-3 mb-4">
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