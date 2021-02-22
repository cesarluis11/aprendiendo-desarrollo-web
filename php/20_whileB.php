<!DOCTYPE html>
<html>
<head>
	<title>While B</title>
</head>
<body>
<h1>While b</h1>
<form action="20_whileB.php" method="post">
	Cuantas veces?
	<input type="text" name="number">
	<input type="submit" value="enviar">
</form>
<?php
	/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada
	del teclado mediante un formulario simple */
	if(isset($_POST['number'])){
		$number = $_POST['number'];
		$counter = 1;
		while ($counter <= $number) {
			echo "<b>$counter</b>.-los bucles son faciles!<br>\n";
			$counter++;
		}
		echo "se acabo";
	}
?>
</body>
</html>