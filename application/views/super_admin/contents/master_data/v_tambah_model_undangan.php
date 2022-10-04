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
                                    <li class="breadcrumb-item disabled" aria-current="page">Master Data</li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/MasterData/dataModelUndangan') ?>" class="text-link">Data Model Undangan</a></li>
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
                        <div class="form-group mb-3">
                            <label for="jenisUndangan">Jenis Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="jenisUndangan">
                                    <option>Pilih Jenis Undangan</option>
                                    <option>Undangan Pernikahan</option>
                                    <option>Undangan Khitanan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategoriUndangan">Kategori Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="kategoriUndangan">
                                    <option>Pilih Kategori Undangan</option>
                                    <option>Special</option>
                                    <option>Standard</option>
                                    <option>Basic</option>
                                </select>
                            </div>
                        </div>
                        <!-- Harga Sesuai Kategori Undangan yang dipilih -->
                        <div class="form-group mb-3">
                            <label for="harga">Harga Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Harga Undangan" id="harga" value="Rp. 150.000" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="modelUndangan">Model Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Nama Model Undangan" id="modelUndangan">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="uploadSampul">Upload Sampul Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend h-75">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadSampul">
                                    <label class="custom-file-label" for="uploadCover">Choose file</label>
                                </div>
                            </div>
                            <p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="uploadCover">Upload Cover Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend h-75">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadCover">
                                    <label class="custom-file-label" for="uploadCover">Choose file</label>
                                </div>
                            </div>
                            <p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG), rekomendasi format SVG (270 x 378 pixels) </p>
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