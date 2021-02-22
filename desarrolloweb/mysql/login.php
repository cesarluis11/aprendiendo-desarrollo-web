<?php
session_start();
include('conexion.php');
echo 'usuario con sesion iniciada '.$_SESSION['username'];
if($_POST){
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $emailvacio = '';
    $pwdvacio = '';
    
    if($email == ''){
        $emailvacio ='campo de email obligatorio';
    }
    if($pwdvacio == ''){
        $pwdvacio = 'el campo password es obligatorio';
    }
    
    $query = "SELECT * FROM usuarioscursophp WHERE email = '".mysqli_real_escape_string($enlace,$email)."' AND password = '".mysqli_real_escape_string($enlace,$pwd)."'";
    $result = mysqli_query($enlace,$query);
    if(mysqli_num_rows($result) >0){
        echo "ese email, ya esta en sistema registrado, intenta con otro email";
    }else{
        $query = "INSERT INTO usuarioscursophp (email,password) VALUES ('".mysqli_real_escape_string($enlace,$email)."','".mysqli_real_escape_string($enlace,$pwd)."')";
        if(mysqli_query($enlace,$query)){
            $_SESSION['username'] = $email;
            header("Location: session.php");
            //echo "usuario registrado";
        }else{
            echo "algo salio mal";
        }
    }
    
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Curso desarrollo web completo 2.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <h2>Bienvenido</h2>
  <form method="post">
  <div class="form-group">
    <label for="email">Correo electronico:</label>
    <input type="email" class="form-control" id="email" name="email">
    <small id="emailHelp" class="form-text text-muted"><?php echo $emailvacio ?></small>
  </div>
  <div class="form-group">
    <label for="pwd">contraseña:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
    <small id="emailHelp" class="form-text text-muted"><?php echo $pwdvacio ?></small>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

</body>
</html>