<?php

include_once("./clases/libro.php");

echo "<h3>Lectura de libro especifico por GET</h3><br/>";
if(isset($_GET["titulo"])){
    Libro::encontrarPrecio($_GET["titulo"]);
} else {
    echo "Parametro titulo no encontrado";
}
