
<!-- Kategori Special -->
<section>
    <!-- Title Mobile -->
    <div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
        <div class="flex items-center">
            <a href="<?= base_url('Marketplace/RiwayatOrder')?>" class="active:text-primary-blue-cyan-hover py-2 px-3 "><i class="fa-solid fa-angle-left"></i></a>
            <h1><?= $title?></h1>
        </div>
    </div>
    <!-- Title Mobile End -->
    <!-- Title Lg -->
    <div class="hidden lg:block">
        <h1 class="text-lg font-MontserratBold text-slate-800 mb-1"><?=$title?></h1>        
        <nav class="flex mb-8 opacity-80" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <a href="<?= base_url('Marketplace/Home')?>" class="inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Home</a>
                </li>
                <li aria-current="page">
                    <i class="fa fa-angle-right opacity-50"></i>
                    <a href="<?= base_url('Marketplace/RiwayatOrder')?>" class="ml-2 inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Riwayat Order</a>
                </li>
                <li aria-current="page" class="text-gray-600">
                    <i class="fa fa-angle-right opacity-50"></i>
                    <span class="ml-2 text-sm font-medium"><?= $title?></span>
                </li>
            </ol>
        </nav>
    </div>
    <!-- Title Lg End-->
    <div class="mt-14 mb-8 lg:mt-0 lg:mb-0 border border-slate-600/20 shadow pt-2 pb-5 px-5 sm:px-8 rounded-2xl min-h-[50vh] bg-gray-50/30">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            <div class="col-span-4 lg:text-base-sm text-primary-blue-cyan bg-gray-100 border-b border-b-slate-200 -mt-2 -mx-5 sm:-mx-8 py-2 rounded-t-2xl"><p class="mx-5 sm:mx-8">Data Customer</p></div>
            <p class="text-slate-600">Nama Lengkap</p>
            <p class="col-span-2 text-slate-500">Jason</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">No Telepon</p>
            <p class="col-span-2 text-slate-500">489540860568048</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Email</p>
            <p class="col-span-2 text-slate-500">jason76@gmail.com</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <div class="col-span-4 lg:text-base-sm text-primary-blue-cyan bg-gray-100 border border-slate-200 -mx-5 sm:-mx-8 py-2"><p class="mx-5 sm:mx-8">Data Transaksi</p></div>

            <p class="text-slate-600">Kode</p>
            <p class="col-span-2 text-slate-500">0004</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Tanggal</p>
            <p class="col-span-2 text-slate-500">01-09-2022 14:00 WIB</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Jenis</p>
            <p class="col-span-2 text-slate-500">Undangan Pernikahan Digital</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Kategori</p>
            <p class="col-span-2 text-slate-500">Special</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Model</p>
            <a target="_blank" href="<?= base_url('PreviewUndangan/demo')?>" class="col-span-2 text-primary-blue-cyan underline decoration-primary-blue-cyan hover:text-primary-blue-cyan-hover hover:decoration-primary-blue-cyan-hover">Model C</a>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Harga</p>
            <p class="col-span-2 text-slate-500">150000</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Masa Aktif</p>
            <p class="col-span-2 text-slate-500">10-09-2022 14:00 WIB</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Keterangan</p>
            <p class="col-span-2 text-warning bg-warning/20 w-fit py-[2px] px-3 rounded-lg">Proses Pengerjaan</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Status</p>
            <p class="col-span-2 text-slate-500">Aktif</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Bukti Pembayaran</p>
            <a target="_blank" href="<?= base_url('View/View/viewImg')?>" class="col-span-2 text-slate-500"><img src="<?= base_url('assets/icons/icon_file_img.svg')?>" alt="Img Bukti Bayar" class="w-6 lg:w-8"></a>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Sumber Order</p>
            <p class="col-span-2 text-slate-500">Marketplace</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <div class="col-span-4 lg:text-base-sm text-primary-blue-cyan bg-gray-100 border border-slate-200 -mx-5 sm:-mx-8 py-2"><p class="mx-5 sm:mx-8">Data Admin Yang Menangani</p></div>

            <p class="text-slate-600">Kode</p>
            <p class="col-span-2 text-slate-500">ADM001</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">Nama</p>
            <p class="col-span-2 text-slate-500">Bayu Purnomo</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>

            <p class="text-slate-600">No Telepon</p>
            <p class="col-span-2 text-slate-500">085363635635</p>
            <div class="col-span-4 border-b border-b-slate-400/30 mb-2"></div>
        </div>
        <div class="block sm:flex mt-6">
            <a target="_blank" href="<?= base_url('PreviewUndangan/pratinjau')?>" class="border border-primary-blue-cyan flex items-center justify-center px-6 py-2.5 text-primary-blue-cyan rounded-lg sm:mr-3 mb-3 sm:mb-0 hover:bg-primary-blue-cyan/20"><i class="fa fa-eye mr-2"></i>Pratinjau</a>
            <a href="<?= base_url('Marketplace/RiwayatOrder/tamuUndangan')?>" class="inline-flex items-center justify-between text-primary-blue-cyan border border-primary-blue-cyan px-8 sm:px-2 lg:px-5 py-2 rounded-lg mb-3 sm:mb-0 w-full sm:w-fit sm:mr-3 hover:bg-primary-blue-cyan/20">
                <i class="fa fa-users mr-3"></i>
                <p>Tamu Undangan</p>
                <div class="inline-flex justify-center items-center ml-2 text-base-2xs sm:text-base-1xs font-semibold px-1.5 py-[1px] text-white bg-orange-400/90 rounded-full">2848</div>
            </a>
            <a href="<?= base_url('Marketplace/RiwayatOrder/pesanBahagia')?>" class="inline-flex items-center justify-between text-primary-blue-cyan border border-primary-blue-cyan px-8 sm:px-2 lg:px-5 py-2 rounded-lg w-full sm:w-fit hover:bg-primary-blue-cyan/20">
                <i class="fa fa-message mr-3"></i>
                <p>Pesan Bahagia</p>
                <div class="inline-flex justify-center items-center ml-2 text-base-2xs sm:text-base-1xs font-semibold px-1.5 py-[1px] text-white bg-orange-400/90 rounded-full">2848</div>
            </a>
        </div>
    </div>
</section>
<!-- Kategori Special End-->



 <!-- Overlay element modal dialog -->
 <div id="overlay" class="fixed z-40 w-screen h-screen inset-0 bg-gray-400 bg-opacity-60 backdrop-blur-sm"></div>

<!-- The dialog modal dialog -->
<div id="dialog" class="fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80vw] sm:w-[60vw] lg:w-[40vw] bg-white/80 rounded-xl px-8 py-6 space-y-5">
    <img src="<?= base_url('assets/ilustrations/marketplace/ils_detail_order_alert.svg')?>" alt="Ilustrations" class="mx-auto md:w-32">
    <p class="mb-5 text-slate-500 text-center">Mohon Maaf Mengganggu Waktunya, Silahkan Berikan Alasan Mengapa Anda Memilih Model Undangan Pernikahan Tersebut.  </p>
    <form action="#">
        <div>
            <textarea name="" class="bg-gray-50/70 rounded-lg text-xs font-medium leading-none placeholder-slate-400 text-slate-900 py-3 w-full pl-3 p-2 border-b-2 border-b-gray-400/60 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Alasan"></textarea>
        </div>

        <div class="flex justify-end mt-5">
            <!-- This button is used to close the dialog -->
            <button id="close" type="reset" class="text-xs lg:text-sm tracking-wide mr-5 text-primary-blue-cyan/70 hover:text-primary-blue-cyan-hover/80">Abaikan Pesan Ini !</button>
            <button id="submit" type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue-cyan font-semibold leading-none text-white focus:outline-none bg-primary-blue-cyan border border-primary-blue-cyan rounded-lg hover:bg-primary-blue-cyan-hover py-2 px-4 lg:px-6 transition duration-500 text-xs lg:text-sm tracking-wide">
                Kirim
            </button>
        </div>
    </form>
</div>

 <!-- Javascript code modal dialog -->
 <script>
     
        let dialog = document.getElementById('dialog');
        let overlay = document.getElementById('overlay');
        let closeButton = document.getElementById('close');
        let submitButton = document.getElementById('submit');


        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
        submitButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
    </script>



