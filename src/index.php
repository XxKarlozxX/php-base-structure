<?php
require_once 'autoload.php';

if ( isset($_GET['controller']) ) {
    $name_controller = $_GET['controller'] . 'Controller';
} else {
    echo 'La pagina que buscas no existe 1';
    exit();
}

if (class_exists( $name_controller)) {

    echo $name_controller;
    $controller = new $name_controller();

    var_dump($controller);

    if ( !isset($_GET['action']) && method_exists($controller, $_GET['action']) ) {
        $action = $_GET['action'];
        $controller->$action;
    } else {
        echo 'La pagina que buscas no existe 2';
    }
} else {
    echo 'La pagina que buscas no existe 3 ';
}
