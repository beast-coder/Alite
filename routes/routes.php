<?php

/**
 * Use Regex for Routing.
 * array index : pattern.
 * array value : controller name.
 */
$route['/'] = 'Index';
$route['example/(:any)'] = 'Example/index/$1';
$route['example'] = 'Example/index';

return $route;
