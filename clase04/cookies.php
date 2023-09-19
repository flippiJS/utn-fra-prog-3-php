<?php
    // Ejemplo Cookies

    if( isset( $_COOKIE['prueba']) )
    {
        // Verificammos que esta creada la cookie "prueba"
        echo "<p>La cookie está creada</p>";
    }
    else
    {
        echo "<p>La cookie no existe, la creamos</p>";
        // Crea una Cookie con un tiempo de vida de 2 minutos
         setcookie("prueba", true, time() + (60*2) );
    }

?>
