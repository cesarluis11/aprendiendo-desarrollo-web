<?php

/****programacion orientada a objetos POO****/
//clase

class Automovil
{
	//propiedades
	public $marca;
	public $modelo;

	//metodo
	public function mostrar(){
		echo "<p>hola soy un $this->marca, modelo $this->modelo </p>";
	}
}

//objeto
$a = new Automovil();
$a -> marca = "toyota";
$a -> modelo = "corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "honda";
$b -> modelo = "civic";
$b -> mostrar();
?>

