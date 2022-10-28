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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/MasterData/dataKustomer') ?>" class="text-link">Data Kustomer</a></li>
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
                            <label for="username">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="heru@gmail.com" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                           <div class="row">
                                <div class="col-6 mb-1">
                                    <div class="form-group">
                                        <label for="password">Password Baru <span class="text-danger">*</span></label>
                                        <div class="input-group border-password">
                                            <input class="form-control border-0" id="password" type="password" placeholder="Masukan Password Baru (Minimal 8 Karakter)" autocomplete="current-password" id="password"><span role="button" class="d-flex" style="cursor: pointer;"><i class="fas fa-eye-slash fa-xs mr-2 my-auto" id="togglePassword"></i></span>
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
                        <div class="flex mb-4">
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