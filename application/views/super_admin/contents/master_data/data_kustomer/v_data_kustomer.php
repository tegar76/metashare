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
                        <div class="input-group-text"><i class="fas fa-filter"></i></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="font-weight-medium">Data Kustomer</h6>
                        <hr class="mx-n4">
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">No</th>
                                    <th style="width: 8%;">Nama</th>
                                    <th style="width: 7%;">No Telepon</th>
                                    <th style="width: 7%;">Email</th>
                                    <th style="width: 6%;">Total Order</th>
                                    <th style="width: 6%;">Foto Profile</th>
                                    <th style="width: 7%;">Dibuat</th>
                                    <th style="width: 7%;">Diedit</th>
                                    <th style="width: 4%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Heru Rudiansah</td>
                                    <td>082322452311</td>
                                    <td>Heru@gmail.com</td>
                                    <td>122</td>
                                    <td><img src="<?= base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg')?>" alt="Foto Kustomer" width="42" height="42"></td>
                                    <td>02-09-2022 18:00 WIB</td>
                                    <td>-</td>
                                    <td>
                                        <div class="flex">
                                            <a href="<?= base_url('SuperAdmin/MasterData/editKustomer')?>" class="btn btn-sm btn-success mr-1"><i data-feather="edit" class="feather-14" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
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