<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:25:35
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83e8f4d2e39_02365302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ca84cf31f2b4c2bb95fcf268a57686fa4b71b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\detalleProducto.tpl',
      1 => 1606938408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:comentario_csr.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc83e8f4d2e39_02365302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->nombre_producto;?>
</h1>
        
        <ul>
            <li>Descripción: <?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->descripcion;?>
</li>
            <li>Porcentaje de alcohol: <?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->porcentaje_alc;?>
</li>
            <li>Precio: <?php echo $_smarty_tpl->tpl_vars['producto_smarty']->value->precio;?>
</li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria_smarty']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['producto_smarty']->value->id_categoria == $_smarty_tpl->tpl_vars['categoria']->value->id_categoria) {?>
                <li> Categoría: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</li>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

    </div>
    </div> 

    <h3>Comentarios</h3>
    <div class="container" style="
        margin-top: 24px;">
        <?php $_smarty_tpl->_subTemplateRender("file:comentario_csr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>    


    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}