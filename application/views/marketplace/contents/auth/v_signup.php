<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/icons/logo_metashare_small.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?= base_url('src/fontawesome-free-6.2.0-web/css/all.css') ?>">

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url('src/style/marketplace/style91.css') ?>">

    <title><?= $title?></title>
</head>
<body class="sm:bg-split-white-sky sm:bg-cover sm:bg-no-repeat sm:h-[95vh] lg:h-[97vh] xl:h-[95vh] font-PrimaryPoppins">
    
    <div class="bg-split-white-sky bg-cover min-h-screen max-h-full sm:min-h-min sm:max-h-max sm:bg-none sm:bg-white sm:border sm:shadow sm:rounded-2xl sm:mx-[10vw] sm:my-[5vh] lg:my-[3vh] xl:my-[5vh] md:mx-[5vw] lg:mx-[12vw] xl:mx-[16vw]">
        <div class="py-9 px-4 sm:py-8 sm:px-12 md:px-10 lg:px-16 2xl:mx-auto 2xl:container flex items-center justify-center">       
            <div class="w-full md:w-1/2 mx-6">
                <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-extrabold leading-6 text-gray-800 mb-5 text-center">Sign Up</p>
                <div>
                    <input id="namaLengkap" aria-labelledby="namaLengkap" type="text" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Nama Lengkap " />
                </div>
                <div class="mt-4 w-full">
                    <input id="noTelp" aria-labelledby="noTelp" type="number" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan No Telepon " />
                </div>
                <div class="mt-4 w-full">
                    <input id="email" aria-labelledby="email" type="email" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Email " />
                </div>
                <div class="mt-4 w-full">
                    <div class="relative flex items-center justify-center">
                        <input id="inputPassword" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Password"/>
                        <div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showPassword()">
                            <div id="showPassword">
                                <i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
                            </div>
                            <div id="hidePassword" class="hidden">
                                <i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 w-full">
                    <div class="relative flex items-center justify-center">
                        <input id="inputConfirmPassword" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Konfirmasi Password"/>
                        <div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showConfirmPassword()">
                            <div id="showConfirmPassword">
                                <i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
                            </div>
                            <div id="hideConfirmPassword" class="hidden">
                                <i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="<?= base_url('Marketplace/Home')?>" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-primarybg-primary-blue-cyan text-sm font-semibold leading-none text-white focus:outline-none bg-primary-blue-cyan border rounded-md hover:bg-primary-blue-cyan-hover py-3 justify-center flex w-full transition duration-500">Register</a>
                </div>
                <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Sudah memiliki akun? <a href="<?= base_url('Marketplace/AuthMarketplace/')?>" class="cursor-pointer hover:text-primary-blue-cyan-hover focus:text-primary-blue-cyan focus:outline-none focus:underline hover:underline text-sm font-medium leading-none text-primary-blue-cyan"> Sign In</a></p>
            </div>
            <div class="w-full md:w-1/2 hidden md:flex">
                <img src="<?= base_url('assets/ilustrations/marketplace/ils_login.svg')?>" class="h-96" alt="Ilustrasi">
            </div>
        </div>
        <footer class="text-base-xs xl:text-xs xl:text-base-xs text-center fixed bottom-5 lg:bottom-3 xl:bottom-5 mx-auto sm:w-3/4 md:w-2/4 inset-x-0">
                <span class="text-slate-400 dark:text-slate-400">© 2022 <a href="" class="hover:underline">Metashare</a> by Paralogy Team
                </span>
        </footer>
    </div>

    <script>
        function showPassword() {
            let passwordType = document.getElementById("inputPassword");
            let showPassword = document.getElementById("showPassword");
            let hidePassword = document.getElementById("hidePassword");
            if (passwordType.type === "password") {
                passwordType.type = "text";
                hidePassword.classList.remove("hidden");
                showPassword.classList.add("hidden");
            } else {
                passwordType.type = "password";
                hidePassword.classList.add("hidden");
                showPassword.classList.remove("hidden");
            }
        }

        function showConfirmPassword() {
            let passwordType = document.getElementById("inputConfirmPassword");
            let showConfirmPassword = document.getElementById("showConfirmPassword");
            let hideConfirmPassword = document.getElementById("hideConfirmPassword");
            if (passwordType.type === "password") {
                passwordType.type = "text";
                hideConfirmPassword.classList.remove("hidden");
                showConfirmPassword.classList.add("hidden");
            } else {
                passwordType.type = "password";
                hideConfirmPassword.classList.add("hidden");
                showConfirmPassword.classList.remove("hidden");
            }
        }
    </script>
      
</body>
</html>