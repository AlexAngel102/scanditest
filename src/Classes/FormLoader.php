<?php

//namespace App\Classes;

class FormLoader
{
    public function load(string $type) : string|null
    {
        $form = require "../View/Forms/$type.php";
        return $form;
    }
}