<?php

var_dump($_GET);
echo "<br>";
var_dump($_SERVER['REQUEST_METHOD']);
echo "<br>";
var_dump($_POST);
echo "<br> Hola ". $_GET['nombre'];

?>