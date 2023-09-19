<?php

include_once("./clases/libro.php");

echo "<h3>Lectura de libro especifico</h3><br/>";

Libro::encontrarPrecio("PHP para expertos");

Libro::encontrarPrecio("Inexistente");