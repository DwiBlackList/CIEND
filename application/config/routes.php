<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['getintouch'] = 'getintouch';
// $route['getintouch/h/(:any)'] = 'getintouch';

$route['user'] = 'user';
$route['testimoni'] = 'testimoni';
$route['blog'] = 'blog/index';


$route['default_controller'] = 'end';
//$route['(:any)'] = 'end/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
