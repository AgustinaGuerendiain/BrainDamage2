<?php

require_once "app/View/CategoriaView.php";
require_once "app/Model/CategoriaModel.php";
require_once "app/Model/ProductoModel.php";
require_once "UsuarioController.php";

class CategoriaController{

    private $view;
    private $model;
    private $modelProducto;
    private $controllerUsuario;
   
    function __construct(){

        $this->view = new CategoriaView();
        $this->model = new CategoriaModel();
        $this->controllerUsuario = new UsuarioController();
        $this->modelProducto = new ProductoModel();
    }
    
    //PARA LLAMAR A LA PAGINA DE CATEGORIAS
    function categoria(){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        $categoria = $this->model->getCategoria();
        $producto = $this->modelProducto->getProducto();
        $this->view->showCategoria($categoria, $producto);
    }

   
    //PARA INSERTAR/AGREGAR UNA NUEVA CATEGORIA
    function insertCategoria(){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            if (isset($_POST['input_nombre_categoria']) && isset($_POST['input_descripcion_categoria'])) {
                $this->model->insertCategoria($_POST['input_nombre_categoria'], $_POST['input_descripcion_categoria']);
                header("Location:" . BASE_URL . "categorias");
            }
        } else {
            $this->view->showHomeLocation();
        }
    }

    //PARA LLAMAR A BORRAR UNA CATEGORIA
    function deleteCategoria($params = null){

        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            $categoria_id = $params[":ID"];
            $this->model->deleteCategoria($categoria_id);
            header("Location:" . BASE_URL . "categorias");
        }
        else {
            $this->view->showHomeLocation();
        }   
    }

    //LLAMA LA VISTA PARA EDITAR UNA MARCA POR ID
    function editCategoria($params = null){

        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            $categoria_id = $params[':ID'];
            $categoria = $this->model->getCategoriaByID($categoria_id);
            $this->view->mostrarEditarCategoria($categoria);
        }else{
            $this->view->showHomeLocation();
        }
    }
    
    //PARA HACER UPDATE DE UNA CATEGORIA
    function updateCategoria($params = null){
        $logueado = $this->controllerUsuario->checkLoggedIn();
        if ($logueado) {
            $categoria_id = $params[':ID'];
            if (isset($_POST['input_edit_nombre_categoria']) && isset($_POST['input_edit_descripcion_categoria'])) {
                $nombre_categoria = $_POST['input_edit_nombre_categoria'];
                $descripcion_categoria = $_POST['input_edit_descripcion_categoria'];
                $this->model->updateCategoria($categoria_id, $nombre_categoria , $descripcion_categoria);
                $this->categoria();
            } else {
            $this->view->showHomeLocation();
            }
        }
    }
}

?>
