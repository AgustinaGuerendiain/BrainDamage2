<?php

class ComentarioModel {

    private $bbdd;
    
    function __construct(){
        $this->bbdd = new PDO ('mysql:host=localhost;'.'dbname=bbdd_cerveceria;charset=utf8', 'root', '');
    }

    //OBTENGO TODOS LOS COMENTARIO
    function getComentariosDeItem($id_item){
    
        $sentencia = $this->bbdd->prepare(" SELECT * FROM comentario WHERE id_cerveza=? ");
        $sentencia->execute(array($id_item));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //PARA BORRAR UN COMENTARIO
    function deleteComentario($id_comentario){
        
        $sentencia = $this->bbdd->prepare( " DELETE FROM comentario WHERE id_comentario = ? ");
        return $sentencia->execute(array($id_comentario));

        //te dice cuantas filas toco/borro/etc esa sentencia
        return $sentencia->rowCount();
    }
    
    //PARA INSERTAR UN COMENTARIO
    function insertComentario($id_cerveza, $id_usuario, $comentario, $valoracion){
    
        $sentencia = $this->bbdd->prepare( " INSERT INTO comentario (id_cerveza, id_usuario, comentario, valoracion)
                                    VALUES(?, ?, ?, ?)");
 
        $sentencia->execute(array($id_cerveza, $id_usuario, $comentario, $valoracion));
        return $this->bbdd->lastInsertId();
    }
 
 
}