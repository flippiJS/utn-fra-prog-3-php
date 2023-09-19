<?php
// Array Indexado PHP a JSON
$array = array("Jorge", "Hernan", "Pedro", "Marta");
$json = json_encode($array);

echo $json;


// Array asoc PHP a JSON
$array_asoc = array("nombre" => "Jorge", "edad" => 32);
$json_b = json_encode($array_asoc);

echo $json_b;


// Clase/OBJ PHP a JSON
$clase = new StdClass();
$clase->nombre = 'Jorge';
$clase->edad = 32;

$json_c = json_encode($clase);

echo $json_c;


// JSON a PHP
$json_obj = '{"nombre":"Pedro", "edad":37}';
$obj = json_decode($json_obj);

var_dump($obj);

?>