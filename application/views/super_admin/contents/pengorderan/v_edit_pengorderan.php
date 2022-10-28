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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/Pengorderan') ?>" class="text-link">Pengorderan</a></li>
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
                            <label>Nama Kustomer</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="Heru" readonly>
                            </div>
                        </div>
                        <p class="text-primary">Data Transaksi</p>
                        <div class="form-group mb-3">
                            <label>Kode</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="00001" readonly>
                            </div>
                        </div>
                         <!-- Setelah admin memilih model undangan sesuai yang Customer pilih, maka munculkan value form jenis, kategori, harga sesuai data-->
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jenis" value="Undangan Pernikahan Islami" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kategori" value="Special" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="model" value="Model A" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="uploadBuktiPembayaran">Upload Bukti Pembayaran <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend h-75">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadBuktiPembayaran">
                                    <label class="custom-file-label" for="uploadCover">Choose file</label>
                                </div>
                            </div>
                            <p>Catatan: File max 2mb format (PNG,JPG,JPEG) </p>
                        </div>
                        <p class="text-primary">Data Penugasan</p>
                        <div class="form-group mb-3">
                            <label for="adminYangMenangani">Admin Yang Menangani <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="adminYangMenangani">
                                    <option>Pilih Admin Yang Menangani</option>
                                    <option>Tegar</option>
                                    <option>Firman</option>
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