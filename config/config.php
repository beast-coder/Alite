<?php

$config = [
    'DATABASE' => [
        'LOCAL' => [
            'HOST' => '127.0.0.1',
            'NAME' => 'fiveminute',
            'USER' => 'root',
            'PASSWORD' => '',
            'DRIVER' => 'mysql'
        ],
        'LIVE' => [
            'HOST' => '127.0.0.1',
            'NAME' => 'cm',
            'USER' => 'root',
            'PASSWORD' => 'root123',
            'DRIVER' => 'mysql'
        ]
    ],
    'DATABASE2' => ['LOCAL' => []],
];
return $config;
