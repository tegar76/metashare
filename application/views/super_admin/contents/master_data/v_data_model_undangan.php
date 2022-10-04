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
                <div class="card shadow px-5 py-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#pernikahan" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Pernikahan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#khitanan" data-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Khitanan</span>
                            </a>
                        </li>
                    </ul>

                    <div class="form-group col-4 mt-4">
                        <div class="input-group mb-2 ml-n3">
                            <select class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="">Basic</option>
                                <option value="">Standard</option>
                                <option value="">Special</option>
                            </select>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-filter"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content mb-3">
                        <div class="tab-pane show active" id="pernikahan">
                            <div class="row ml-0">
                                <!-- Item Model -->
                                <div class="card shadow-sm card-sampul-cover p-2 mx-2 mb-3">
                                    <div id="carousel-sampul-cover" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="img-sampul-cover mx-auto" src="<?= base_url('storage/model_undangan_sampul/sampul_a.svg')?>" alt="Cover">
                                                <!-- Caption Off -->
                                                <!-- <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">First title goes here</h3>
                                                    <p>this is the subcontent you can use this</p>
                                                </div> -->

                                            </div>
                                            <div class="carousel-item">
                                                <img class="img-sampul-cover mx-auto" src="<?= base_url('storage/model_undangan_cover/cover_a.svg')?>" alt="Cover">
                                                <!-- Caption Off -->
                                                <!-- <div class="carousel-caption d-none d-md-block">
                                                    <h3 class="text-white">Second title goes here</h3>
                                                    <p>this is the subcontent you can use this</p>
                                                </div> -->

                                            </div>
                                        </div>
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-sampul-cover" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-sampul-cover" data-slide-to="1"></li>
                                        </ol>
                                    </div>
                                    <!-- <img class="img-cover mx-auto" src="<?= base_url('storage/cover_model_undangan/cover_a.svg')?>" alt="Cover"> -->
                                    <h5 class="text-black mt-4">Model A</h5>
                                    <p>Undangan Pernikahan / Special</p>
                                    <h4 class="text-danger mt-n2">Rp. 150.000</h4>
                                    <div class="mt-2">
                                        <a target="_blank" href="<?= base_url('PreviewModelUndangan')?>" class="btn btn-sm btn-outline-info text-sm  px-2 mr-3">
                                            <i class="fas fa-eye mr-1"></i>
                                            <span class="mb-1">Preview</span>
                                        </a>
                                    </div>
                                    <div class="text-xs mt-3 mb-n2">
                                        <span>
                                        <i data-feather="plus" class="feather-icon feather-10"></i>
                                        22-08-2022 02:00 WIB
                                        </span>
                                        <span>
                                            <i data-feather="edit" class="feather-icon feather-10 ml-2"></i>
                                            22-08-2022 02:00 WIB
                                        </span>
                                    </div>
                                    <hr class="mx-n2">
                                    <div class="d-flex mx-auto text-sm text-gray-600">
                                        <p class="mx-2">Total Order : 10000</p>
                                        <span class="border-left mt-n3 mb-n2 mx-2"></span>
                                        <a href="<?= base_url('SuperAdmin/MasterData/editModelUndangan')?>" class="text-success mx-2"><i data-feather="edit" class="feather-20" data-toggle="tooltip" title="Edit" data-placement="top"></i></a>
                                        <span class="border-left mt-n3 mb-n2 mx-2"></span>
                                        <a href="<?= base_url('')?>" class="text-danger mx-2"><i data-feather="trash-2" class="feather-20" data-toggle="tooltip" title="Hapus" data-placement="top"></i></a>
                                    </div>
                                </div>
                                <!-- Item Model End -->
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="khitanan">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                eu, consequat vitae, eleifend ac, enim.</p>
                            <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                quis enim.</p>
                        </div>
                    </div>
                    
                </div>
                <!-- Floating Button Add -->
                <div class="floating-container">
                    <a href="<?= base_url('SuperAdmin/MasterData/tambahModelUndangan') ?>">
                        <div class="floating-button">+</div>
                    </a>
                </div>
                <!-- Floating Button Add End -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->