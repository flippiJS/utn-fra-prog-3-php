<?php

include_once("./clases/libro.php");

echo "<h1>Archivos</h1><br/><br/>";

$libro1 = new Libro("El señor de los anillos", 500);
$libro2 = new Libro("Harry Potter", 400);
$libro3 = new Libro("PHP para expertos", 10000);

echo "<h3>Guardado de libros</h3><br/>";

Libro::guardarLibro($libro1);

Libro::guardarLibro($libro2);

Libro::guardarLibro($libro3);

?>