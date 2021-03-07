<?php

/**
 * Use Regex for Routing.
 * array index : pattern.
 * array value : controller name.
 */
$route['/'] = 'Index';
$route['/example'] = 'Example/index';
$route['/example/(:any)'] = 'Example/index/$1';


return $route;
