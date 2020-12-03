<?php

class UsuarioModel{

    private $bbdd;
    
    function __construct(){
    
        $this->bbdd = new PDO ('mysql:host=localhost;'.'dbname=bbdd_cerveceria;charset=utf8', 'root', '');
    }

    //OBTENGO DATOS DE USUARIO MEDIANTE UN EMAIL, EN LA BBDD
    function getUsuario($email){

        $sentencia = $this->bbdd->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($email));
        return $sentencia->fetch(PDO::FETCH_OBJ);

    }

    //OBTENGO DATOS DE USUARIO MEDIANTE UN ID, EN LA BBDD
    function getUsuarioId($id){

        $sentencia = $this->bbdd->prepare("SELECT * FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);

    }

    //REGISTRACION DE USUARIO
    function insertUsuario($email,$clave){
        $sentencia = $this->bbdd->prepare(" INSERT INTO usuario(email, password, admin) VALUES (?, ? , ?)");
        $sentencia->execute(array($email,$clave,0));
    }

    //OBTENGO TODOS LOS USUARIOS
    function getUsuarios(){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //BORRAR UN USUARIO
    function deleteUsuario($id_usuario){
        $sentencia = $this->bbdd->prepare( " DELETE FROM usuario WHERE id_usuario = ? ");
        $sentencia->execute(array($id_usuario));
    }

    //CAMBIA PERMISO DE ADMINISTRADOR
    function updateUsuario($id_usuario, $permiso){
        $sentencia = $this->bbdd->prepare( " UPDATE usuario SET admin=? WHERE usuario.id_usuario=?");
        $sentencia->execute(array($permiso, $id_usuario));
    }


}



?>