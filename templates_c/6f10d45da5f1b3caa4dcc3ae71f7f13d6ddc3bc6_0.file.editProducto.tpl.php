<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 00:16:29
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2\templates\editProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6cecd9d69d3_88945530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f10d45da5f1b3caa4dcc3ae71f7f13d6ddc3bc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2\\templates\\editProducto.tpl',
      1 => 1606864586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc6cecd9d69d3_88945530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Editar producto</h1>
  <div class="container">
    <form action="update_producto/<?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->id_cerveza;?>
" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre de la cerveza</label>
            <input type="text" class="form-control" name="input_nombre_producto" id="formGroupExampleInput" placeholder="Nombre de la cerveza" value=" <?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->nombre_producto;?>
 ">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Descripción</label>
            <input type="text" class="form-control"  name="input_descripcion_producto" id="formGroupExampleInput" placeholder="Descripción" value=" <?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->descripcion;?>
 ">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Porcentaje de alcohol</label>
            <input type="number" class="form-control"  name="input_porcentajeAlc_producto" id="formGroupExampleInput" placeholder="Porcentaje de alcohol" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Precio</label>
            <input type="number" class="form-control" name="input_precio_producto" id="formGroupExampleInput" placeholder="Precio" >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Categoría</label>
          <select class="form-control form-control-sm" name="input_categoria" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriasSelect_smarty']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categorias']->value->nombre_categoria;?>
</option> 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     <?php }
}
