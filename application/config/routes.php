<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['export/?group_id=1']	= 'export/index';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
