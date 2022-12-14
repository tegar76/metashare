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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/DataKustomer') ?>" class="text-link">Data Kustomer</a></li>
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
                            <label for="namaKustomer">Nama Kustomer <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Nama Kustomer" id="namaKustomer">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="noTelp">No Telepon <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan No Telepon" id="noTelp">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Masukan Email" id="email">
                            </div>
                        </div>
                        <p class="text-primary">Data Transaksi</p>
                        <div class="form-group mb-3">
                            <label for="modelUndangan">Model Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="selectpicker form-control" id="modelUndangan" data-live-search="true"> 
                                    <option>Pilih Model Undangan</option>
                                    <option>Model A</option>
                                    <option>Model B</option>
                                </select>
                            </div>
                        </div>
                         <!-- Setelah admin memilih model undangan sesuai yang Customer pilih, maka munculkan value form jenis, kategori, harga sesuai data-->

                        <div class="form-group mb-3">
                            <label for="jenis">Jenis <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jenis" value="Undangan Pernikahan" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kategori" value="Spesial" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga">Harga <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="harga" value="150000" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga">Cek Model Undangan</label>
                            <div class="input-group">
                            <a target="_blank" href="<?= base_url('PreviewModelUndangan')?>" class="btn     btn-sm btn-outline-info text-sm  px-2 mr-3">
                                <i class="fas fa-eye mr-1"></i>
                                <span class="mb-1">Preview</span>
                            </a>
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
                            <button type="submit" class="btn btn-sm btn-warning px-3 py-2 mr-3">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->