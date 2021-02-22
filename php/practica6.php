<!DOCTYPE html>
<html>
<head>
	<title>Practica 6</title>
</head>
<body>
	<h2>En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es
menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el
comando ECHO</h2>
<?php
	$num = rand(1,100);
	echo "el valor obtenido entre los valores 1 y 100 es: $num <br>";
	if ($num <=50) {
		echo "el valor: $num es menor o igual a 50";
	}else{
		echo "el valor: $num es mayor a 50";
	}
?>
</body>
</html>