<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home/index';

$route['home'] = 'home/index';
$route['services'] = 'home/services';
$route['contacts'] = 'home/contacts';
$route['about'] = 'home/about';

$route['(:any)'] = 'home/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
