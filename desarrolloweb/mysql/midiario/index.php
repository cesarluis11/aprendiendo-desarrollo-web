<?php
session_start();
if(array_key_exists("logout",$_GET)){
    session_unset();
    setcookie("id","",time()-60*60);
    $_COOKIE['id']= "";
}else if((array_key_exists("id",$_SESSION) AND $_SESSION['id']) OR (array_key_exists("id".$_COOKIE) AND $_COOKIE['id'])){
    header('Location: sesionIniciada.php');
}
if(array_key_exists("submit",$_POST)){
    $error = "";
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $registro = $_POST['registro'];
    
    
    include ("connection.php");
    if(!$email){
        $error .= "<br>Email requerido.";
    }
    if(!$pwd){
        $error .= "<br>Password requerida.";
    }
    if($error != ""){
        $error="<p>hubo error al querer envia el formulario".$error."</p>";
    }else{
        if($registro == '1'){
            $query = "SELECT id FROM diario WHERE email = '".mysqli_real_escape_string($enlace,$email)."' LIMIT 1";
            $result = mysqli_query($enlace,$query);
            if(mysqli_num_rows($result) > 0){
                $error = "Email ya registrado";
            }else{
                $query = "INSERT INTO diario (email, password) VALUES ('".mysqli_real_escape_string($enlace,$email)."','".mysqli_real_escape_string($enlace,$pwd)."')";
                if(!mysqli_query($enlace,$query)){
                    $error = "<p>No hemos podido completar el registro, intente mas tarde</p>";
                }else{
                    $query = "UPDATE diario SET password = '".md5(md5(mysqli_insert_id($enlace)).$pwd)."'WHERE id = '".mysqli_insert_id($enlace)."'LIMIT 1";
                    mysqli_query($enlace,$query);
                    $_SESSION['id'] = mysqli_insert_id($enlace);
                    
                    header('Location: sesionIniciada.php');
                    //header("LOCATION : sesionIniciada.php");
                }
            }
        }else{
            //comprobar el inicio de sesion.
            $query = "SELECT * FROM diario WHERE email = '".mysqli_real_escape_string($enlace,$email)."'";
            $result = mysqli_query($enlace,$query);
            $file = mysqli_fetch_array($result);
            if(isset($file)){
                $pwdhasheada = md5(md5($file['id']).$pwd);
                if($pwdhasheada == $file['password']){
                    //usuario autentificado
                    $_SESSION['id'] = $file['id'];
                        header('Location: sesionIniciada.php');
                    
                }else{
                    echo"el email/contraseña no existe en nuestro sistema";
                }
            }
        }
    }
}

?>
<?php include("header.php"); ?>
   <div class="container">
    <h1>Diario Secreto</h1>
    <p><strong>Guarda tus pensamientos para siempre</strong></p>
    <div id="error">
        <?php  echo $error; ?>
    </div>
    <form action="" method="post" id="formularioRegistro">
       <fieldset class="form-group">
        <input type="email" name="email" placeholder="Tu email" class="form-control">
        </fieldset>
        <fieldset class="form-group">
        <input type="password" name="pwd" placeholder="Tu password" class="form-control">
        </fieldset>
        <div class="checkbox">
        <input type="checkbox" name="permanecerIniciada" value=1>Permanecer Iniciada
        </div>
        <input type="hidden" name="registro" value=1>
        <input type="submit" name="submit" value="Registrate" class="btn btn-primary">
        <p><a class="alternarformularios">Iniciar sesión</a></p>
    </form>
    
    <form action="" method="post" id="formulariologin">
      <p>Inicia sesion con tu usuario y contraseña</p>
       <fieldset class="form-group">
            <input type="email" name="email" placeholder="Tu email" class="form-control ">
        </fieldset>
        <fieldset class="form-group">
            <input type="password" name="pwd" placeholder="Tu password" class="form-control ">
        </fieldset>
        <div class="checkbox">
        <input type="checkbox" name="permanecerIniciada" value=1>permanecer Iniciada
        </div>
        <input type="hidden" name="registro" value=0>
        <fieldset class="form-group">
            <input type="submit" name="submit" value="Inicia Sesion" class="btn btn-success">
        </fieldset>
        <p><a class="alternarformularios btn btn-default">Registrate</a></p>
    </form>
    </div>
    <?php include("footer.php"); ?>
    
  

