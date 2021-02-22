<!DOCTYPE html>
<html>
<head>
	<title>Bucle While</title>
</head>
<body>
<h1>Bucle While</h1>
<?php
	/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada
	del teclado mediante un formulario simple */
	if (isset($_POST['number'])) {
		$number = $_POST['number'];
		$counter = 1;
		while ( $counter <= $number) {
			echo "los bucles son faciles! <br> \n";
			$counter++;
		}
		echo "se acabo";
	}
?>
</body>
</html>