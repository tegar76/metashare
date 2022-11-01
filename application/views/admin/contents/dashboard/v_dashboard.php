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
                                    <li class="breadcrumb-item disabled"><?= $title?>
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
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Yang Belum Dikerjakan</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i class="fa fa-file-circle-xmark fa-xl"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <h2 class="font-weight-medium text-black">99</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Dalam Proses Pengerjaan 
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i class="fa-solid fa-file-pen fa-xl"></i></span>
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
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Undangan <br> Sudah Dikerjakan </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i class="fa-solid fa-file-circle-check fa-xl"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="total">
                                <h2 class="font-weight-medium text-black">99</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Kustomer Aktif</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i class="fa-solid fa-user-check fa-xl"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="font-weight-medium">Tugas Terbaru Pengerjaan Undangan Dari Super Admin</h6>
                        <hr class="mx-n4">
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered " style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 5%;">Kode</th>
                                    <th style="width: 7%;">Tanggal</th>
                                    <th style="width: 11%;">Nama Kustomer</th>
                                    <th style="width: 6%;">Kategori</th>
                                    <th style="width: 9%;">Nama Model</th>
                                    <th style="width: 6%;">Admin</th>
                                    <th style="width: 11%;">Keterangan</th>
                                    <th style="width: 6%;">Status</th>
                                    <th style="width: 8%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>00003</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Special</td>
                                    <td>Flower Flaying</td>
                                    <td>Tegar Kusuma</td>
                                    <td class="text-danger">Belum Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                    <td>
                                        <a href="#" class="btn-sm btn-outline-primary px-2 py-1">Konfirmasi</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>00002</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Standard</td>
                                    <td>Flower Flaying</td>
                                    <td>Bayu Purnomo</td>
                                    <td class="text-warning">Proses Pengerjaan</td>
                                    <td>Aktif</td>
                                      <td>
                                        <a href="#" class="btn-sm btn-outline-primary px-2 py-1">Konfirmasi</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>00001</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Basic</td>
                                    <td>Model C</td>
                                    <td>Firmansah</td>
                                    <td class="text-success">Sudah Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                      <td>
                                        <a href="#" class="btn-sm btn-outline-primary px-2 py-1">Konfirmasi</a>
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