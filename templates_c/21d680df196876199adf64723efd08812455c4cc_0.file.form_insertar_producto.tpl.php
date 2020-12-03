<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 19:05:19
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2\templates\form_insertar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbe9cdf418d84_48930016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21d680df196876199adf64723efd08812455c4cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2\\templates\\form_insertar_producto.tpl',
      1 => 1602721693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbe9cdf418d84_48930016 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="container" style="margin-top: 24px;">
    <form action="insert_producto" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre de la cerveza</label>
            <input type="text" class="form-control" name="input_nombre_producto" id="input_nombre_producto" placeholder="Nombre de la cerveza">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Descripción</label>
            <input type="text" class="form-control"  name="input_descripcion_producto" id="input_descripcion_producto" placeholder="Descripción">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Porcentaje de alcohol</label>
            <input type="number" class="form-control"  name="input_porcentajeAlc_producto" id="input_porcentajeAlc_producto" placeholder="Porcentaje de alcohol">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Precio</label>
            <input type="number" class="form-control" name="input_precio_producto" id="input_precio_producto" placeholder="Precio">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Categoría</label>
          <select class="form-control form-control-sm" name="input_categoria">
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
        <button type="submit" class="btn btn-primary">Agregar producto</button>
    </form>
  </div><?php }
}
