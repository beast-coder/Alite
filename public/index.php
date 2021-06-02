<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!defined('ENV')) {
    if ($_SERVER['HTTP_HOST'] == 'example.local') {
        define('ENV', 'local');
    } else {
        define('ENV', 'production');
    }
}

session_set_cookie_params(
        0, '/', '', false, true
);
session_name('dfer33f');
@session_start();

date_default_timezone_set('Asia/Kolkata');

define('ROOTPATH', realpath(__DIR__ . '/..'));

$loader = require_once ROOTPATH . '/vendor/autoload.php';

$app = new Alite\Engine\Bootstrap();
$app->init();
