<?php
    include_once("./clases/libro.php");
    
    echo "<h1>Archivos</h1><br/><br/>";

    if(isset($_POST["titulo"]) && isset($_POST["precio"])) {
        
        $libro = new Libro($_POST["titulo"], $_POST["precio"]);

        Libro::guardarLibro($libro);
    } else {
        echo "Parametros incorrectos";
    }
