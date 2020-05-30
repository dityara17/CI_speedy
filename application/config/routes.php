<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['dash'] = 'admin ';
$route['admin/product/create'] = 'admin/product';
$route['admin/product/store'] = 'admin/storeProduct';
$route['admin/product/edit/(:num)'] = 'admin/editProduct/$1';
$route['admin/product/update/(:num)'] = 'admin/updateProduct/$1';
$route['admin/product/delete/(:num)'] = 'admin/destroyProduct/$1';

$route['cat-sub/(:num)'] = 'welcome/catSub/$1';
$route['category/(:num)'] = 'welcome/catParent/$1';
$route['err'] = 'welcome/err';

//

//$route['admin/categories'] = 'admin/categories';

$route['login'] = 'auth';
$route['login/store'] = 'auth/login';
$route['logout'] = 'auth/logout';