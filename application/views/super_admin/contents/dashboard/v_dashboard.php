<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html"><?= $title?></a>
                                    </li>
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
            <!-- *************************************************************** -->
            <!-- Laporan Singkat -->
            <!-- *************************************************************** -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="font-weight-medium text-black">99</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Admin Aktif</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user-plus" class="feather-icon"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <h2 class="font-weight-medium text-black">99</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Kustomer
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="users" class="feather-icon"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="font-weight-medium text-black">99</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Kustomer Aktif</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user-check" class="feather-icon"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <h2 class="font-weight-medium text-black">99</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Model Undangan</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="server" class="feather-icon"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Penugasan Pengerjaan Undangan Kepada Admin -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="font-weight-medium">Penugasan Pengerjaan Undangan Terbaru Kepada Admin</h6>
                        <hr class="mx-n4">
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered " style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 10%;">Tanggal</th>
                                    <th style="width: 10%;">Nama Kustomer</th>
                                    <th style="width: 10%;">No Telepon</th>
                                    <th style="width: 8%;">Kategori</th>
                                    <th style="width: 8%;">Model Undangan</th>
                                    <th style="width: 8%;">Admin</th>
                                    <th style="width: 12%;">Keterangan</th>
                                    <th style="width: 8%;">Status</th>
                                    <th style="width: 4%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>082322452311</td>
                                    <td>Special</td>
                                    <td>Model A</td>
                                    <td>Tegar Kusuma</td>
                                    <td class="text-danger">Belum Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                    <td>
                                        <a href="<?= base_url('SuperAdmin/DataKustomer/detailKustomer')?>" class="btn-sm btn-primary"><i data-feather="search" class="feather-16" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>082322452311</td>
                                    <td>Standard</td>
                                    <td>Model B</td>
                                    <td>Bayu Purnomo</td>
                                    <td class="text-warning">Proses Pengerjaan</td>
                                    <td>Aktif</td>
                                    <td>
                                        <a href="<?= base_url('SuperAdmin/DataKustomer/detailKustomer')?>" class="btn-sm btn-primary"><i data-feather="search" class="feather-16" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>082322452311</td>
                                    <td>Basic</td>
                                    <td>Model C</td>
                                    <td>Firmansah</td>
                                    <td class="text-success">Sudah Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                    <td>
                                        <a href="<?= base_url('SuperAdmin/DataKustomer/detailKustomer')?>" class="btn-sm btn-primary"><i data-feather="search" class="feather-16" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->