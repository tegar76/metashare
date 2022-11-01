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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/MasterData/dataAdmin') ?>" class="text-link">Data Admin</a></li>
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
                <div class="card shadow-sm px-3 py-2">
                    <table class="table">
                        <tbody>
                            <tr class="table-borderless">
                                <th scope="row" class="text-primary col-4">Data Admin</th>
                                <td></td>
                            </tr>
                            <tr class="table-borderless">
                                <th scope="row">Kode</th>
                                <td>ADMT002</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>Firmansah</td>
                            </tr>
                            <tr>
                                <th scope="row">No Telepon</th>
                                <td>082322452311</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>fsah@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>Paguyangan</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>Aktif</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="mt-n3">
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 class="font-weight-medium">Riwayat Pengerjaan Undangan</h6>
                            <hr class="mx-n4">
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered " style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 3%;">No</th>
                                        <th style="width: 5%;">Kode</th>
                                        <th style="width: 9%;">Tanggal</th>
                                        <th style="width: 8%;">Nama Kustomer</th>
                                        <th style="width: 8%;">Jenis</th>
                                        <th style="width: 7%;">Kategori</th>
                                        <th style="width: 8%;">Nama Model</th>
                                        <th style="width: 8%;">Admin</th>
                                        <th style="width: 12%;">Keterangan</th>
                                        <th style="width: 7%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>00003</td>
                                        <td>02-09-2022 18:00 WIB</td>
                                        <td>Heru Rudiansah</td>
                                        <td>Undangan Pernikahan Islami</td>
                                        <td>Special</td>
                                        <td>Model A</td>
                                        <td>Tegar Kusuma</td>
                                        <td class="text-danger">Belum Dikerjakan</td>
                                        <td>Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>00002</td>
                                        <td>02-09-2022 18:00 WIB</td>
                                        <td>Heru Rudiansah</td>
                                        <td>Undangan Pernikahan Islami</td>
                                        <td>Standard</td>
                                        <td>Model A</td>
                                        <td>Tegar Kusuma</td>
                                        <td class="text-warning">Proses Pengerjaan</td>
                                        <td>Tidak Aktif</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>00001</td>
                                        <td>02-09-2022 18:00 WIB</td>
                                        <td>Heru Rudiansah</td>
                                        <td>Undangan Pernikahan Umum</td>
                                        <td>Basic</td>
                                        <td>Model A</td>
                                        <td>Tegar Kusuma</td>
                                        <td class="text-success">Sudah Dikerjakan</td>
                                        <td>Tidak Aktif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mb-3 ml-4">
                        <a href="<?= base_url('Admin/MasterData/dataAdmin') ?>" class="btn btn-sm btn-warning px-2">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->