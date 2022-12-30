<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
| -------------------------------------------------------------------------
| ROUTING USER SUPER ADMINISTATOR
| -------------------------------------------------------------------------
*/
// 1. Authentication 
$route['su-admin/login'] = 'SuperAdmin/Auth';
$route['su-admin/logout'] = 'SuperAdmin/Auth/logout';

// 2. Dahsboard
$route['su-admin'] = 'SuperAdmin/Dashboard';
$route['su-admin/dashboard'] = 'SuperAdmin/Dashboard';

// 3. Master Data
$route['su-admin/master'] = 'SuperAdmin/MasterData';
$route['su-admin/master/(:any)'] = 'SuperAdmin/MasterData/$1';
$route['su-admin/master/(:any)/(:any)'] = 'SuperAdmin/MasterData/$1/$2';

$route['su-admin/customer'] = 'SuperAdmin/DataKustomer';
$route['su-admin/customer/(:any)'] = 'SuperAdmin/DataKustomer/$1';
$route['su-admin/customer/(:any)/'] = 'SuperAdmin/DataKustomer/$1/$2';

// 4. Pengorderan
$route['su-admin/order'] = 'SuperAdmin/Pengorderan';
$route['su-admin/order/(:any)'] = 'SuperAdmin/Pengorderan/$1';
$route['su-admin/order/(:any)/(:any)'] = 'SuperAdmin/Pengorderan/$1/$2';


// 5. Penugasan
$route['su-admin/penugasan'] = 'SuperAdmin/Penugasan';
$route['su-admin/penugasan/(:any)'] = 'SuperAdmin/Penugasan/$1';
$route['su-admin/penugasan/(:any)/(:any)'] = 'SuperAdmin/Penugasan/$1/$2';

// 6. Laporan Bulanan
$route['su-admin/laporan_bulanan'] = 'SuperAdmin/LaporanBulanan';
$route['su-admin/laporan_bulanan/(:any)'] = 'SuperAdmin/LaporanBulanan/$1';
$route['su-admin/laporan_bulanan/(:any)/(:any)'] = 'SuperAdmin/LaporanBulanan/$1/$2';

/*
| -------------------------------------------------------------------------
| ROUTING USER ADMINISTATOR
| -------------------------------------------------------------------------
*/
// 1. Authentication Admin
$route['admin/login'] = 'Admin/Auth';
$route['admin/logout'] = 'Admin/Auth/logout';

// 2. Dashboard Admin
$route['admin'] = 'Admin/Dashboard';
$route['admin/dashboard'] = 'Admin/Dashboard';
$route['admin/dashboard/(:any)'] = 'Admin/Dashboard/$1';

// 3. Master Data
$route['admin/master_data'] = 'Admin/MasterData';
$route['admin/master_data/(:any)'] = 'Admin/MasterData/$1';
$route['admin/master_data/(:any)/(:any)'] = 'Admin/MasterData/$1/$2';

// 4. Pengerjaan Undangan
$route['admin/undangan'] = 'Admin/Undangan';
$route['admin/undangan/detail/(:any)'] = 'Admin/Undangan/detail/$1';
$route['admin/undangan/create/(:any)'] = 'Admin/Undangan/create_data_undangan/$1';
$route['admin/undangan/update/(:any)'] = 'Admin/Undangan/update_data_undangan/$1';

# Routing gallery preeweding 
$route['admin/undangan/gallery'] = 'Admin/GalleryController';
$route['admin/undangan/gallery/create/(:any)'] = 'Admin/GalleryController/create/$1';
$route['admin/undangan/gallery/detail/(:any)'] = 'Admin/GalleryController/detail/$1';
$route['admin/undangan/gallery/update/(:any)'] = 'Admin/GalleryController/update/$1';

# Routing Tamu Undangan
$route['admin/undangan/tamu'] = 'Admin/GuestInvitedController';
$route['admin/undangan/tamu/create/(:any)'] = 'Admin/GuestInvitedController/create/$1';
$route['admin/undangan/tamu/update/(:any)'] = 'Admin/GuestInvitedController/update/$1';

# Routing Love Story
$route['admin/undangan/love-story'] = 'Admin/LoveStoryController';
$route['admin/undangan/love-story/create/(:any)'] = 'Admin/LoveStoryController/create/$1';
$route['admin/undangan/love-story/update/(:any)'] = 'Admin/LoveStoryController/update/$1';
$route['admin/undangan/love-story/detail/(:any)'] = 'Admin/LoveStoryController/detail/$1';

# Routing Berikan Hadiah
$route['admin/undangan/gifts'] = 'Admin/GiftsController';
$route['admin/undangan/gifts/create/(:any)'] = 'Admin/GiftsController/create/$1';
$route['admin/undangan/gifts/update/(:any)'] = 'Admin/GiftsController/update/$1';
$route['admin/undangan/gifts/detail/(:any)'] = 'Admin/GiftsController/detail/$1';


// 5. Profile Admin
$route['admin/profile'] = 'Admin/Profile';
$route['admin/profile/(:any)'] = 'Admin/Profile/$1';
$route['admin/profile/(:any)/(:any)'] = 'Admin/Profile/$1/$2';

$route['wedding'] = 'Admin/Invitation/wedding';
$route['wedding/(:any)'] = 'Admin/Invitation/wedding/$1';
$route['wedding/(:any)/(:any)'] = 'Admin/Invitation/wedding/$1/$2';

/*
| -------------------------------------------------------------------------
| ROUTING Preview Model Undangan
| -------------------------------------------------------------------------
*/
$route['preview'] = 'PreviewModelUndangan';
$route['views'] = 'View/View';
$route['views/(:any)'] = 'View/View/$1';

/*
| -------------------------------------------------------------------------
| ROUTING USER
| -------------------------------------------------------------------------
*/
$route['login'] = 'AuthController';
$route['register'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';
$route['categories'] = 'CategoryController';
$route['testimony'] = 'TestimonyController';
$route['about'] = 'AboutController';
$route['profile'] = 'ProfileController';
$route['profile/update'] = 'ProfileController/update';
$route['profile/update/do_upload'] = 'ProfileController/do_upload';
$route['history'] = 'HistoryOrderController';
$route['history/order'] = 'HistoryOrderController';
$route['history/order/(:any)/detail'] = 'HistoryOrderController/detail/$1';
$route['history/order/invited_guest'] = 'HistoryOrderController/invited_guest';
$route['history/order/messages'] = 'HistoryOrderController/messages';
