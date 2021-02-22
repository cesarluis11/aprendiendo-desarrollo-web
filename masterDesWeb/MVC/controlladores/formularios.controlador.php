<?php

/**
 * 
 */
class ControladorFormularios
{
	
	public function crtRegistro(){
		if(isset($_POST["registroNombre"])){
			echo $_POST["registroNombre"];
		}
	}

}