<?php

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        switch ($_GET['accion']){
            case 'sesion':
                include 'sesiones.php';
                break;
            case 'cookies':
                include 'cookies.php';
                break;
            case 'json':
                include 'json.php';
                break;
        }
        break;
    case 'POST':
        switch ($_GET['accion']){
            case 'archivo':
                include 'archivos.php';
                break;
        }
        break;
    default:
        echo 'Verbo no permitido';
        break;
}

?>