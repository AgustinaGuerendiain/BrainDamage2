<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 19:26:14
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\form_insertar_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7dc46e084b7_12863282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5724d261cb259fca0dc2384c467925a2a042675' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\form_insertar_categoria.tpl',
      1 => 1602721780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7dc46e084b7_12863282 (Smarty_Internal_Template $_smarty_tpl) {
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
