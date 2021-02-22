<?php
session_start();
if(array_key_exists("id",$_COOKIE) && $_COOKIE["id"]){
    $_SESSION['id'] = $_COOKIE['id'];
    
}
if(array_key_exists("id",$_SESSION) && $_SESSION["id"]){
    
    include("connection.php");
    $query = "SELECT diario FROM diario WHERE id = '".mysqli_real_escape_string($enlace,$_SESSION["id"])."'";
    $result = mysqli_query($enlace,$query);
    $fila = mysqli_fetch_array($result);
    $contenidoDiario = $fila["diario"];
    
}else{
    header("LOCATION: index.php");
}
include ("header.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Diario Secreto</a>
  <div class="pull-xs-right">
      <a href="index.php?logout=1"><button class="btn btn-outline-success cerrarsesion" type="submit" style="text-align: left;">Cerrar Sesion</button></a>
  </div>
</nav>
<div class="container-fluid" id="contenedorSesionIniciada">
   <textarea name="" id="diario" cols="10" rows="20" class="form-control"><?php echo $contenidoDiario; ?></textarea>
   
</div>

<?php include("footer.php") ?>