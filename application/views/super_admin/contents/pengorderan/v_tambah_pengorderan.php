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
                            <label for="nama_kustomer">Nama Kustomer <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Nama Kustomer" id="nama_kustomer">
                            </div>
                        </div>
                        <p class="text-primary">Akun Kustomer</p>
                        <div class="form-group mb-3">
                            <label for="no_telp">No Telepon <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Masukan No Telepon Kustomer" id="no_telp">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                           <div class="row">
                                <div class="col-6 mb-1">
                                    <div class="form-group">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <div class="input-group border-password">
                                            <input class="form-control border-0" id="password" type="password" placeholder="Masukan Password (Minimal 8 Karakter)" autocomplete="current-password" id="password"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="togglePassword"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="passwordConfirm">Konfirmasi Password <span class="text-danger">*</span></label>
                                        <div class="input-group border-password">
                                            <input class="form-control border-0" id="passwordConfirm" type="password" placeholder="Masukan Konfirmasi Password" autocomplete="current-password"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="togglePasswordConfirm"></i></span>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <p class="text-primary">Data Transaksi</p>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="jenis" value="Undangan Pernikahan Digital" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kategori">Kategori Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="kategori">
                                    <option selected>Pilih Kategori Undangan</option>
                                    <option>Special</option>
                                    <option>Standard</option>
                                    <option>Basic</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="model">Model Undangan <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="model">
                                    <option selected>Pilih Model Undangan</option>
                                    <option>Model A</option>
                                    <option>Model B</option>
                                    <option>Model C</option>
                                </select>
                            </div>
                        </div>
                        <p class="text-info underline">* Mohon Cek Kembali Model Undangan</p>
                        <div class="form-group mb-3">
                            <label for="sumber_order">Sumber Order <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-control" id="sumber_order">
                                    <option selected>Pilih Sumber Order</option>
                                    <option>Shopee</option>
                                    <option>Lazada</option>
                                    <option>Tokopedia</option>
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