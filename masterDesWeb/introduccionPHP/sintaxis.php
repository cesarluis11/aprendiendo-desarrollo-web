<?php
/*imprimir en pantalla*/
print "mi primer codigo php con print";
echo "permite imprimir mas de un resultado";
echo "<p>hola mundo</p>";

/*****variables******/

$numero = 5; //variable tipo numero
echo "esto es una variable numero $numero";
echo "<br>";
var_dump($numero); //identificar el tipo de variable es
echo "<br>";
$palabra = "palabra"; //variable tipo texto
echo "esto es una variable texto $palabra";
echo "<br>";
var_dump($palabra);
echo "<br>";
$boleana = true; //variable tipo bolean
echo "esto es una variable boleana $boleana";
echo "<br>";
var_dump($boleana);
echo "<br>";
$arrayName = array("rojo","verde"); //variable tipo array
echo "esto es una variable de tipo arreglo $arrayName[0]";
echo "<br>";
var_dump($arrayName);
echo "<br>";
$arrayconpropiedades = array("verdura1"=>"lechuga","verdura2"=>"papa"); //variable tipo array con propiedades
echo "esto es una variable array con propiedades $arrayconpropiedades[verdura1]";
echo "<br>";
var_dump($arrayconpropiedades);
echo "<br>";
$frutas = (object)["fruta1"=>"manzana","fruta2"=>"pera"];  //variable de tipo objeto
echo "esto es una variable tipo objeto $frutas->fruta1";
echo "<br>";
var_dump($frutas);

/*****funciones****/
//funciones sin parametros
function saludo(){
	echo "<br>";
	echo "hola cesar";
}
saludo();

//funciones con parametros
function despedida($adios){
	echo "<br>";
	echo $adios;
}
despedida("adios cesar");

//funciones con retorno
function retorno ($retornar){
	return $retornar;
}
echo "<br>".retorno("retornado")."<br>";


/****condiciones****/
$a = 5;
$b =10;
//condiciones if
if($a > $b){
	echo "a es mayor que b <br>";
}else if($a == $b ){
	echo "a es igual que b <br>";
}else{
	echo "a es menor que b <br>";
}
//condiciones switch
$dia = "viernes";
switch ($dia) {
	case 'sabado':
		echo "voy a estudiar php <br>";
		break;
	case 'viernes':
		echo "voy a la fiesta <br>";
		break;
	case 'domingo':
		echo "voy a descansar <br>";
		break;
	default:
		echo "voy a la universidad <br>";
		break;
}
/***********ciclos******/
//ciclo while
$n = 1;
while ($n <= 5) {
	
	echo $n."<br>";
	$n++;
}


//ciclo do while
$p = 1;
do{
	echo $p;
	$p++;
}	
while($p <=5);
echo "<br>";
//ciclo for
for ($i=0; $i <= 5; $i++) { 
	echo $i;
}

?>