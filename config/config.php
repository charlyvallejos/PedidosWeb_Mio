<?php

session_start();

function Autoloader($nombreClase){
    require_once 'clases/'.$nombreClase.'.php';
}

spl_autoload_register('Autoloader');

