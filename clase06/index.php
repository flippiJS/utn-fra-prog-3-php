<?php
// Verificamos que el parámetro accion este definido
if(isset($_GET['accion'])){
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
                default:
                    echo 'Parámetro "accion" no permitido';
                    break;
            }
            break;
        case 'POST':
            switch ($_GET['accion']){
                case 'archivo':
                    include 'archivos.php';
                    break;
                default:
                    echo 'Parámetro "accion" no permitido';
                    break;
            }
            break;
        default:
            echo 'Verbo no permitido';
            break;
    }
} else {
    echo 'Parámetro "accion" no enviado';
}
