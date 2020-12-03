<?php

    require_once './libs/smarty/Smarty.class.php';

class ProductoView{

    private $title;

    function __construct(){
        $this->title = "Brain Damage";
    }

    //RENDER DE INICIO
    function showInicio($producto, $categoriasSelect){

        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', $this->title);
        $smarty->assign('producto_smarty', $producto);
        $smarty->assign('categoriasSelect_smarty', $categoriasSelect);
        $smarty->display('templates/productos.tpl'); 
    }

    //LLEVA A INICIO
    function showHomeLocation(){
        header("Location:" . BASE_URL . "home");
    }

    //RENDER DETALLE DE UN PRODUCTO
    function showDetalleProducto($producto_id, $producto, $categoria, $usuario){
        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', $this->title);
        $smarty->assign('producto_smarty', $producto);
        $smarty->assign('categoria_smarty', $categoria);
        $smarty->assign('usuario_smarty', $usuario);
        $smarty->display('templates/detalleProducto.tpl'); 

    }
    
    //RENDER PARA EDITAR PRODUCTO
    function mostrarEditarProducto($categoriasSelect, $producto){
        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', $this->title);
        $smarty->assign('producto_smarty', $producto);
        $smarty->assign('categoriasSelect_smarty', $categoriasSelect);
        $smarty->display('templates/editProducto.tpl');  

    }

    //RENDER PARA MOSTRAR RESULTADO DEL FILTRO
    function ShowFiltro($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_smarty', $this->title);
        $smarty->assign('producto_smarty', $productos);
        $smarty->display('templates/productosFiltro.tpl'); 
    }





}

    
?>