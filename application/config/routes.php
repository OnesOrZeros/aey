<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['home'] = 'home/index';
$route['services'] = 'home/services';
$route['success'] = 'home/success';
$route['contacts'] = 'home/contacts';
$route['about'] = 'home/about';
$route['default_controller'] = 'home/index';


$route['404_override'] = 'Error_404';
$route['translate_uri_dashes'] = FALSE;
