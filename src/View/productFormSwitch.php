<?php

//use \App\Classes\FormLoader;

require '../Classes/FormLoader.php';

$type = $_POST['productType'];

$form = new FormLoader();
$form->load($type);