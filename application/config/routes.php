<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'WelcomeController';

$route['users'] = 'UsersController';

#auth route
$route['auth']['get'] = 'AuthController/index';
$route['auth/logout']['get'] = 'AuthController/logout';
$route['auth']['post'] = 'AuthController/store';

$route['dashboard']['get'] = 'DashboardController/index';

#roles
$route['roles']['get'] = 'RolesController/index';
$route['roles/create']['get'] = 'RolesController/create';
$route['roles']['post'] = 'RolesController/store';

#tasks
//$route['tasks']['get'] = 'TasksController/index';
$route['tasks/create']['get'] = 'TasksController/create';
$route['tasks/store']['post'] = 'TasksController/store';

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['(:any)'] = 'pages/view/$1';
