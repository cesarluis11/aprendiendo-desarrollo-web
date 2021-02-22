<?php
#index, mostrar la salida a las vistas del usuarioy tambien las distintas acciones que el usuario envia al controlador
require_once "controllers/controller.php";  //requerir todo lo que esta dentro del archivo llamada ,solo una vez
require_once "models/model.php";

$mvc = new MvcController();
$mvc->plantilla();

?>