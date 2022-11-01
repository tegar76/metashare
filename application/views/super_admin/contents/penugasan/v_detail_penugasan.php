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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/Dashboard') ?>" class="text-link">Dashboard</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('SuperAdmin/Penugasan') ?>" class="text-link">Penugasan</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><?= $title?></li>
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
                <div class="card shadow px-3 py-2">
                    <table class="table">
                        <tbody>
                            <tr class="table-borderless">
                                <th scope="row" class="text-primary col-4">Data Konsumen</th>
                                <td></td>
                            </tr>
                            <tr class="table-borderless">
                                <th scope="row">Nama Konsumen</th>
                                <td>Heru Rudiansah</td>
                            </tr>
                            <tr>
                                <th scope="row">No Telepon</th>
                                <td>082322452311</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>heru521@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Data Transaksi</th>
                                <td></td>
                            </tr>
                            <tr class="table-borderless">
                                <th scope="row">Tanggal</th>
                                <td>02-09-2022 18:00 WIB</td>
                            </tr>
                            <tr>
                                <th scope="row">Kode</th>
                                <td>00003</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Undangan</th>
                                <td>Undangan Pernikahan</td>
                            </tr>
                            <tr>
                                <th scope="row">Kategori</th>
                                <td>Special</td>
                            </tr>
                            <tr>
                                <th scope="row">Model Undangan</th>
                                <td><a target="_blank" href="<?= base_url('PreviewModelUndangan')?>" class="text-link-detail" data-toggle="tooltip" title="Lihat" data-placement="right">Flower Garden</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Harga</th>
                                <td>150000</td>
                            </tr>
                            <tr>
                                <th scope="row">Masa Aktif</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row">Keterangan</th>
                                <td class="text-danger">Belum Dikerjakan</td> 
                                <!-- *** nama class : belum dikerjakan = text-danger, proses pengerjaan = text-warning, sudah dikerjakan = text-success -->
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>Tidak Aktif</td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Pembayaran</th>
                                <td><a target="_blank" href="<?= base_url('View/View/viewImg')?>"><img src="<?= base_url('assets/icons/icon_file_img.svg')?>" alt="" width="25" data-toggle="tooltip" title="Lihat" data-placement="right"></a></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-primary">Data Admin Yang Menangani</th>
                                <td></td>
                            </tr>
                            <tr class="table-borderless">
                                <th scope="row">Kode</th>
                                <td>Adm003</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>Bayu Purnomo</td>
                            </tr>
                            <tr>
                                <th scope="row">No Telepon</th>
                                <td>085783682736</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="mt-n3">
                    <div class="d-flex mb-2">
                        <a href="<?= base_url('SuperAdmin/Penugasan') ?>" class="btn btn-sm btn-warning px-2 mr-4">Kembali</a>
                        <a target="_blank" href="<?= base_url('wedding/runa-ratna')?>" class="btn btn-sm btn-outline-primary px-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span class="mb-1">Live Demo</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->