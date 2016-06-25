<?php
session_start();
//Configuración global
require_once 'config/global.php';

//Base para los controladores que contiene las entidades y modeos de BD
require_once 'core/ControladorBase.php';

//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

//cabeceras html
require_once 'view/header_view.php';

//controladores y acciones
if(isset($_GET["ctrl"])){
    $controllerObj=cargarControlador($_GET["ctrl"]);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controllerObj);

//footer html
require_once 'view/footer_view.php';
?>
