<?php

require_once "./app/Model/ComentarioModel.php";
require_once "./app/Controller/UsuarioController.php";
require_once "APIController.php";

class APIComentarioController extends APIController{

    protected $controllerUsuario;
    //CONSTRUCTOR
    function __construct(){

        parent::__construct();

        $this->model = new ComentarioModel();
        $this->controllerUsuario = new UsuarioController();
    }

    //OBTENGO TODOS LOS COMENTARIOS DE UN ITEM
    public function getComentarios($params = null){

        $id_item = $params[':ID'];
        $comentarios = $this->model->getComentariosDeItem($id_item);

        if (isset($comentarios)) 
           $this->view->response($comentarios, 200);
        else 
            $this->view->response("el comentario no existe", 404);
        
    }

    //PARA BORRAR UN COMENTARIO
    public function deleteComentario($params = null){

        $admin = $this->controllerUsuario->checkAdmin();
        
        $id_comentario = $params[':ID'];
        $comentario = $this->model->deleteComentario($id_comentario);

        if($comentario > 0){
            $this->view->response("El comentario fue eliminado", 200);
        }else{
            $this->view->response("El comentario no existe", 404);
        }
    }

    //PARA PONER UN COMENTARIO
    public function insertComentario($params = null){

        $logueado = $this->controllerUsuario->checkLoggedIn();

        if ($logueado) {
           //obtengo el objeto JSON enviado por POST     
            $body = $this->getData();

            // inserto el comentario
            $id_comentario = $this->model->insertComentario($body->id_cerveza, $body->id_usuario, $body->comentario, $body->valoracion);

            if (!empty($id_comentario)) {
            $this->view->response("El comentario se pudo insertar id=$id_comentario", 201);
            }else {
                $this->view->response("El comentario no se pudo insertar", 404);
            }

        } else {
            header("Location:" . BASE_URL . "home");
        }
        
        
    }

}    