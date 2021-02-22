<?php

class EnlacePaginas 
{
	public function enlacesPaginasModel($enlacesModel)
	{
		if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contactenos"){
			$modulo = "views/modules/".$enlacesModel.".php";
		}

		else if($enlacesModel == "index"){
			$modulo = "views/modules/inicio.php";	
		}else{
			$modulo = "views/modules/inicio.php";
		}
		return $modulo;
	}

}

?>