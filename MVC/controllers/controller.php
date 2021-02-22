<?php 

class MvcController 
{
	#llamar a la plantilla
	public function plantilla()
	{
		include "views/template.php";  //incluir todo el archivo al que se esta llamando
	}

	#interaccion del usuario
	public function enlacesPaginasController()
	{
		if(isset($_GET['action'])){
			$enlacesController = $_GET['action'];
		}else{
			$enlacesController = "index";
		}
		
		$respuesta = EnlacePaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;
	}

}

?>