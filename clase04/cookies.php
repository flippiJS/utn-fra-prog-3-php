<?php

    if( isset( $_COOKIE['nombre']) )
    {
        echo "<p>La cookie está creada y el valor es: </p>" . $_COOKIE['nombre'];
    }
    else
    {
        echo "<p>La cookie no existe, la creamos</p>";
        // Crea una Cookie con un tiempo de vida de 2 minutos
         setcookie("nombre", "franco", time() + (60*2) );
    }

?>