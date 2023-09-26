<?php

require './Usuario.php';

require './Empleado.php';

$usuarioConApellido = new Usuario("Franco", "Lippi");
echo $usuarioConApellido->mostrar();

echo "<br>";

$usuarioSinApellido = new Usuario("Franco");
echo $usuarioSinApellido->mostrar();

echo "<br>";

echo Usuario::metodoEstatico();

?>