<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:26:01
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\productosFiltro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83ea9b38c56_79457232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51585fc1b1c3b432cfc0ac50654a9013e3d4f93d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\productosFiltro.tpl',
      1 => 1606941522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc83ea9b38c56_79457232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container" style="
    margin-top: 24px;">
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_smarty']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
      <li class="list-group-item"> 
        <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>

        <button type="button" class="btn btn-outline-info"><a href="detalle_producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_cerveza;?>
">Detalles</a></button>
        <?php if ((isset($_SESSION['EMAIL']))) {?>
          <button type="button" class="btn btn-outline-success"><a href="editar_producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_cerveza;?>
">Editar</a></button>
          <button type="button" class="btn btn-outline-danger"><a href="borrar_producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_cerveza;?>
">Borrar</a></button>
        <?php }?>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    <?php }
}
