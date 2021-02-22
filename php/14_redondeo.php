<!DOCTYPE html>
<html>
<head>
	<title>Calculos</title>
</head>
<body>
<h1>Calculos, redondeo y formato</h1>
<?php
	$precioneto = 101.98;
	$iva = 0.196;
	$resultado = $precioneto*$iva;
	$resultado2 = 0;
	echo "El precio es de: $precioneto <br>";
	echo "y el iva el: $iva %<br>";
	echo "Resultado :";
	echo $resultado." sin redondear <br>";
	echo round($resultado,2)." redondeado con Round()<br>";
	$resultado2 = sprintf("%01.2f",$resultado);
	echo "usando la funcion sprintf se ve asi: $resultado2";

?>
</body>
</html>