<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('src/fontawesome-free-6.2.0-web/css/all.css') ?>">

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url('src/style/marketplace/style28.css') ?>">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    	<!-- Tailwind Elements -->
	<script src="<?= base_url('src/style/tailwindCss/node_modules/tw-elements/dist/js/index.min.js') ?>"></script>

    <script src="<?= base_url('src/style/tailwindCss/node_modules/')?>flowbite/dist/flowbite.js"></script>

    <style>
      .carousel-indicators button {
        width: 3px !important;
        height: 3px !important;
        border-radius: 100%;
        border: 1px solid #2989A8 !important;
        padding: 3px !important;
        margin-right: 3px !important;
        margin-left: 3px !important;
      }
      .carousel-indicators .active {
        background-color: #2989A8;
      }
      .carousel-indicators button:hover {
        background-color: #2989A8;
        opacity: 0.6;
      }
    </style>

</head>
<body class="bg-cover bg-mp-primary-sm xl:bg-mp-primary-xl font-PrimaryPoppins text-slate-700 flex flex-col justify-between min-h-screen max-h-full">
    
    <header class="h-full">
      <!-- Nav Top -->
      <nav class="hidden xl:flex relative w-full flex-wrap items-center justify-between py-4 text-slate-500 hover:text-slate-700 focus:text-slate-700 navbar navbar-expand-lg navbar-light px-20">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between">
          <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
            <a class=" flex flex-col pl-0 list-style-none mr-auto items-center text-slate-900 hover:text-slate-900 focus:text-slate-900 mt-2 lg:mt-0" href="#">
              <img src="<?= base_url('assets/icons/logo_metashare.png')?>" style="height: 20px" alt="" loading="lazy" />
            </a>
          </div>
          <!-- Collapsible wrapper -->
          <!-- Right elements -->
          <div class="flex items-center relative">
            <!-- Icon -->
            <ul class="navbar-nav flex">
              <li class="nav-item p-2">
                <a class="nav-link text-primary-blue-cyan font-semibold hover:saturate-150 focus:saturate-200 p-0" href="#">Home</a>
              </li>
              <li class="nav-item p-2">
                <button class="nav-link text-slate-500 hover:text-slate-800 focus:text-slate-900 p-0" href="#" id="multiLevelDropdownButtonNav" data-dropdown-toggle="dropdownNav">Jenis <span><i class="fa fa-chevron-down fa-xs"></i></span></button>
                <!-- Dropdown menu -->
                <div id="dropdownNav" class="hidden z-10 w-60 bg-white rounded divide-y divide-slate-100 shadow dark:bg-slate-700 text-sm">
                    <ul class="py-1 text-sm text-slate-400 dark:text-slate-200" aria-labelledby="multiLevelDropdownButtonNav">
                      <li>
                        <button id="doubleDropdownButtonNavPernikahan" data-dropdown-toggle="doubleDropdownNavPernikahan" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Undangan Pernikahan <span><i class="fa fa-chevron-right fa-xs"></i></span></button>
                          <div id="doubleDropdownNavPernikahan" class="hidden z-10 w-44 bg-white rounded divide-y divide-slate-100 shadow dark:bg-slate-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(10px, 1325px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="right-start">
                            <ul class="py-1 text-sm text-slate-400 dark:text-slate-200" aria-labelledby="doubleDropdownButtonNavPernikahan">
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Specialll</a>
                              </li>
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
                              </li>
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
                              </li>
                            </ul>
                        </div>
                      </li>
                      <li>
                        <button id="doubleDropdownButtonNavKhitanan" data-dropdown-toggle="doubleDropdownNavKhitanan" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Undangan Khitanan <span><i class="fa fa-chevron-right fa-xs"></i></span></button>
                          <div id="doubleDropdownNavKhitanan" class="hidden z-10 w-44 bg-white rounded divide-y divide-slate-100 shadow dark:bg-slate-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(10px, 1325px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="right-start">
                            <ul class="py-1 text-sm text-slate-400 dark:text-slate-200" aria-labelledby="doubleDropdownButtonNavKhitanan">
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Special</a>
                              </li>
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
                              </li>
                              <li>
                                <a href="#" class="block py-2 px-4 hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
                              </li>
                            </ul>
                        </div>
                      </li>
                    </ul>
                </div>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 hover:text-slate-800 focus:text-slate-900 p-0" href="#">Testimoni</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 hover:text-slate-800 focus:text-slate-900 p-0" href="#">Tentang</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link border bg-slate-50 rounded-3xl border-slate-600 text-slate-600 hover:bg-primary-blue-cyan hover:text-white hover:border-white focus:border-white  focus:bg-primary-blue-cyan focus:text-white py-1" href="#"><span class="px-1">Sign Up</span></a>
              </li>
              <!-- *** Button Profile dan logout aktif menggantikan sign up ketika user telah daftar dan login *** -->
              <!-- <li class="nav-item p-2">
                <a class="nav-link text-slate-500 hover:text-slate-800 focus:text-slate-900 p-0" href="#">Profile</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 hover:text-slate-800 focus:text-slate-900 p-0" href="#">Logout</a>
              </li> -->
            </ul>
          </div>
          <!-- Right elements -->
        </div>
      </nav>
      <!-- Nav Top -->
      <!-- Nav Bottom-->
      <nav class="xl:hidden">
        <div id="bottom-navigation" class="fixed inset-x-0 bottom-0 z-30 border-t-2">
          <div id="tabs" class="tabs bg-[#F7FDF4] flex w-full mx-auto  text-[#666666]">
            <a href="" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Marketplace") ? $iconNav['homeActive'] : $iconNav['home'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1z <?= ($this->uri->segment(2) == "Marketplace") ? 'text-primary-blue-cyan' : '' ?>">Home</p>
            </a>
            <a href="" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Marketplace") ? $iconNav['jenisActive'] : $iconNav['jenis'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1z <?= ($this->uri->segment(2) == "Marketplace") ? 'text-primary-blue-cyan' : '' ?>">Jenis</p>
            </a>
            <a href="" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Marketplace") ? $iconNav['testimoni'] : $iconNav['testimoni'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1z <?= ($this->uri->segment(2) == "Marketplace") ? 'text-primary-blue-cyan' : '' ?>">Testimoni</p>
            </a>
            <a href="" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Marketplace") ? $iconNav['tentangActive'] : $iconNav['tentang'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1z <?= ($this->uri->segment(2) == "Marketplace") ? 'text-primary-blue-cyan' : '' ?>">Tentang</p>
            </a>
            <a href="" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Marketplace") ? $iconNav['profileActive'] : $iconNav['profile'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1z <?= ($this->uri->segment(2) == "Marketplace") ? 'text-primary-blue-cyan' : '' ?>">Profile</p>
            </a>
          </div>
        </div>
      </nav>
      <!-- Nav Bottom End -->
    </header>

    <main class="px-5 pt-4 pb-4 xl:px-20 xl:pt-6 xl:pb-12 text-xs xl:text-sm">
        <div class="xl:hidden flex justify-end">
          <img src="<?= base_url('assets/icons/logo_metashare.png')?>" class="w-28 mb-5" alt="Logo Metashare">
        </div>
        <div class="flex xl:items-center">
          <div class="xl:w-[60%] xl:pr-24">
            <h1 class="text-lg xl:text-3xl font-Montserrat font-semibold text-slate-800">Hallo, <p>Selamat Datang!</p></h1>
            <div class="flex mt-5">
              <img  class="w-8 xl:w-10 mr-3" src="<?= base_url('assets/ilustrations/marketplace/ils_home_2.svg')?>" alt="">
              <p class="flex items-center justify-center text-slate-500 xl:mr-12">PIlih Desain Undangan Penikahan Digital Yang Menurut Anda Paling Menarik, Lalu Kami Yang Akan Mensettingnya Untuk Anda </p>
            </div>
            <div class="mt-8">
              <a class="text-base-xs xl:text-base-md px-3 xl:px-5 py-2 bg-gradient-to-r from-secondary-gr-l to-secondary-gr-r hover:bg-gradient-to-l hover:from-secondary-gr-l hover:to-secondary-gr-r text-white rounded-lg transition duration-500" href="">Sign In</a>
            </div>
          </div>
          <div class="hidden xl:flex xl:w-[40%]">
            <img  class="xl:w-[350px]" src="<?= base_url('assets/ilustrations/marketplace/ils_home.svg')?>" alt="">
          </div>
        </div>
        <!-- Kategori Special -->
        <div class="border border-slate-600/20 shadow bg-white rounded-xl pl-4 xl:px-6 mt-12">
          <div class="flex justify-between text-base-md xl:text-lg font-MontserratBold text-slate-700 mt-5">
            <h1>Kategori Special</h1>
            <!-- Button SLider XL -->
            <div class="hidden xl:flex">
              <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-400 mr-8" id="prevKategoriSpecialXl">
                <i class="fa fa-chevron-left"></i>
              </button>
              <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-400" id="nextKategoriSpecialXl">
                <i class="fa fa-chevron-right"></i>
              </button>
            </div>
            <!-- Button SLider XL -->
          </div>
          <div class="flex items-center justify-center w-full h-full pt-4 pb-1 xl:pb-6">
              <div class="w-full relative flex items-center justify-center">
                  <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                      <div id="sliderKategoriSpecial" class="h-full grid grid-flow-col auto-cols-max gap-6 items-center justify-start transition ease-out duration-700">

                        <? for($i = 0; $i < 10; $i++) :?>
                        
                          <div class="relative">
                            <div class="flex justify-center items-center">
                              <div>
                                  <div class="cover-image border border-slate-400/30 rounded-2xl">
                                      <div id="carouselCoverSpecial<?=$i?>" class="carousel slide relative" data-bs-ride="carousel">
                                        <div class="carousel-indicators justify-center flex p-0 mt-3">
                                            <button type="button" data-bs-target="#carouselCoverSpecial<?=$i?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselCoverSpecial<?=$i?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class=" carousel-inner relative w-full overflow-hidden">
                                          <div class="carousel-item active float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_sampul/sampul_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3  " alt="Sampul"/>
                                          </div>
                                          <div class="carousel-item float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_cover/cover_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3 " alt="Sampul"/>
                                          </div>
                                        </div>
                                        <!-- <div class="button-actions absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"  id="button-actions<?=$i?>">
                                          <div><button>kfdldnf</button></div>
                                          <div><button>kfdldnf</button></div>
                                        </div> -->
                                      </div>
                                      <div class="mx-3 mb-3">
                                        <h1 class="text-base-xs xl:text-base text-slate-600">Flower Flying <?= $i?></h1>
                                        <p class="text-base-1xs xl:text-base-xs text-slate-400">Undangan Pernikahan Islami/Special</p>
                                      </div>
                                      <div class="flex mx-3 mb-4 justify-center">
                                        <a href="" class="text-base-xs xl:text-sm border text-primary-blue-cyan/70 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Preview</a>
                                        <a href="" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        <? endfor ?>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Button SLider Mobile -->
          <div class="flex xl:hidden justify-center pb-1">
            <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-500/70 mr-4 p-3" id="prevKategoriSpecialMobile">
              <i class="fa fa-chevron-left fa-lg"></i>
            </button>
            <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-500/70 ml-4 p-3" id="nextKategoriSpecialMobile">
              <i class="fa fa-chevron-right fa-lg"></i>
            </button>
          </div>
          <!-- Button SLider Mobile -->
        </div>
        <!-- Kategori Special End-->
        
         <!-- Kategori Standard -->
         <div class="border border-slate-600/20 shadow bg-white rounded-xl pl-4 xl:px-6 mt-10">
          <div class="flex pr-4 justify-between text-base-md xl:text-lg font-MontserratBold text-slate-700 mt-5">
            <h1>Kategori Standard</h1>
            <!-- Button SLider XL -->
            <div class="hidden xl:flex">
              <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-400 mr-8" id="prevKategoriStandardXl">
                <i class="fa fa-chevron-left"></i>
              </button>
              <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-400" id="nextKategoriStandardXl">
                <i class="fa fa-chevron-right"></i>
              </button>
            </div>
            <!-- Button SLider XL -->
          </div>
          <div class="flex items-center justify-center w-full h-full pt-4 pb-1 xl:pb-6">
              <div class="w-full relative flex items-center justify-center">
                  <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                      <div id="sliderKategoriStandard" class="h-full grid grid-flow-col auto-cols-max gap-6 items-center justify-start transition ease-out duration-700">

                        <? for($i = 0; $i < 10; $i++) :?>
                        
                          <div class="relative">
                            <div class="flex justify-center items-center">
                              <div>
                                    <div class="cover-image border border-slate-400/30 rounded-2xl">
                                      <div id="carouselCoverStandard<?=$i?>" class="carousel slide relative" data-bs-ride="carousel">
                                        <div class="carousel-indicators justify-center flex p-0 mt-3">
                                            <button type="button" data-bs-target="#carouselCoverStandard<?=$i?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselCoverStandard<?=$i?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                                        <div class=" carousel-inner relative w-full overflow-hidden">
                                          <div class="carousel-item active float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_sampul/sampul_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3  " alt="Sampul"/>
                                          </div>
                                          <div class="carousel-item float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_cover/cover_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3 " alt="Sampul"/>
                                          </div>
                                        </div>
                                        <!-- <div class="button-actions absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"  id="button-actions<?=$i?>">
                                          <div><button>kfdldnf</button></div>
                                          <div><button>kfdldnf</button></div>
                                        </div> -->
                                      </div>
                                        <div class="mx-3 mb-3">
                                          <h1 class="text-base-xs xl:text-base text-slate-600">Flower Flying <?= $i?></h1>
                                          <p class="text-base-1xs xl:text-base-xs text-slate-400">Undangan Pernikahan Islami/Standard</p>
                                        </div>
                                        <div class="flex mx-3 mb-4 justify-center">
                                          <a href="" class="text-base-xs xl:text-sm border text-primary-blue-cyan/70 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Preview</a>
                                          <a href="" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        <? endfor ?>
                      </div>
                  </div>
              </div>
          </div>
           <!-- Button SLider Mobile -->
           <div class="flex xl:hidden justify-center pb-1">
            <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-500/70 mr-4 p-3" id="prevKategoriStandardMobile">
              <i class="fa fa-chevron-left fa-lg"></i>
            </button>
            <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-500/70 ml-4 p-3" id="nextKategoriStandardMobile">
              <i class="fa fa-chevron-right fa-lg"></i>
            </button>
          </div>
          <!-- Button SLider Mobile -->
        </div>
        <!-- Kategori Standard End-->

        <!-- Kategori Basic -->
        <div class="border border-slate-600/20 shadow bg-white rounded-xl pl-4 xl:px-6 mt-10">
          <div class="flex pr-4 justify-between text-base-md xl:text-lg font-MontserratBold text-slate-700 mt-5">
            <h1>Kategori Basic</h1>
            <!-- Button SLider XL -->
            <div class="hidden xl:flex">
              <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-400 mr-8" id="prevKategoriBasicXl">
                <i class="fa fa-chevron-left"></i>
              </button>
              <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-400" id="nextKategoriBasicXl">
                <i class="fa fa-chevron-right"></i>
              </button>
            </div>
            <!-- Button SLider XL -->
          </div>
          <div class="flex items-center justify-center w-full h-full pt-4 pb-1 xl:pb-6">
              <div class="w-full relative flex items-center justify-center">
                  <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                      <div id="sliderKategoriBasic" class="h-full grid grid-flow-col auto-cols-max gap-6 items-center justify-start transition ease-out duration-700">

                        <? for($i = 0; $i < 10; $i++) :?>
                        
                          <div class="relative">
                            <div class="flex justify-center items-center">
                              <div>
                                    <div class="cover-image border border-slate-400/30 rounded-2xl">
                                      <div id="carouselCoverBasic<?=$i?>" class="carousel slide relative" data-bs-ride="carousel">
                                        <div class="carousel-indicators justify-center flex p-0 mt-3">
                                              <button type="button" data-bs-target="#carouselCoverBasic<?=$i?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                              <button type="button" data-bs-target="#carouselCoverBasic<?=$i?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                          </div>
                                        <div class=" carousel-inner relative w-full overflow-hidden">
                                          <div class="carousel-item active float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_sampul/sampul_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3  " alt="Sampul"/>
                                          </div>
                                          <div class="carousel-item float-left w-full">
                                            <img src="<?= base_url('storage/model_undangan_cover/cover_a.svg')?>" class=" block w-[260px] h-[368px] rounded-md border m-3 " alt="Sampul"/>
                                          </div>
                                        </div>
                                        <!-- <div class="button-actions absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"  id="button-actions<?=$i?>">
                                          <div><button>kfdldnf</button></div>
                                          <div><button>kfdldnf</button></div>
                                        </div> -->
                                      </div>
                                        <div class="mx-3 mb-3">
                                          <h1 class="text-base-xs xl:text-base text-slate-600">Flower Flying <?= $i?></h1>
                                          <p class="text-base-1xs xl:text-base-xs text-slate-400">Undangan Pernikahan Islami/Basic</p>
                                        </div>
                                        <div class="flex mx-3 mb-4 justify-center">
                                          <a href="" class="text-base-xs xl:text-sm border text-primary-blue-cyan/70 border-primary-blue-cyan/70 px-3 py-1 rounded-lg hover:bg-primary-blue-cyan hover:text-white hover:border-white mr-3"> <i class="fa fa-eye"></i> Preview</a>
                                          <a href="" class="text-base-xs xl:text-sm border text-white border-success bg-success px-3 py-1 rounded-lg hover:bg-success-hover hover:border-success-hover hover:text-white"> <i class="fa-brands fa-whatsapp fa-lg"></i> Order</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        <? endfor ?>
    
                      </div>
                  </div>
              </div>
          </div>
           <!-- Button SLider Mobile -->
           <div class="flex xl:hidden justify-center pb-1">
            <button aria-label="slide backward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan cursor-pointer text-slate-500/70 mr-4 p-3" id="prevKategoriBasicMobile">
              <i class="fa fa-chevron-left fa-lg"></i>
            </button>
            <button aria-label="slide forward" class="focus:outline-none hover:contrast-150 hover:saturate-200 hover:text-primary-blue-cyan focus:contrast-200 focus:text-primary-blue-cyan text-slate-500/70 ml-4 p-3" id="nextKategoriBasicMobile">
              <i class="fa fa-chevron-right fa-lg"></i>
            </button>
          </div>
          <!-- Button SLider Mobile -->
        </div>
        <!-- Kategori Basic End-->
        <div class="py-12">
          <h1 class="text-center text-md xl:text-xl font-Montserrat font-semibold my-8">Paket Harga <hr class="w-28 mt-1 flex mx-auto text-black"></h1>
          <div class="columns-1 xl:gap-x-10 md:columns-5xs xl:columns-3">
            <div class="border rounded-2xl h-[550px] xl:h-[640px] mb-5 xl:mb-0">
                <div class="chead text-white text-md tracking-widest bg-[#4C92EF] rounded-t-xl border border-[#4C92EF] text-center py-5">
                  <h1>Special</h1>
                </div>
                <div class="mx-5">
                  <p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl">150.000</span></p>
                  <p class="mb-3">Fitur yang tersedia : </p>
                  <ul class="space-y-1 max-w-md list-inside text-slate-600/70">
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Sampul</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Cover</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Data Mempelai Pria & Wanita</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Mempelai Pria(Opsional)</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Mempelai Wanita(Opsional )</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Waktu Pelaksanaan Akad & Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Gallery</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Video Preweeding</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Cerita Singkat Tentang Perjalan Cinta</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Berikan Hadiah</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Ucapan Bahagia</p>
                      </li>
                  </ul>
                  <p class="mt-5 mb-3">Ketentuan : </p>
                  <ul class="text-slate-600/70 list-disc list-inside">
                    <li>Unlimited Penginputan Tamu Undangan</li>
                    <li>Berhak Memilih Lagu Backsong</li>
                    <li>Foto Gallery Max 8 Foto</li>
                    <li>Perjalanan Cinta Max 3 Tahap</li>
                    <li>Unlimited Revisi</li>
                  </ul>
                </div>
            </div>
            <div class="border rounded-2xl h-[550px] xl:h-[640px] mb-5 xl:mb-0">
                <div class="chead text-white tracking-widest text-md bg-[#EC268F] rounded-t-xl border border-[#EC268F] text-center py-5">
                  <h1>Standard</h1>
                </div>
                <div class="mx-5">
                  <p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl">130.000</span></p>
                  <p class="mb-3">Fitur yang tersedia : </p>
                  <ul class="space-y-1 max-w-md list-inside text-slate-600/70">
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Sampul</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Cover</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Data Mempelai Pria & Wanita</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Mempelai Pria(Opsional)</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Mempelai Wanita(Opsional )</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Waktu Pelaksanaan Akad & Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-400 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Gallery</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Video Preweeding</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Cerita Singkat Tentang Perjalan Cinta</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Berikan Hadiah</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Ucapan Bahagia</p>
                      </li>
                  </ul>
                  <p class="mt-5 mb-3">Ketentuan : </p>
                  <ul class="text-slate-600/70 list-disc list-inside">
                    <li>Unlimited Penginputan Tamu Undangan</li>
                    <li>Berhak Memilih Lagu Backsong</li>
                    <li>Foto Gallery Max 8 Foto</li>
                    <li class="line-through">Perjalanan Cinta Max 3 Tahap</li>
                    <li>Unlimited Revisi</li>
                  </ul>
                </div>
            </div>
            <div class="border rounded-2xl h-[550px] xl:h-[640px]">
                <div class="chead text-white text-md tracking-widest bg-[#EBD045] rounded-t-xl border border-[#EBD045] text-center py-5">
                  <h1>Basic</h1>
                </div>
                <div class="mx-5">
                  <p class="text-base rounded-xl text-center my-5">Rp. <span class="text-xl">100.000</span></p>
                  <p class="mb-3">Fitur yang tersedia : </p>
                  <ul class="space-y-1 max-w-md list-inside text-slate-600/70">
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Sampul</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Foto Cover</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Data Mempelai Pria & Wanita</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Mempelai Pria(Opsional)</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Mempelai Wanita(Opsional )</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Waktu Pelaksanaan Akad & Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-400 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Goggle Maps Untuk Tempat Akad Dan Resepsi</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Foto Gallery</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Video Preweeding</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-red-400 dark:text-red-300 flex-shrink-0 fa fa-circle-xmark"></i>
                          <p>Cerita Singkat Tentang Perjalan Cinta</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Berikan Hadiah</p>
                      </li>
                      <li class="flex items-center">
                          <i class="mr-2 text-green-400 dark:text-green-300 flex-shrink-0 fa fa-circle-check"></i>
                          <p>Ucapan Bahagia</p>
                      </li>
                  </ul>
                  <p class="mt-5 mb-3">Ketentuan : </p>
                  <ul class="text-slate-600/70 list-disc list-inside">
                    <li>Unlimited Penginputan Tamu Undangan</li>
                    <li>Berhak Memilih Lagu Backsong</li>
                    <li class="line-through">Foto Gallery Max 8 Foto</li>
                    <li class="line-through">Perjalanan Cinta Max 3 Tahap</li>
                    <li>Unlimited Revisi</li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
    </main>

    <footer class="text-base-1xs xl:text-xs xl:text-base-xs">
        <div class="px-5 xl:px-20 pt-4 pb-2 xl:pt-5 xl:pb-5 bg-[#3B4B62] dark:bg-gray-900">
          <div class="">
            <div class="flex items-center justify-center">
              <img class="h-[14px] xl:h-[20px] saturate-150" src="<?= base_url('assets/icons/logo_metashare.png')?>" alt="">
            </div>
            <div class="xl:mx-72 xl:text-sm leading-4 xl:leading-5 mt-3 text-slate-300 text-justify xl:text-center">Metashare adalah sebuah platfrom yang menyediakan berbagai macam model undangan Pernikahan digital berdasarkan jenis kategori Special, Standard, dan Basic</div>
            <div class="flex items-center justify-center mt-1">
              <a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]"  src="<?= base_url('assets/icons/icons_marketplace/footer_fb.svg')?>" alt="Icon Facebook"></a>
              <a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]"  src="<?= base_url('assets/icons/icons_marketplace/footer_ig.svg')?>" alt="Icon Instagram"></a>
              <a href="" class="p-2 mr-3 hover:saturate-150 hover:contrast-150 focus:saturate-200 focus:contrast-200"><img class="h-[14px]  w-[14px] xl:h-[18px]  xl:w-[18px]"  src="<?= base_url('assets/icons/icons_marketplace/footer_wa.svg')?>" alt="Icon Whatsapp"></a>
            </div>
          </div>
        </div>
        <div class="text-base-2xs xl:text-base-xs text-center pb-16 pt-1 xl:px-12 xl:py-2 bg-[#1C2D46] xl:flex xl:items-center sm:justify-between">
            <span class="text-slate-400 xl:text-center dark:text-slate-400">© 2022 <a href="" class="hover:underline">Metashare</a> by Paralogy Team
            </span>
            <div class="hidden xl:flex mt-4 text-sm space-x-6 xl:justify-center xl:mt-0">
              <!-- Icon -->
              <ul class="navbar-nav flex">
                <li class="nav-item p-2">
                  <a class="nav-link text-primary-blue-cyan font-semibold hover:saturate-150 focus:saturate-200 p-0" href="#">Home</a>
                </li>
                <li class="nav-item p-2">
                  <button class="nav-link text-slate-400 hover:text-slate-300 focus:text-slate-200 p-0" href="#" id="multiLevelDropdownButtonFoot" data-dropdown-toggle="dropdownFoot">Jenis <span><i class="fa fa-chevron-down fa-xs"></i></span></button>
                  <!-- Dropdown menu -->
                  <div id="dropdownFoot" class="hidden z-10 w-60 text-base-xs bg-slate-300 rounded divide-y divide-slate-100 shadow dark:bg-slate-700">
                      <ul class="py-1 text-slate-600 dark:text-slate-200" aria-labelledby="multiLevelDropdownButtonFoot">
                        <li>
                          <button id="doubleDropdownButtonFootPernikahan" data-dropdown-toggle="doubleDropdownFootPernikahan" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-400 dark:hover:text-white">Undangan Pernikahan <span><i class="fa fa-chevron-right fa-xs"></i></span></button>
                            <div id="doubleDropdownFootPernikahan" class="hidden z-10 w-44 bg-slate-300 rounded divide-y divide-slate-100 shadow dark:bg-slate-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(10px, 1325px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="right-start">
                              <ul class="py-1 text-slate-600 dark:text-slate-200" aria-labelledby="doubleDropdownButtonFootPernikahan">
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Specialll99l</a>
                                </li>
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
                                </li>
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
                                </li>
                              </ul>
                          </div>
                        </li>
                        <li>
                          <button id="doubleDropdownButtonFootKhitanan" data-dropdown-toggle="doubleDropdownFootKhitanan" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Undangan Khitanan <span><i class="fa fa-chevron-right fa-xs"></i></span></button>
                            <div id="doubleDropdownFootKhitanan" class="hidden z-10 w-44 bg-slate-300 rounded divide-y divide-slate-100 shadow dark:bg-slate-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(10px, 1325px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="right-start">
                              <ul class="py-1 text-slate-600 dark:text-slate-200" aria-labelledby="doubleDropdownButtonFootKhitanan">
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Special</a>
                                </li>
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
                                </li>
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-slate-200 focus:bg-slate-200 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
                                </li>
                              </ul>
                          </div>
                        </li>
                      </ul>
                  </div>
                </li>
                <li class="nav-item p-2">
                  <a class="nav-link text-slate-400 hover:text-slate-300 focus:text-slate-200 p-0" href="#">Testimoni</a>
                </li>
                <li class="nav-item p-2">
                  <a class="nav-link text-slate-400 hover:text-slate-300 focus:text-slate-200 p-0" href="#">Tentang</a>
                </li>
                <li class="nav-item p-2">
                  <a class="nav-link border bg-slate-600 rounded-xl border-slate-300 text-slate-300 hover:bg-primary-blue-cyan hover:text-white focus:bg-primary-blue-cyan focus:text-white py-1" href="#"><span class="px-2">Sign Up</span></a>
                </li>
              <!-- *** Button Profile dan logout aktif menggantikan sign up ketika user telah daftar dan login *** -->
                <!-- <li class="nav-item p-2">
                  <a class="nav-link text-slate-400 hover:text-slate-300 focus:text-slate-200 p-0" href="#">Profile</a>
                </li>
                <li class="nav-item p-2">
                  <a class="nav-link text-slate-400 hover:text-slate-300 focus:text-slate-200 p-0" href="#">Logout</a>
                </li> -->
              </ul>
            </div>
        </div>
    </footer>

    <script>
      // sliderKategoriSpecial Kategori Special
      let defaultTransform = 0;
      function goNextKategoriSpecial() {
          defaultTransform = defaultTransform - 310;
          var sliderKategoriSpecial = document.getElementById("sliderKategoriSpecial");
          if (Math.abs(defaultTransform) >= sliderKategoriSpecial.scrollWidth / 1) defaultTransform = 0;
          sliderKategoriSpecial.style.transform = "translateX(" + defaultTransform + "px)";
      }
      nextKategoriSpecialXl.addEventListener("click", goNextKategoriSpecial);
      nextKategoriSpecialMobile.addEventListener("click", goNextKategoriSpecial);
      
      function goPrevKategoriSpecial() {
          var sliderKategoriSpecial = document.getElementById("sliderKategoriSpecial");
          if (Math.abs(defaultTransform) < 310) defaultTransform = 0;
          else defaultTransform = defaultTransform + 310;
          sliderKategoriSpecial.style.transform = "translateX(" + defaultTransform + "px)";
      }
      prevKategoriSpecialXl.addEventListener("click", goPrevKategoriSpecial);
      prevKategoriSpecialMobile.addEventListener("click", goPrevKategoriSpecial);
      // Slider Kategori Special End

      // sliderKategoriSpecial Kategori Standard
      function goNextKategoriStandard() {
          defaultTransform = defaultTransform - 310;
          var sliderKategoriStandard = document.getElementById("sliderKategoriStandard");
          if (Math.abs(defaultTransform) >= sliderKategoriStandard.scrollWidth / 1) defaultTransform = 0;
          sliderKategoriStandard.style.transform = "translateX(" + defaultTransform + "px)";
      }
      nextKategoriStandardXl.addEventListener("click", goNextKategoriStandard);
      nextKategoriStandardMobile.addEventListener("click", goNextKategoriStandard);

      function goPrevKategoriStandard() {
          var sliderKategoriStandard = document.getElementById("sliderKategoriStandard");
          if (Math.abs(defaultTransform) < 310) defaultTransform = 0;
          else defaultTransform = defaultTransform + 310;
          sliderKategoriStandard.style.transform = "translateX(" + defaultTransform + "px)";
      }
      prevKategoriStandardXl.addEventListener("click", goPrevKategoriStandard);
      prevKategoriStandardMobile.addEventListener("click", goPrevKategoriStandard);
      // Slider Kategori Standard End

      // sliderKategoriSpecial Kategori Basic
      function goNextKategoriBasic() {
          defaultTransform = defaultTransform - 310;
          var sliderKategoriBasic = document.getElementById("sliderKategoriBasic");
          if (Math.abs(defaultTransform) >= sliderKategoriBasic.scrollWidth / 1) defaultTransform = 0;
          sliderKategoriBasic.style.transform = "translateX(" + defaultTransform + "px)";
      }
      nextKategoriBasicXl.addEventListener("click", goNextKategoriBasic);
      nextKategoriBasicMobile.addEventListener("click", goNextKategoriBasic);
      function goPrevKategoriBasic() {
          var sliderKategoriBasic = document.getElementById("sliderKategoriBasic");
          if (Math.abs(defaultTransform) < 310) defaultTransform = 0;
          else defaultTransform = defaultTransform + 310;
          sliderKategoriBasic.style.transform = "translateX(" + defaultTransform + "px)";
      }
      prevKategoriBasicXl.addEventListener("click", goPrevKategoriBasic);
      prevKategoriBasicMobile.addEventListener("click", goPrevKategoriBasic);
      // Slider Kategori Basic End

      

    </script>

</body>
</html>