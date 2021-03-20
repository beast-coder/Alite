<?php

$route = [];
/**
 * Use Regex for Routing.
 * array index : pattern.
 * array value : controller name.
 */
$route['/'] = 'Index';
$route['test/:num/test2'] = [
    '/:any/fdfdf' => [
        '/asdfdf' => 'Dashboard2',
        '/(:num)/:any/ttt' => 'Dashboard3'
    ]
];

return $route;
