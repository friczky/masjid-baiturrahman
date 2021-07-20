<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['kajian']				='home/kajian';
$route['kajian/r/(:any)']		='home/baca_kajian/$1';
$route['kontak']				='home/kontak';
$route['berita']				='home/berita';
$route['berita/(:any)']			= 'home/baca_berita/$1';
$route['gallery']				='home/gallery';
$route['logout']				='login/logout';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
