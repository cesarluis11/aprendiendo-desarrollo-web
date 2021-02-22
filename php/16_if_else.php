<!DOCTYPE html>
<html>
<head>
	<title>if ,else</title>
</head>
<body>
<?php
	$dia = date("d");
	if($dia <= 10){
		echo "sitio activo";
	}else{
		echo "sitio fuera de servicio";
	}
?>
</body>
</html>