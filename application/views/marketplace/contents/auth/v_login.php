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
    <?php include FCPATH. 'src/style/tailwindOutput/import.php';?>

    <title><?= $title?></title>
</head>
<body class="sm:bg-split-white-sky sm:bg-cover sm:bg-no-repeat sm:h-[90vh] font-PrimaryPoppins">
    
    <div class="bg-split-white-sky bg-cover min-h-screen max-h-full sm:min-h-min sm:max-h-max sm:bg-none sm:bg-white sm:border sm:shadow sm:rounded-2xl sm:mx-[10vw] sm:my-[10vh] md:mx-[5vw] lg:mx-[12vw] xl:mx-[16vw]">
        <div class="py-9 px-4 sm:py-8 sm:px-12 md:px-10 lg:px-16 2xl:mx-auto 2xl:container flex items-center justify-center">       
            <div class="w-full md:w-1/2 hidden md:flex">
                <img src="<?= base_url('assets/ilustrations/marketplace/ils_login.svg')?>" class="h-96"  alt="Ilustrasi">
            </div>
            <div class="w-full md:w-1/2 mx-6">
                <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-extrabold leading-6 text-gray-800 mb-5 text-center">Sign In</p>
                <div>
                    <input id="email" aria-labelledby="email" type="email" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Email " />
                </div>
                <div class="mt-4 w-full">
                    <div class="relative flex items-center justify-center">
                        <input id="myInput" type="password" class="bg-gray-50 rounded-md text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2 p-2 border-b-2 border-b-gray-400 border-gray-300 outline-none opacity-80 focus:border-primary-blue-cyan/10" placeholder="Masukan Password"/>
                        <div class="absolute right-0 mt-2 mr-3 cursor-pointer" onclick="showPassword()">
                            <div id="show">
                                <i class="fa fa-eye fa-xs text-gray-800 opacity-70"></i>
                            </div>
                            <div id="hide" class="hidden">
                                <i class="fa fa-eye-slash fa-xs text-gray-800 opacity-70"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-0 checked:bg-success checked:hover:bg-success checked:focus:bg-success cursor-pointer" required="">
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                        </div>
                    </div>
                    <a href="" class="cursor-pointer hover:text-primary-blue-cyan-hover focus:text-primary-blue-cyan focus:outline-none focus:underline hover:underline text-sm font-medium leading-none text-primary-blue-cyan">Forgot password?</a>
                </div>
                <div class="mt-6">
                    <a href="<?= base_url('Marketplace/Home')?>" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-primary text-sm font-semibold leading-none text-white focus:outline-none bg-primary-blue-cyan border rounded-md hover:bg-primary-blue-cyan-hover py-3 justify-center flex w-full transition duration-500">Login</a>
                </div>
                <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Belum memiliki akun? <a href="<?= base_url('Marketplace/AuthMarketplace/signUp')?>" class="cursor-pointer hover:text-primary-blue-cyan-hover focus:text-primary-blue-cyan focus:outline-none focus:underline hover:underline text-sm font-medium leading-none text-primary-blue-cyan"> Sign Up</a></p>
            </div>
        </div>
        <footer class="text-base-xs xl:text-xs xl:text-base-xs text-center fixed bottom-5 mx-auto sm:w-3/4 md:w-2/4 inset-x-0 ">
                <span class="text-slate-400 dark:text-slate-400">© 2022 <a href="" class="hover:underline">Metashare</a> by Paralogy Team
                </span>
        </footer>
    </div>

    <script>
        function showPassword() {
            var passwordType = document.getElementById("myInput");
            var show = document.getElementById("show");
            var hide = document.getElementById("hide");
            if (passwordType.type === "password") {
                passwordType.type = "text";
                hide.classList.remove("hidden");
                show.classList.add("hidden");
            } else {
                passwordType.type = "password";
                hide.classList.add("hidden");
                show.classList.remove("hidden");
            }
        }
    </script>
      
</body>
</html>