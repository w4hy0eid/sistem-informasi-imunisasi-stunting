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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['login'] = 'login/index';
$route['masterdata/dataall'] = 'welcome/dataall';
$route['masterdata/bulan'] = 'welcome/bulan';
$route['masterdata/dataposyandu'] = 'welcome/dataposyandu';
$route['details/(:num)'] = 'welcome/details_balita/$1';
$route['edit_balita/(:num)'] = 'welcome/edit_balita/$1';
$route['edit_user/(:num)'] = 'welcome/edit_user/$1';
$route['edit_edukasi/(:num)'] = 'welcome/edit_edukasi/$1';
$route['edit_posyandu/(:num)'] = 'welcome/edit_posyandu/$1';
$route['masterdata/user'] = 'welcome/user';
$route['masterdata/edukasi'] = 'welcome/edukasi';
$route['pelayanan/imunisasi'] = 'welcome/pelayanan_imunisasi';
$route['pelayanan/timbangan'] = 'welcome/pelayanan_timbangan';
$route['sertifikat/data_lengkap'] = 'welcome/data_lengkap';
$route['sertifikat/cetak_sertifikat/(:num)'] = 'welcome/cetak_sertifikat/$1';
$route['masterlaporan/laporanbulanposyandu'] = 'welcome/laporanbulanposyandu';
$route['masterlaporan/cetak_laporan_posyandu/(:any)/(:any)'] = 'welcome/cetak_laporan_imunisasi/$1';
$route['whatsapp/perangkat'] = 'welcome/device_whatsapp';
$route['whatsapp/kirim'] = 'welcome/whatsapp_broadcast';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
