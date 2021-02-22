<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de operadores Logicos</title>
</head>
<body>
<h1>ejemplo de operaciones logicos en PHP</h1>
<?php
	$a=8;
	$b=3;
	$c=3;
	echo ($a==$b) && ($c>$b),"<br>";
	echo ($a==$b) || ($b==$c),"<br>";
	echo !($b <= $c), "<br>";
?>
</body>
</html>