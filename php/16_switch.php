<!DOCTYPE html>
<html>
<head>
	<title>Condicional Switch</title>
</head>
<body>
<h1>Condicional Switch</h1>
<?php
	/*Declaramos una variable con un valor de muestra */
	$posicion = "abajo";
	echo "la variable posicion es ",$posicion."<br>";
	switch ($posicion) {
		case 'arriba':
			echo "la variable tiene el valor de arriba";
			break;
		
		case 'abajo':
			echo "la variable tiene el valor de abajo";		
			break;	
		default:
			echo "la variable contiene un valor distinto de arriba y abajo";
			break;
	}
?>
</body>
</html>