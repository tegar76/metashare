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
                                    <li class="breadcrumb-item disabled" aria-current="page">Master data</li>
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
            <!-- *************************************************************** -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="font-weight-medium">Data Admin</h6>
                        <hr class="mx-n4">
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered " style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 6%;">Kode</th>
                                    <th style="width: 9%;">Nama</th>
                                    <th style="width: 9%;">No Telepon</th>
                                    <th style="width: 12%;">Alamat</th>
                                    <th style="width: 7%;">Status</th>
                                    <th style="width: 9%;">Dibuat</th>
                                    <th style="width: 9%;">Diubah</th>
                                    <th style="width: 9%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ADMT001</td>
                                    <td>Firmansah</td>
                                    <td>082322452311</td>
                                    <td>Paguyangan</td>
                                    <td>Aktif</td>
                                    <td>15 - 08 - 2022 15 : 20 WIB </td>
                                    <td>-</td>
                                    <td>
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/MasterData/detailAdmin')?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                            <a href="<?= base_url('SuperAdmin/MasterData/editAdmin')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            <a href="<?= base_url('')?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>ADMT001</td>
                                    <td>Bayu Purnomo</td>
                                    <td>082322452311</td>
                                    <td>Paguyangan</td>
                                    <td>Tidak Aktif</td>
                                    <td>15 - 08 - 2022 15 : 20 WIB </td>
                                    <td>-</td>
                                    <td>
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/MasterData/detailAdmin')?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                            <a href="<?= base_url('SuperAdmin/MasterData/editAdmin')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            <a href="<?= base_url('')?>" class="btn btn-sm btn-danger mr-1"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Floating Button Add -->
            <div class="floating-container">
                <a href="<?= base_url('SuperAdmin/MasterData/tambahAdmin') ?>">
                    <div class="floating-button">+</div>
                </a>
            </div>
            <!-- Floating Button Add End -->
        </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->