<?php

use Core\App;
use Core\Container;
use Core\Database;
use Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = new Container();

$container->bind('Core\Database', function () {

    $config = require base_path('config.php');
    return new Database($config['database']);
});

App::setContainer($container);
