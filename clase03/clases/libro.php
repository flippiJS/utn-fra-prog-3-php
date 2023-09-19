<?php
class Libro {
    private $titulo;
    private $precio;

    public function __construct($titulo, $precio) {
        $this->titulo = $titulo;
        $this->precio = $precio;
    }

    /**
     * Guarda en el archivo libros.txt el libro en formato '$titulo - $precio'.
     * Hace un echo dependiendo de si pudo escribir o no.
     * Deja un salto de linea al final para que la próxima vez que se escriba se comiense desde la próxima línea.
     * 
     * @param Libro $libro es el libro a guardar
     */
    public static function guardarLibro($libro){
        $exito = false;
        $archivo = fopen("libros.txt", "a");
        $cadena = $libro->titulo . " - " . $libro->precio . "\n";

        $caracteresEscritos = fwrite($archivo, $cadena);
        
        if($caracteresEscritos > 0){
            $exito = true;
        }

        fclose($archivo);

        if($exito) {
            echo "<p>¡Libro agregado!</p>";
        } else {
            echo "<p>¡Algo salió mal!</p>";
        }

        echo "<br/>";
    }

    /**
     * Lee todos los libros del archivo libros.txt y los muestra.
     */
    public static function leerLibros() {
        $archivo = fopen("libros.txt", "r");

        $lectura = fread($archivo, filesize("libros.txt"));

        fclose($archivo);

        // Meramente estético: Podríamos leer linea por linea y agregar en cada una un <br/> siguiendo un código similar como el de la funcion encontrarPrecio.

        if($lectura !== false){
            echo $lectura;
        } else {
            echo "<p>Error</p>";
        }

        echo "<br/>";
    }

    /**
     * Busca en el archivo libros.txt la primer coincidencia del libro que coincida con el titulo pasado por parámetro y muestra su precio.
     * 
     * @param string $titulo es el titulo del libro a buscar
     */
    public static function encontrarPrecio($titulo) {
        $precio = -1;

        $archivo = fopen("libros.txt", "r");
        
        while(!feof($archivo)){
            $linea = fgets($archivo);
            $elementosDeLaLinea = explode(" - ", $linea);
            
            if($elementosDeLaLinea[0] === $titulo){
                $precio = $elementosDeLaLinea[1];
                break;
            }
        }
        
        fclose($archivo);

        if($precio < 0){
            echo "<p>No se pudo encontrar</p>";
        } else {
            echo "<p>El precio de " . $titulo . " es <b>$" . $precio . "</b></p>";
        }

        echo "<br/>";
    }
}