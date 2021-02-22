<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>todoviral/registro</title>
</head>
<body>
  <div class="card">
  <div class="card text-white bg-primary mb-3">
    Login con facebook
  </div>
  <div class="card-body">
    <h5 class="card-title">BIENVENIDOS A TODO VIRAL </h5>
    <h6 class="card-title">Registrate !!!!GRATIS!!!!</h6>
    <div>
      <form method="POST" action="guardar_datos.php">
        <div class="form-group">
      <label for="exampleInputEmail1">Nombre</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" required>
      <small id="emailHelp" class="form-text text-muted">Por favor coloca tu nombre completo</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Correo Electrónico</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required>
      <small id="emailHelp" class="form-text text-muted">Por favor coloca un correo</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Usuario de Facebook</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="facebook" required>
      <small id="emailHelp" class="form-text text-muted">Puede ser el numero de telefono o el correo electrónico</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" required>
    </div>
    
    <button type="submit" class="btn btn-primary btn-sm">Registrate</button>
    <a href="#" class="btn btn-success btn-sm">Inicia Sesión</a>
  </form>      
    </div>
  </div>
</div>
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>