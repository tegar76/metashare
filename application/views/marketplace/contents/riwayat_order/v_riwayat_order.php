<!-- Kategori Special -->
<section>
    <!-- Title Mobile -->
    <div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
        <div class="flex items-center">
            <a href="<?= base_url('Marketplace/Home')?>" class="active:text-primary-blue-cyan-hover py-2 px-3 "><i class="fa-solid fa-angle-left"></i></a>
            <h1><?= $title?></h1>
        </div>
    </div>
    <!-- Title Mobile End -->
    <!-- Title Lg -->
    <div class="hidden lg:block">
        <h1 class="text-lg font-MontserratBold text-slate-800 mb-1"><?= $title?></h1>        
        <nav class="flex mb-8 opacity-80" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <a href="<?= base_url('Marketplace/Home')?>" class="inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Home</a>
                </li>
                <li aria-current="page" class="text-gray-600">
                    <i class="fa fa-angle-right opacity-50"></i>
                    <span class="ml-2 text-sm font-medium">Riwayat Order</span>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Title Lg End-->
    <div class="mt-14 mb-8 lg:mt-0 lg:mb-0 border border-slate-600/20 shadow pt-2 pb-5 px-2 sm:px-5 rounded-2xl min-h-[50vh] bg-gray-50/30">
        <!-- Items Riwayat -->
        <a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder')?>" class="flex justify-between border-b border-b-slate-300 pt-3 pb-2 px-1 hover:bg-primary-blue-cyan/10 hover:rounded-2xl">
            <div>
                <p class="text-base-sm md:text-base-md lg:text-base text-slate-600 font-medium">Flower Flying</p>
               <div class="text-base-2xs md:text-xs text-slate-500 mt-1">
                    <p>Pernikahan Digital/Spesial</p>
                    <p>Sumber Order : Marketplace</p>
                    <p>Masa Aktif : 01-09-2022 13:00 WIB </p>
               </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="text-danger bg-danger/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Belum Dikerjakan</div>
            </div>
        </a>
        <!-- Items Riwayat End -->
        <!-- Items Riwayat -->
        <a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder')?>" class="flex justify-between border-b border-b-slate-300 pt-3 pb-2 px-1 hover:bg-primary-blue-cyan/10 hover:rounded-2xl">
            <div>
                <p class="text-base-sm md:text-base-md lg:text-base text-slate-600 font-medium">Flower Flying</p>
               <div class="text-base-2xs md:text-xs text-slate-500 mt-1">
                    <p>Pernikahan Digital/Spesial</p>
                    <p>Sumber Order : Marketplace</p>
                    <p>Masa Aktif : -</p>
               </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="text-warning bg-warning/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Proses Pengerjaan</div>
            </div>
        </a>
        <!-- Items Riwayat End -->
        <!-- Items Riwayat -->
        <a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder')?>" class="flex justify-between border-b border-b-slate-300 pt-3 pb-2 px-1 hover:bg-primary-blue-cyan/10 hover:rounded-2xl">
            <div>
                <p class="text-base-sm md:text-base-md lg:text-base text-slate-600 font-medium">Flower Flying</p>
               <div class="text-base-2xs md:text-xs text-slate-500 mt-1">
                    <p>Pernikahan Digital/Spesial</p>
                    <p>Sumber Order : Marketplace</p>
                    <p>Masa Aktif : -</p>
               </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="text-success bg-success/20 py-1 px-2 text-base-2xs md:text-xs rounded-lg">Sudah Dikerjakan</div>
            </div>
        </a>
        <!-- Items Riwayat End -->
    </div>
</section>
<!-- Kategori Special End-->