<!DOCTYPE html>
<html>
<head>
	<title>Practica 10</title>
</head>
<body>
<h4>Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por ultimo el do/while.</h4>
<form method="post">
	<label for="numero">Ingresa el numero a multiplar</label>
	<input type="number" name="numero">
	<br>
	<label for="multiplicador">Hasta que numero desea multiplicar</label>
	<input type="number" name="multiplicador">
	<br>
	<input type="submit" value="Calcular">
</form>
<hr>
<?php
	if (isset($_POST['numero']) && isset($_POST['multiplicador'])) {
		$numero = $_POST['numero'];
		$multiplicador = $_POST['multiplicador'];
		echo "calculo mediante un for <br>";
		for ($i=1; $i <=$multiplicador ; $i++) { 
			echo "$numero * $i: ".($numero*$i)."<br>";
		}

		echo "<br>calculo mediante un while<br>";
		$contador = 1;
		while ($contador <= $multiplicador) {
			echo "$numero * $contador: ".($numero*$contador)."<br>";
			$contador++;		
		}

		echo "<br>calculo mediante un Do-while<br>";
		$contador = 1;
		do{
			echo "$numero * $contador: ".($numero*$contador)."<br>";
			$contador++;		
		}while ($contador <= $multiplicador);
			
	}



?>
</body>
</html>