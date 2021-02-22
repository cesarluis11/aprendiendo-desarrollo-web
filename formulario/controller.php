<?php
include"conexion.php";

 function insertarDatos(){
     include"conexion.php";
    $sql = "INSERT INTO contacto (correo, contrasena, direccion,colonia,ciudad,sexo,codigoPostal) VALUES ('John@gmail.com', 'Doe','san andres','puerto','mexico','H','54942')";

     if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
     
}

 function obtenerDatos(){
    $sql = 'SELECT * FROM contacto';
        include"conexion.php";
        foreach ($conn->query($sql) as $row) {
            print $row['id'] . "\t";
            print $row['correo'] . "\t";
            print $row['contrasena'] . "\n";
        }
}
    

insertarDatos();
//obtenerDatos();
?>