<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:27:02
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\form_insertar_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83ee632df20_33673227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681a04834b7b2866e7c74ffbf6d3ae109bc0095b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\form_insertar_categoria.tpl',
      1 => 1602721780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc83ee632df20_33673227 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container" style="margin-top: 24px;">

    <form action="insert_categoria" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre de la categoría</label>
            <input type="text" class="form-control" name="input_nombre_categoria" id="formGroupExampleInput" placeholder="Nombre de la categoría">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Descripción</label>
            <input type="text" class="form-control"  name="input_descripcion_categoria" id="formGroupExampleInput" placeholder="Descripción">
        </div>
        <button type="submit" class="btn btn-primary">Agregar categoría</button>
    </form>
  </div><?php }
}
