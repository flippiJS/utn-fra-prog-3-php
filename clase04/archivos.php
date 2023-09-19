<?php

// Definimos en que carpeta vamos a guardar los archivos
// La carpeta debe estar creada
$carpetaArchivos = 'subida/';

// Datos del arhivo enviado por POST
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];

// Ruta destino, carpeta + nombre del archivo que quiero guardar
$ruta_destino = $carpetaArchivos . $nombre_archivo;

// Realizamos las validaciones del archivo
if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
}else{
   	if (move_uploaded_file($_FILES['archivo']['tmp_name'],  $ruta_destino)){
      		echo "El archivo ha sido cargado correctamente.";
   	}else{
      		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
   	}
}

?>