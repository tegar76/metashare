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
                                    <li class="breadcrumb-item" aria-current="page"><a class="text-link" href="<?= base_url('SuperAdmin/Dashboard')?>">Dashboard</a></li>
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
            <div class="form-group col-4 pb-2">
                <div class="input-group mb-2 ml-n3">
                    <input class="form-control" type="text" onfocus="(this.type='month')" placeholder="Pilih Bulan" >
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-filter"></i></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="font-weight-medium">Data Penugasan</h6>
                        <hr class="mx-n4">
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 6%;">Kode</th>
                                    <th style="width: 8%;">Tanggal</th>
                                    <th style="width: 8%;">Nama Kustomer</th>
                                    <th style="width: 7%;">Kategori</th>
                                    <th style="width: 7%;">Nama Model</th>
                                    <th style="width: 8%;">Admin</th>
                                    <th style="width: 12%;">Keterangan</th>
                                    <th style="width: 7%;">Status</th>
                                    <th style="width: 10%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>00003</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Special</td>
                                    <td>Model A</td>
                                    <td>Tegar Kusuma</td>
                                    <td class="text-danger">Belum Dikerjakan</td>
                                    <td>Tidak Aktif</td>
                                    <td>
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/Penugasan/detailPenugasan')?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                            <a href="<?= base_url('SuperAdmin/Penugasan/editPenugasan')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            <a href="<?= base_url('')?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>00002</td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>Heru Rudiansah</td>
                                    <td>Standard</td>
                                    <td>Model B</td>
                                    <td>Bayu</td>
                                    <td class="text-warning">Proses Pengerjaan</td>
                                    <td>Aktif</td>
                                    <td>
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/Penugasan/detailPenugasan')?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                            <a href="<?= base_url('SuperAdmin/Penugasan/editPenugasan')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            <a href="<?= base_url('')?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                        </div>
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
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/Penugasan/detailPenugasan')?>" class="btn btn-sm btn-primary mr-1"><i data-feather="search" class="feather-14" data-toggle="tooltip" title="Detail" data-placement="top"></i></a>
                                            <a href="<?= base_url('SuperAdmin/Penugasan/editPenugasan')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                            <a href="<?= base_url('')?>" class="btn btn-sm btn-danger"><i data-feather="trash-2" class="feather-14" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                        </div>
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