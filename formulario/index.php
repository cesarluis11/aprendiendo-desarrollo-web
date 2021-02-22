<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>FormularioRegistro</title>
  </head>
  <body>
    <h2>Introduce tus datos de contacto</h2>
    <div class="alert alert-danger" role="alert" id="errores">
      
    </div>
    <form method="get" action="controller.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="correo">Correo</label>
          <input type="email" class="form-control" id="correo" placeholder="algo@compañia.com" name="email">
        </div>
        <div class="form-group col-md-6">
          <label for="contrasena">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" placeholder="******" name="contrasena">
        </div>
      </div>
      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion">
      </div>
      <div class="form-group">
        <label for="colonia">Colonia</label>
        <input type="text" class="form-control" id="colonia" placeholder="Colonia" name="colonia">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="ciudad">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="form-group col-md-4">
          <label for="sexo">Sexo</label>
          <select id="sexo" class="form-control" name="sexo">
            <option value="">Seleciona...</option>
            <option value="h">Hombre</option>
            <option value="m">Mujer</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">C.P.</label>
          <input type="text" class="form-control" id="codigoPostal" name="codigoPostal">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terminosCondiciones" name="terminosCondiciones" checked>
          <label class="form-check-label" for="terminosCondiciones">
            Acepto los terminos y condiciones*
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-block" id="enviar">Enviar</button>
    </form>
    <br>
    <div class="alert alert-warning" role="alert" id="exito">
      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="application/javascript" src="jquery.js"></script>
  </body>
</html>