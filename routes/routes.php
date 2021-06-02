<?php

$adminRoutes = require ROOTPATH . '/routes/admin-routes.php';

$route['fmadmin'] = $adminRoutes;
$route['/'] = 'Index';
$route['example/(:any)'] = 'Example/index/$1';
$route['example'] = 'Example/index';
$route['test/test/(:any)'] = 'Example/index/$1';

return $route;
