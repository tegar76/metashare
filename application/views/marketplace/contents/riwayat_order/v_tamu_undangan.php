
<!-- Kategori Special -->
<section>
    <!-- Title Mobile -->
    <div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
        <div class="flex items-center">
            <a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder')?>" class="active:text-primary-blue-cyan-hover py-2 px-3 "><i class="fa-solid fa-angle-left"></i></a>
            <h1><?= $title?></h1>
        </div>
    </div>
    <!-- Title Mobile End -->
    <!-- Title Lg -->
    <div class="hidden lg:block">
        <h1 class="font-MontserratBold text-slate-800 mb-1"><?=$title?></h1>        
        <nav class="flex mb-8 opacity-80" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <a href="<?= base_url('Marketplace/Home')?>" class="inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Home</a>
                </li>
                <li aria-current="page">
                    <i class="fa fa-angle-right opacity-50"></i>
                    <a href="<?= base_url('Marketplace/RiwayatOrder')?>" class="ml-2 inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Riwayat Order</a>
                </li>
                <li aria-current="page">
                    <i class="fa fa-angle-right opacity-50"></i>
                    <a href="<?= base_url('Marketplace/RiwayatOrder/detailOrder')?>" class="ml-2 inline-flex items-center text-sm font-medium text-primary-blue-cyan hover:text-primary-blue-cyan-hover">Detail Order</a>
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
        <div class="flex flex-col">
            <div class="overflow-x-auto lg:overflow-x-hidden sm:-mx-1 lg:-mx-3">
                <div class="py-2 inline-block min-w-full px-0 sm:px-1 lg:px-2">
                    <div class="overflow-x-auto lg:overflow-x-hidden">
                        <div class="hidden lg:block mb-5 pb-3  border-b border-b-slate-400/30">
                            <h1 class="text-base-sm lg:text-lg font-MontserratBold text-slate-700"><?=$title?></h1>
                        </div>    
                        <table id="dataTable" class="min-w-full stripe rounded">
                            <thead class="text-slate-600 font-semibold text-left">
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="18%">Nama</th>
                                    <th width="15%">Dibuat</th>
                                    <th width="15%">Diubah</th>
                                    <th width="3%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-400 font-light">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td id="nama">Adit Prianto</td>
                                    <td>15-08-2022 17:05 WIB </td>
                                    <td>15-08-2022 17:05 WIB </td>
                                    <td>
                                        <div class="flex justify-center">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue-cyan font-semibold leading-none text-warning focus:outline-none border border-warning rounded-lg hover:bg-warning/30 py-1.5 px-2 transition duration-500 mr-3"><i class="fa fa-copy" onclick="CopyToClipboard('nama'); return false;"></i></button>
                                            <a target="_blank" href="<?= base_url('PreviewUndangan/pratinjau')?>" class="focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue-cyan font-semibold leading-none text-white focus:outline-none bg-primary-blue-cyan border border-primary-blue-cyan rounded-lg hover:bg-primary-blue-cyan-hover py-1.5 px-2 transition duration-500"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                   
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
<!-- Kategori Special End-->


<script>
    function CopyToClipboard(id) {
			var r = document.createRange();
			r.selectNode(document.getElementById(id));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(r);
			document.execCommand('copy');
			window.getSelection().removeAllRanges();
		}
</script>