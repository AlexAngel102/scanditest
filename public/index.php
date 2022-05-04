<?php

require '../src/autoload.php';
require '../src/conn/dbConnection.php';
require '../src/View/base.php';

$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__.'/../src');
$autoloader->register();

