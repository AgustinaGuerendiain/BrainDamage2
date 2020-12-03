<?php

require_once "app/View/UsuarioView.php";
require_once "app/Model/UsuarioModel.php";

class UsuarioController{

    private $view;
    private $model;
   
    function __construct(){

        $this->view = new UsuarioView();
        $this->model = new UsuarioModel();
    }

    //PAGINA DE INICIO DE SESIÓN
    function login(){
        
        $this->view->showLogin();
    }
   
    //DESCONECTARSE DE LA SESIÓN
    function logout(){

        session_start();
        session_destroy();
        header("Location:" . LOGIN);
    }

    //VERIFICA SI EXISTE EL USUARIO
    function verifyAdmin(){

        $email = $_POST["input_email"];
        $pass = $_POST["input_pass"];

        if (!empty($email)) {
            $userFromDB = $this->model->getUsuario($email);
            if (!empty($userFromDB)) {
                if (password_verify($pass, $userFromDB->password)) {
                    session_start();
                    $_SESSION["EMAIL"] = $userFromDB->email; 
                    $_SESSION["ADMIN"] = $userFromDB->admin;     
                    header("Location:" . BASE_URL . "home");
                }else {
                    $this->view->showLogin("contraseña incorrecta");
                }
            }else {
                $this->view->showLogin("el usuario no existe");
            }
        }
    }

    //VERIFICA ADMIN
    function checkAdmin(){
        session_start();

        if(!($_SESSION["ADMIN"])){
            header("Location:" . BASE_URL . "home");
            die();
        }
    }
    
    //VERIFICA SI HAY UN USUARIO LOGUEADO
    function checkLoggedIn(){
        if (session_status()!==PHP_SESSION_ACTIVE) {
            session_start();
        }
        if(!isset($_SESSION['EMAIL'])){
            return false;
        }else return true;
    }

    //PAGINA DE REGISTRACIÓN
    function registracion(){
        
        $this->view->showRegistracion();
    }

    //PARA AGREGAR UN USUARIO
    function insertUsuario(){
       
        $email = $_POST['input_email'];
        $clave = $_POST['input_pass'];  

        if (!empty($email) && !empty($clave)) {

            $clave_encriptada = password_hash ($clave , PASSWORD_DEFAULT );  
            $this->model->insertUsuario($_POST['input_email'], $clave_encriptada);
            $this->verifyAdmin();
        }else { 
            $this->view->showRegistracion("Complete los campos vacíos");
        }
    }

    //PARA ADMINISTRAR USUARIOS
    function administrador(){

        $this->checkAdmin();  
        $userFromDB = $this->model->getUsuario($_SESSION["EMAIL"]);
        $usuarios = $this->model->getUsuarios();
        $esAdmin =$userFromDB->admin;

        if ($esAdmin==1) {
            $this->view->showAdministracion("",$usuarios, $esAdmin);
        } else {
            $this->view->showAdministracion("No tiene permiso de administrador",$usuarios, $esAdmin);
        }
    }

    //CAMBIA PERMISO DE ADMINISTRADOR
    function cambiarPermiso($params = null){

        $this->checkAdmin();  
        $id_usuario = $params[":ID"];
        $permiso = $this->model->getUsuarioId($id_usuario);
        
        if ($permiso->admin == 0) {
            $variable = 1;
        } else {
            $variable = 0;
        }

        $this->model->updateUsuario($id_usuario, $variable);
        $this->view->showAdminLocation();
    }

    //BORRA USUARIO
    function deleteUsuario($params = null){
        
        $this->checkAdmin();  
        $id_usuario = $params[":ID"];
        $this->model->deleteUsuario($id_usuario);
        $this->view->showAdminLocation();
    }

}



?>