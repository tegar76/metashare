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
    <link rel="stylesheet" href="<?= base_url('src/style/marketplace/style91.css') ?>">

    <!--Regular Datatables CSS-->
    <link href="<?= base_url('src/style/tailwindCss/dataTables/css/data_table.css')?>" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="<?= base_url('src/style/tailwindCss/dataTables/css/responsive_data_table.css')?>" rel="stylesheet">
    <!--Custom Datatables CSS-->
    <link href="<?= base_url('src/style/tailwindCss/dataTables/css/custom_style_data_tables.css')?>" rel="stylesheet">


    <!-- Java Script -->

    <!-- Jquery -->
    <script src="<?= base_url('src/adminmart')?>/assets/libs/jquery/dist/jquery.min.js"></script>

    <!--Datatables -->
    <script src="<?= base_url('src/style/tailwindCss/dataTables/js/data_table.js')?>"></script>
    <script src="<?= base_url('src/style/tailwindCss/dataTables/js/responsive_data_table.js')?>"></script>
    <script src="<?= base_url('src/style/tailwindCss/dataTables/js/custom_id_data_tb.js')?>"></script>

    <!-- Tailwind Elements -->
    <script src="<?= base_url('src/style/tailwindCss/node_modules/tw-elements/dist/js/index.min.js') ?>"></script>

    <!-- Flowbite -->
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
<body class="bg-cover bg-mp-primary-sm font-PrimaryPoppins tracking-wide text-slate-700 flex flex-col justify-between overflow-auto scrollbar-hide xl:overflow-scroll xl:scrollbar-show">
    
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
                <a class="nav-link p-0 text-slate-500 hover:text-primary-blue-cyan/90
                <?= ($this->uri->segment(2) == "Home") ? 'text-primary-blue-cyan font-semibold' : ''?>" href="<?= base_url('Marketplace/Home')?>">Home</a>
              </li>
              <li class="nav-item p-2">
                <button class="nav-link text-slate-500 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Kategori") ? 'text-primary-blue-cyan font-semibold' : ''?>" id="multiLevelDropdownButtonNav" data-dropdown-toggle="dropdownNav">Kategori <span><i class="fa fa-chevron-down fa-xs"></i></span></button>
                <!-- Dropdown menu -->
                <div id="dropdownNav" class="hidden z-10 w-48 bg-white rounded divide-y divide-slate-100 shadow dark:bg-slate-700 text-sm">
                    <ul class="py-1 text-sm text-slate-400 dark:text-slate-200">
                      <li>
                        <a href="<?= base_url('Marketplace/Kategori')?>" type="button" class="flex items-center py-2 px-4 w-full hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Special</a>
                      </li>
                      <li>
                        <a href="<?= base_url('Marketplace/Kategori')?>" type="button" class="flex items-center py-2 px-4 w-full hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Standard</a>
                      </li>
                      <li>
                        <a href="<?= base_url('Marketplace/Kategori')?>" type="button" class="flex items-center py-2 px-4 w-full hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Basic</a>
                      </li>
                    </ul>
                </div>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Testimoni") ? 'text-primary-blue-cyan font-semibold' : ''?>" href="<?= base_url('Marketplace/Testimoni')?>">Testimoni</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Tentang") ? 'text-primary-blue-cyan font-semibold' : ''?>"  href="<?= base_url('Marketplace/Tentang')?>">Tentang</a>
              </li>
              <!-- <li class="nav-item p-2">
                <a class="nav-link border bg-slate-50 rounded-3xl border-slate-600 text-slate-600 hover:bg-primary-blue-cyan hover:text-white hover:border-white focus:border-white  focus:bg-primary-blue-cyan focus:text-white py-1" href="<?= base_url('Marketplace/AuthMarketplace/signUp')?>"><span class="px-1">Sign Up</span></a>
              </li> -->
              <!-- *** Button Profile dan logout aktif menggantikan sign up ketika user telah daftar dan login *** -->
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0 <?= ($this->uri->segment(2) == "Profile") ? 'text-primary-blue-cyan font-semibold' : ''?>" href="<?= base_url('Marketplace/Profile')?>">Profile</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link text-slate-500 focus:text-primary-blue-cyan/90 hover:text-primary-blue-cyan/90 p-0" href="#">Logout</a>
              </li>
            </ul>
          </div>
          <!-- Right elements -->
        </div>
      </nav>
      <!-- Nav Top -->
      
      <!-- Nav Bottom-->

      <?
        $iconNav = [
            "home" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_home.svg') ."'>" ,
            "homeActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_home_active.svg') ."'>",
            "kategori" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_kategori.svg') ."'>" ,
            "kategoriActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_kategori_active.svg')."'>",
            "testimoni" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_testimoni.svg')."'>",
            "testimoniActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_testimoni_active.svg')."'>",
            "tentang" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_tentang.svg')."'>",
            "tentangActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_tentang_active.svg')."'>",
            "profile" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_profil.svg')."'>",
            "profileActive" => "<img class='mx-auto my-auto w-[22px] h-[20px]' src='" .base_url('assets/icons/icons_marketplace/navbottom_profil_active.svg')."'>",
        ]
      ?>

      <nav class="xl:hidden">
        <div id="bottom-navigation" class="fixed inset-x-0 bottom-0 z-30 border-t-2">
          <div id="tabs" class="tabs bg-[#F7FDF4] flex w-full mx-auto  text-[#666666]">
            <a href="<?= base_url('Marketplace/Home')?>" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Home") ? $iconNav['homeActive'] : $iconNav['home'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1  <?= ($this->uri->segment(2) == "Home") ? 'text-primary-blue-cyan' : '' ?>">Home</p>
            </a>
            <a href="<?= base_url('Marketplace/Kategori')?>" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Kategori") ? $iconNav['kategoriActive'] : $iconNav['kategori'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1  <?= ($this->uri->segment(2) == "Kategori") ? 'text-primary-blue-cyan' : '' ?>">Kategori</p>
            </a>
            <a href="<?= base_url('Marketplace/Testimoni')?>" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Testimoni") ? $iconNav['testimoniActive'] : $iconNav['testimoni'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1  <?= ($this->uri->segment(2) == "Testimoni") ? 'text-primary-blue-cyan' : '' ?>">Testimoni</p>
            </a>
            <a href="<?= base_url('Marketplace/Tentang')?>" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Tentang") ? $iconNav['tentangActive'] : $iconNav['tentang'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1  <?= ($this->uri->segment(2) == "Tentang") ? 'text-primary-blue-cyan' : '' ?>">Tentang</p>
            </a>
            <a href="<?= base_url('Marketplace/Profile')?>" class="w-full justify-center inline-block text-center pt-3 pb-3">
              <div class="flex">
                <?
                    echo ($this->uri->segment(2) == "Profile") ? $iconNav['profileActive'] : $iconNav['profile'];
                ?>
              </div>
              <p class="text-base-2xs tracking-wide mt-1  <?= ($this->uri->segment(2) == "Profile") ? 'text-primary-blue-cyan' : '' ?>">Profile</p>
            </a>
          </div>
        </div>
      </nav>
      <!-- Nav Bottom End -->
    </header>

    <main class="px-5 pt-4 pb-16 sm:px-8 md:px-14 md:pt-10 lg:px-16 xl:px-20 xl:pb-28 text-xs xl:text-sm  min-h-[70vh] max-h-full">
