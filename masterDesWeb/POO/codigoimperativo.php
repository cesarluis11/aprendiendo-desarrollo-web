<?php
/****codigo imperativo o espagueti****/
$automovil1 = (object)["marca" => "toyota","modelo" => "corolla"];
$automovil2 = (object)["marca" => "hyundai","modelo" => "vision"];

function mostrar($automovil){
	echo "<p>hola soy un $automovil->marca, modelo $automovil->modelo</p>";
}

mostrar($automovil1);
mostrar($automovil2);

?>