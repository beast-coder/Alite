<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ABSPATH', realpath(__DIR__ . '/..'));
$config = require ABSPATH . '/config/config.php';
require ABSPATH . '/config/constants.php';
$loader = require_once ABSPATH . '/vendor/autoload.php';
$container = require ABSPATH . '/services/register-services.php';


$app = new Alite\Engine\Bootstrap($config, $container);
$app->run();
