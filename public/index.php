<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'autoload.php';
require '../libs/conn/dbConnection.php';
require '../libs/view/base.php';


$autoloader = new Psr4AutoloaderClass();
$autoloader->addNamespace('App', __DIR__ . '/../src');
$autoloader->register();




