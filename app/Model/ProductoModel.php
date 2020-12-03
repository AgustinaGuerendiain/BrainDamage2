<?php

class ProductoModel{

    private $bbdd;
    
    function __construct(){
        $this->bbdd = new PDO ('mysql:host=localhost;'.'dbname=bbdd_cerveceria;charset=utf8', 'root', '');
    }

    //OBTENGO TODOS LOS PRODUCTOS DE LA BBDD
    function getProducto(){
    
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //OBTENGO UN PRODUCTO POR EL ID DE LA BBDD
    function getProductobyID($producto_id){
    
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE id_cerveza=?");
        $sentencia->execute(array($producto_id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
 
    //INSERTO PRODUCTO 
    function insertProducto($nombre_producto, $descripcion, $porcentaje_alc, $precio, $categoria){
    
        $sentencia = $this->bbdd->prepare(" INSERT INTO cerveza(nombre_producto, descripcion, porcentaje_alc, precio, id_categoria) VALUES (?, ? , ?, ?, ?)");
 
        $sentencia->execute(array($nombre_producto, $descripcion, $porcentaje_alc, $precio, $categoria));
    }
 
    //BORRO UN PRODUCTO MEDIANTE UN ID
    function deleteProducto($producto_id){

        $sentencia = $this->bbdd->prepare( " DELETE FROM cerveza WHERE id_cerveza = ? ");
        $sentencia->execute(array($producto_id));

    }
 
    //ACTUALIZO UN PRODUCTO
    function updateProducto( $id_producto, $nombre_producto, $descripcion, $porcentaje_alc, $precio, $categoria){
        $sentencia = $this->bbdd->prepare( " UPDATE cerveza SET nombre_producto=?, descripcion=?, porcentaje_alc=?, precio=?, id_categoria=? WHERE cerveza.id_cerveza=?");
        $sentencia->execute(array($nombre_producto,$descripcion, $porcentaje_alc, $precio, $categoria, $id_producto));


    }

    //FILTRO NOMBRE
    function getProductoPorNombre($nombreProducto){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE nombre_producto LIKE '%' ? '%' ");
        $sentencia->execute(array($nombreProducto));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    //FILTRO PORCENTAJE DE ALCOHOL
    function getProductoPorPorcentajeAlcohol($minimo, $maximo){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE porcentaje_alc BETWEEN ? AND ? ");
        $sentencia->execute(array($minimo, $maximo));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
   
    //FILTRO PRECIO
    function getProductosPorPrecio($minimoPrecio, $maximoPrecio){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE precio BETWEEN ? AND ? ");
        $sentencia->execute(array($minimoPrecio, $maximoPrecio));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //FILTRO POR NOMBRE Y PORCENTAJE DE ALCOHOL
    function getProductoPorNombreYAlcohol($nombreProducto,$minimo, $maximo){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE nombre_producto LIKE '%' ? '%' AND porcentaje_alc BETWEEN ? AND ? ");
        $sentencia->execute(array($nombreProducto,$minimo, $maximo));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //FILTRO POR NOMBRE Y PRECIO
    function getProductoPorNombreYPrecio($nombreProducto,$minimo, $maximo){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE nombre_producto LIKE '%' ? '%' AND precio BETWEEN ? AND ? ");
        $sentencia->execute(array($nombreProducto,$minimo, $maximo));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //FILTRO POR PORCENTAJE DE ALCOHOL Y PRECIO
    function getProductoPorAlcoholYPrecio($minimo, $maximo, $minimoPrecio, $maximoPrecio){
        $sentencia = $this->bbdd->prepare( " SELECT * FROM cerveza WHERE porcentaje_alc BETWEEN ? AND ? AND precio BETWEEN ? AND ?");
        $sentencia->execute(array($minimo, $maximo, $minimoPrecio, $maximoPrecio));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    //FILTRO POR NOMBRE, ALCOHOL Y PRECIO
    function getProductoPorNombreYAlcoholYPrecio($nombreProducto,$minimo, $maximo,$minimoPrecio, $maximoPrecio){
        $sentencia = $this->bbdd->prepare( "SELECT * FROM cerveza WHERE nombre_producto LIKE '%' ? '%' AND porcentaje_alc BETWEEN ? AND ? AND precio BETWEEN ? AND ? ");
        $sentencia->execute(array($nombreProducto,$minimo, $maximo,$minimoPrecio, $maximoPrecio));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}



?>