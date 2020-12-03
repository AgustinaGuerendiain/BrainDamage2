<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:26:09
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83eb1f24ec4_59196753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff73a0bc56a7ea90e9dcfb1cbb34e75054b403d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\categorias.tpl',
      1 => 1606865562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_insertar_categoria.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc83eb1f24ec4_59196753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['EMAIL']))) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:form_insertar_categoria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container" style="margin-top: 24px;">
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria_smarty']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>

                <?php if ((isset($_SESSION['EMAIL']))) {?>
                  <button type="button" class="btn btn-outline-success"><a href="editar_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Editar</a></button>
                  <button type="button" class="btn btn-outline-danger"><a href="borrar_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Borrar</a></button>
                <?php }?>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>

              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_smarty']->value, 'cerveza');
$_smarty_tpl->tpl_vars['cerveza']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cerveza']->value) {
$_smarty_tpl->tpl_vars['cerveza']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['cerveza']->value->id_categoria == $_smarty_tpl->tpl_vars['categoria']->value->id_categoria) {?>
                    <li><?php echo $_smarty_tpl->tpl_vars['cerveza']->value->nombre_producto;?>
 </li>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
