<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Kernel\RestApp;

$app = new RestApp (__DIR__ . '/../app', false);

$app->run();