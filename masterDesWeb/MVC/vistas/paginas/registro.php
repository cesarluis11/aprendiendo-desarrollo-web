<div class="d-flex justify-content-center text-center">
  <form class="p-5 bg-light" method="post" action="">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingresa tu nombre" name="registroNombre">
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        </div>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa email" name="registroEmail">
      </div>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        </div>
        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Ingresa password" name="registroPassword">
      </div>
    </div>
    <?php 
      $registro = new ControladorFormularios();
      $registro -> crtRegistro();
     ?>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>