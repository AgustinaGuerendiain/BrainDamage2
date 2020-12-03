<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 23:44:35
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2\templates\administracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6c7532ec678_17579678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed93652b4f51caf138e4936eaaf0084c996fa387' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2\\templates\\administracion.tpl',
      1 => 1606859040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc6c7532ec678_17579678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['esAdmin_smarty']->value == 0) {?>
    <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>  
<?php } else { ?>
    <div class="container" style="
        margin-top: 24px;">

    <ul class="list-group">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios_smarty']->value, 'usuarios');
$_smarty_tpl->tpl_vars['usuarios']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuarios']->value) {
$_smarty_tpl->tpl_vars['usuarios']->do_else = false;
?>
        <li class="list-group-item"> 

            <?php echo $_smarty_tpl->tpl_vars['usuarios']->value->email;?>
 
            <span class="badge badge-primary badge-pill">
            <?php if ($_smarty_tpl->tpl_vars['usuarios']->value->admin == 0) {?>
                El usuario no tiene permiso de administración
            <?php } else { ?>
                El usuario es administrador
            <?php }?>
            </span>
            
            <form action="cambiar_permiso/<?php echo $_smarty_tpl->tpl_vars['usuarios']->value->id_usuario;?>
" method="post" data-iduser="<?php echo $_smarty_tpl->tpl_vars['usuarios']->value->id_usuario;?>
">
                
                <select name="" id="" value="">
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                
                <button type="submit" class="btn btn-primary">Cambiar permiso</button>
            </form>
        
        <button type="button" class="btn btn-outline-danger"><a href="borrar_usuario/<?php echo $_smarty_tpl->tpl_vars['usuarios']->value->id_usuario;?>
">Borrar</a></button>
        
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>

    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   <?php }
}
