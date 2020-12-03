<?php

    require_once './libs/smarty/Smarty.class.php';

class UsuarioView{

    private $title;

    function __construct(){
        $this->title = "Iniciar Sesión";
    }

    //LLEVA A ADMINISTRACION
    function showAdminLocation(){
        header("Location:" . BASE_URL . "administracion");
    }

    //RENDER INICIO DE SESIÓN
    function showLogin( $message = "" ){

        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 

    }

    //RENDER REGISTRACIÓN
    function showRegistracion($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', "Registración");
        $smarty->assign('message', $message);
        $smarty->display('templates/registracion.tpl'); 
    }

    ////RENDER ADMINISTRACIÓN
    function showAdministracion($message = "", $usuarios, $esAdmin){
        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', "Administración de usuarios");
        $smarty->assign('message', $message);
        $smarty->assign('usuarios_smarty', $usuarios);
        $smarty->assign('esAdmin_smarty', $esAdmin);
        $smarty->display('templates/administracion.tpl'); 
    }

}

    
?>