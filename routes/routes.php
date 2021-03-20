<?php

$adminRoutes = require ABSPATH . '/routes/admin-routes.php';

/**
 * Use Regex for Routing.
 * array index : pattern.
 * array value : controller name.
 */
$route = [];
$route['admin'] = $adminRoutes;
$route['/'] = 'Index';
$route['example/(:any)'] = 'Example/index/$1';
$route['example'] = 'Example/index';
$route['test/test/(:any)'] = 'Example/index/$1';

return $route;
