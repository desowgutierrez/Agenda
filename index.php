<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include './src/core/Autoloader.php';
include './src/core/Controller.php';
include './src/model/Conexion.php';

$autoloader = new Autoloader();

/*
if(isset($_GET['c'])){
    $controller = $_GET['c'];
}else{
    $controller = 'Contactos';
}
*/

$controller = $_GET['c']??'contactos';
$controller = ucfirst( strtolower($controller) );
$method     = $_GET['m']??'index';


if($autoloader->register($controller)){

    $clase = "{$controller}Controller";
    $class = new $clase();                                                                                                                                                                                                                                                                                                                                                                                                           ;

    if(method_exists($class, $method)){                                                                                                                                                                                                                                                                                                                                                                                                     
        call_user_func(array($class, $method));
        exit();
    }

    die('Not found Method 404');
}else{
    die('Not found Controller 404');
}
