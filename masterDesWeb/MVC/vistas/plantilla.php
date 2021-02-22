<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>ejemplo MVC</title>
  </head>
  <body>
    <div class="content-fluid">
    	<h3 class="text-center py-3">LOGO</h3>
    </div>
	<div class="content-fluid">
		<div class="content">
			<ul class="nav nav-justified py-2 nav-pills">
        <?php if (isset($_GET["pagina"])): ?>

          <?php if ($_GET["pagina"] == "registro"): ?>
            <li class="nav-item">
              <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="index.php?pagina=registro" class="nav-link ">Registro</a>
            </li>
          <?php endif ?>

          <?php if ($_GET["pagina"] == "ingreso"): ?>
            <li class="nav-item">
              <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="index.php?pagina=ingreso" class="nav-link ">Ingreso</a>
            </li>
          <?php endif ?>

          <?php if ($_GET["pagina"] == "inicio"): ?>
            <li class="nav-item">
              <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
            </li>
          <?php endif ?>
          <?php else: ?>
            <li class="nav-item">
            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
            </li>
            <li class="nav-item">
              <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
            </li>
            <li class="nav-item">
              <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
            </li>
        <?php endif ?>
            <li class="nav-item">
              <a href="index.php?pagina=salir" class="nav-link">Salir</a>
            </li>
			</ul>
		</div>
	</div>
	<div class="content">
    <div class="card border-primary">
      <div class="card-body">
        <?php 
          if(isset($_GET["pagina"])){
            if($_GET["pagina"] == "registro" || $_GET["pagina"] == "ingreso" || $_GET["pagina"] == "inicio" || $_GET["pagina"] == "salir"){
              include "paginas/".$_GET["pagina"].".php";
            }else{
              include "paginas/error404.php";
            }

          }else{
            include "paginas/registro.php";             
          }

        
        ?>
      </div>
    </div>
	</div>
    <!-- Optional JavaScript -->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- datatable -->
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

	<script>
		$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    } );
		} );
	</script>
  </body>
</html>