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
                            <label for="nama_kustomer">Nama Kustomer</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly value="" id="nama_kustomer">
                            </div>
                        </div>
                        <p class="text-primary">Data Transaksi</p>
                        <div class="form-group mb-3">
                            <label for="no_telp">Kode</label>
                            <div class="input-group">
                                <input type="number" class="form-control" readonly value="" id="no_telp">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis Undangan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jenis" value="Undangan Pernikahan Digital" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori Undangan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kategori" value="Basic" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model Undangan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="model" value="Model A" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="sumber_order">Sumber Order</label>
                            <div class="input-group">
                                 <input type="text" class="form-control" id="jenis" value="Marketplace" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="sumber_order">Sumber Order</label>
                            <div class="input-group">
                                 <input type="text" class="form-control" id="jenis" value="Marketplace" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="upload_bukti_bayar">Bukti Pembayaran <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend h-75">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload_bukti_bayar">
                                    <label class="custom-file-label" for="uploadCover">Choose file</label>
                                </div>
                            </div>
                            <p>Catatan: File max 2mb format (PNG,JPG,JPEG)</p>
                        </div>
                        <p class="text-primary">Data Penugasan</p>
                        <div class="form-group mb-3">
                            <label for="kategori">Admin Yang Menangani <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="kategori">
                                    <option selected>Pilih Admin Yang Menangani</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
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
            
            <script>
                // Show Toggle Password
                const togglePassword = document.querySelector('#togglePassword');
                const password = document.querySelector('#password');
                togglePassword.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye');
                });
                // Show Toggle Password baru
                const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
                const passwordConfirm = document.querySelector('#passwordConfirm');
                togglePasswordConfirm.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordConfirm.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye');
                });
            </script>