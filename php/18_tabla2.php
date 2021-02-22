<!DOCTYPE html>
<html>
<head>
	<title>Tabla Condicional 2</title>
</head>
<body>
<h1>Tabla Condicional 2</h1>
<?php
	/* Crearemos una tabla de valores de seno y coseno de 0 a 2
	en incrementos de 0.01. Los valores negativos que resulten los queremos
	mostrar en rojo, y los valores positivos en azul */
	/* Variacion. Un color diferente cada fila que se imprima */
	function muestra($valor,$renglon)
	{

		if($renglon % 2){
			$fondo = "#bbbbbb";
		}else{
			$fondo = "#ffffff";
		}
		if ($valor < 0.5) {
			$color = "red";
		}else{
			$color = "blue";
		}
		echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
	}
?>
<table border="1">
	<?php
		$renglon = 0;
		for ($i=0; $i <=2 ; $i+=0.01) { 
			echo "<tr>";
			muestra($i,$i);
			muestra(sin($i),$i);
			muestra(cos($i),$i);
			echo "</tr>";
		}
	?>
</table>
</body>
</html>