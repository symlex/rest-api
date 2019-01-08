<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Kernel\RestApp;

$debugMode = strpos($_SERVER['HTTP_HOST'], '-debug') !== false;

$app = new RestApp (__DIR__ . '/../app', $debugMode);

$app->run();