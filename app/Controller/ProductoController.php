<?php

require_once "app/View/ProductoView.php";
require_once "app/Model/ProductoModel.php";
require_once "app/Model/CategoriaModel.php";
require_once "UsuarioController.php";
require_once "app/Model/UsuarioModel.php";

class ProductoController{

    private $view;
    private $model;
    private $modelCategoria;
    private $modelUsuario;
   
    function __construct(){
 
        $this->view = new ProductoView();
        $this->model = new ProductoModel();
        $this->modelCategoria = new CategoriaModel();
        $this->controllerUsuario = new UsuarioController();
        $this->modelUsuario = new UsuarioModel();
    }

    //LLAMA AL HOME
    function home(){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        $producto = $this->model->getProducto();
        $categoriasSelect = $this->modelCategoria->getCategoria();
        $this->view->showInicio($producto, $categoriasSelect);
    }

    //MUESTRA EL DETALLE DE UN PRODUCTO
    function detalleProducto($params = null){
        $logueado = $this->controllerUsuario->checkLoggedIn();

        if ($logueado) {
            $usuario = $this->modelUsuario->getUsuario($_SESSION["EMAIL"] );
        }else {
            $usuario ="";
        }

        $producto_id = $params[":ID"];
        $producto = $this->model->getProductobyID($producto_id);
        $categoria = $this->modelCategoria->getCategoria();
        $this->view->showDetalleProducto($producto_id, $producto, $categoria, $usuario);
    }
 
    //LOGICA PARA INSERTAR PRODUCTO
    function insertProducto(){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            if (isset($_POST['input_nombre_producto']) && isset($_POST['input_descripcion_producto']) && isset($_POST['input_porcentajeAlc_producto']) && isset($_POST['input_precio_producto']) && isset($_POST['input_categoria'])) {
                
                $this->model->insertProducto($_POST['input_nombre_producto'],$_POST['input_descripcion_producto'], $_POST['input_porcentajeAlc_producto'], $_POST['input_precio_producto'], $_POST['input_categoria']);
                $this->view->showHomeLocation();
            }
        }
        else { 
            $this->view->showHomeLocation();
        }
     
    }

    // //PARA LLAMAR A BORRAR UN PRODUCTO
    function deleteProducto($params = null){
        $logueado = $this->controllerUsuario->checkLoggedIn();

        if ($logueado) {
            $producto_id = $params[":ID"];
            $this->model->deleteProducto($producto_id);
            $this->view->showHomeLocation();
        }
        else {
            $this->view->showHomeLocation();
        }   
    }

    //PARA LLAMAR A EDITAR UN PRODUCTO
    function editProducto($params = null){

        $logueado = $this->controllerUsuario->checkLoggedIn();

        if ($logueado) {
            $producto_id = $params[':ID'];
            $producto = $this->model->getProductobyID($producto_id);
            $categoriasSelect = $this->modelCategoria->getCategoria();
            $this->view->mostrarEditarProducto( $categoriasSelect, $producto);
        }
        else {
            $this->view->showHomeLocation();
        }
        
    }

    //PARA HACER UPDATE DE UN PRODUCTO
    function UpdateProducto($params = null){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            $id_producto = $params[':ID'];
            if (isset($_POST['input_nombre_producto']) && isset($_POST['input_descripcion_producto']) && isset($_POST['input_porcentajeAlc_producto']) && isset($_POST['input_precio_producto']) && isset($_POST['input_categoria'])) {
                $nombre_producto = $_POST['input_nombre_producto'];
                $descripcion = $_POST['input_descripcion_producto'];
                $porcentaje_alc = $_POST['input_porcentajeAlc_producto'];
                $precio = $_POST['input_precio_producto'];
                $categoria = $_POST['input_categoria'];

                $this->model->updateProducto( $id_producto, $nombre_producto, $descripcion, $porcentaje_alc, $precio, $categoria);
                $this->home();
            } else {
                
                $this->view->showHomeLocation();
            }   
        }
        else {
            $this->view->showHomeLocation();
        }
    }

    //PARA FILTRAR
    function filtrar(){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        $productos = null;
        //FILTRA POR NOMBRE - PORCENTAJE DE ALCOHOL - PRECIO
        if (!empty($_POST["cerveza"]) && !empty($_POST["porcentajeAlcohol"]) && !empty($_POST["precio"])){
            //NOMBRE
            $nombreProducto = $_POST["cerveza"]; 

            //ALCOHOL
            $porcentajeAlcohol = $_POST["porcentajeAlcohol"]; 
            $porcentajes = explode("-", $porcentajeAlcohol);
            $minimo = $porcentajes[0];
            $maximo = $porcentajes[1];

            //PRECIO
            $precio = $_POST["precio"]; 
            $precios = explode("-", $precio);
            $minimoPrecio = $precios[0];
            $maximoPrecio = $precios[1];

            $productos = $this->model->getProductoPorNombreYAlcoholYPrecio($nombreProducto,$minimo, $maximo,$minimoPrecio, $maximoPrecio);

        }else if (!empty($_POST["cerveza"]) && !empty($_POST["porcentajeAlcohol"])) {
            //FILTRA NOMBRE Y PORCENTAJE DE ALCOHOL
            $nombreProducto = $_POST["cerveza"]; 

            $porcentajeAlcohol = $_POST["porcentajeAlcohol"]; 
            $porcentajes = explode("-", $porcentajeAlcohol);
            $minimo = $porcentajes[0];
            $maximo = $porcentajes[1];
            $productos = $this->model->getProductoPorNombreYAlcohol($nombreProducto,$minimo, $maximo);

        }else if(!empty($_POST["cerveza"]) && !empty($_POST["precio"])){
            //FILTRA NOMBRE Y PRECIO
            $precio = $_POST["precio"]; 
            $precios = explode("-", $precio);
            $minimoPrecio = $precios[0];
            $maximoPrecio = $precios[1];

            $nombreProducto = $_POST["cerveza"]; 
            $productos = $this->model->getProductoPorNombreYPrecio($nombreProducto,$minimoPrecio, $maximoPrecio);

        }else if(!empty($_POST["porcentajeAlcohol"]) && !empty($_POST["precio"])){
            //FILTRA PORCENTAJE DE ALCOHOL Y PRECIO
            $precio = $_POST["precio"]; 
            $precios = explode("-", $precio);
            $minimoPrecio = $precios[0];
            $maximoPrecio = $precios[1];

            $porcentajeAlcohol = $_POST["porcentajeAlcohol"]; 
            $porcentajes = explode("-", $porcentajeAlcohol);
            $minimo = $porcentajes[0];
            $maximo = $porcentajes[1];
            $productos = $this->model->getProductoPorAlcoholYPrecio($minimo,$maximo,$minimoPrecio,$maximoPrecio);

        }else if(!empty($_POST["cerveza"])){
            //FILTRA POR NOMBRE
            $nombreProducto = $_POST["cerveza"]; 
            $productos = $this->model->getProductoPorNombre($nombreProducto);

        }else if(!empty($_POST["porcentajeAlcohol"])){
            //FILTRA POR PORCENTAJE DE ALCOHOL
            $porcentajeAlcohol = $_POST["porcentajeAlcohol"]; 
            $porcentajes = explode("-", $porcentajeAlcohol);
            $minimo = $porcentajes[0];
            $maximo = $porcentajes[1];
            $productos = $this->model->getProductoPorPorcentajeAlcohol($minimo, $maximo);

        }else if(!empty($_POST["precio"])){
            //FILTRA POR PRECIO
            $precio = $_POST["precio"]; 
            $precios = explode("-", $precio);
            $minimoPrecio = $precios[0];
            $maximoPrecio = $precios[1];
            $productos = $this->model->getProductosPorPrecio($minimoPrecio, $maximoPrecio);
        }
        
        $this->view->ShowFiltro($productos);
 
    }


}


?>