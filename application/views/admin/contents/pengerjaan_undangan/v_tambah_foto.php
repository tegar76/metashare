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
                            <label for="namaLengkapPria">Link Video Prewedding<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="namaLengkapPria" placeholder="Masukan Link Video Yang Bersumber Dari Google Drive">
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline-info px-3 py-1 mb-2 mt-3"><i class="fa fa-add mr-1"></i>Foto</button>
                        <!-- Loop Form -->
                        <div class="form-group mb-3">
                            <label for="uploadCover">Foto Ke- 1</label>
                            <div class="input-group">
                                <div class="input-group-prepend h-75">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadCover">
                                    <label class="custom-file-label" for="uploadCover">Choose file</label>
                                </div>
                            </div>
                            <p>Catatan: File max 2mb format (SVG,PNG,JPG,JPEG) </p>
                        </div>
                        <div class="flex mt-4 mb-4">
                            <button type="submit" class="btn btn-sm btn-primary px-3 py-2 mr-3">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-secondary px-3 py-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->