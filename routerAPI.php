<?php

require_once 'routerClass.php';
require_once "api/APIComentarioController.php";

//instancio el router
$routerAPI = new Router();


//RUTAS PARA COMENTARIOS
$routerAPI->addRoute("comentarios/:ID", "GET", "APIComentarioController", "getComentarios");
$routerAPI->addRoute("comentario", "POST", "APIComentarioController", "insertComentario");
$routerAPI->addRoute("comentario/:ID", "DELETE", "APIComentarioController", "deleteComentario");


//run
$routerAPI->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
