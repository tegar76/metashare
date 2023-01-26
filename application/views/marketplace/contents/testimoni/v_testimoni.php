<!-- Title Mobile -->
<div class="lg:hidden text-base-md tracking-wide xl:text-lg text-slate-700 font-medium bg-gray-400/5 border-b  drop-shadow-sm border-b-gray-400/20 xl:border-0 pl-2 py-2 mb-8 absolute top-0 left-0 w-full">
    <div class="flex items-center  py-2 px-3 ">
        <h1><?= $title?></h1>
    </div>
</div>

<!-- Title Lg End-->
<div class="mt-14 mb-8 lg:mt-0 lg:mb-0 border border-slate-600/20 shadow pt-2 pb-5 px-5 sm:px-8 rounded-md min-h-[50vh] bg-gray-100/30 xl:overflow-y-scroll xl:h-[60vh] sm:cursor-all-scroll">
    <div>
        <div class="hidden lg:block mb-5 pb-3 bg-slate-400/10 border-b border-b-slate-400/30 -mt-2 -mx-5 sm:-mx-8 rounded-t-md pt-2 pl-8">
            <h1 class="text-lg fontfont-MontserratBold text-primary-blue-cyan"><?=$title?></h1>
        </div> 
        <div class="mb-3">
            <? for($i=0; $i<=10; $i++) :?>
                <!-- Testimoni -->
                <div class="flex border-b border-b-slate-300/90 mt-3 pb-3">
                    <img src="<?= base_url('assets/icons/icons_super_admin/default_foto_profil_kustomer.svg')?>" class="flex rounded-full items-center justify-center w-9 h-9 mr-3"></img>
                    <div>
                        <p class="tracking-wide text-base-sm lg:text-base-md mb-1 font-MontserratBold font-semibold opacity-90">Firman</p>
                        <p class="text-base-xs tracking-wide opacity-80 text-justify mr-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere quae dolore delectus optio ipsam quia earum pariatur molestias! Nostrum sint, harum suscipit in nulla officia expedita dolorum sunt ipsam a necessitatibus corrupti beatae laborum nesciunt saepe, debitis asperiores dignissimos. Ipsum odio, ad quod sit debitis fugit unde adipisci laborum.</p>
                    </div>
                </div>
                <!-- Testimoni End-->
            <? endfor?>
        </div>
    </div>
</div>