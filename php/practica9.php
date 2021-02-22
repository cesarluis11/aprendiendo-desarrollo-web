<!DOCTYPE html>
<html>
<head>
	<title>Practica 9</title>
</head>
<body>
<h3>Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3
lugo mostrar en la pagina el string “tres”).</h3>
<?php
	$num = rand(1,5);

	if ($num == 1) {
		echo "uno";
	}
	if ($num == 2) {
		echo "dos";
	}
	if ($num == 3) {
		echo "tres";
	}
	if ($num == 4) {
		echo "cuatro";
	}
	if ($num == 5) {
		echo "cinco";
	}
?>
</body>
</html>