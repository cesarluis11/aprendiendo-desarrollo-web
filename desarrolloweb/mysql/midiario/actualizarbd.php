<?php
session_start();
if(array_key_exists("content",$_POST)){
    
    include("connection.php");
    $query = "UPDATE diario SET diario = '".mysqli_real_escape_string($enlace,$_POST["content"])."' WHERE id = '".mysqli_real_escape_string($enlace,$_SESSION["id"])."' LIMIT 1";
    mysqli_query($enlace,$query);
    
}

?>