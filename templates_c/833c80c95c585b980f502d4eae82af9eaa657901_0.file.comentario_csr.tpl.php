<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 17:10:23
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\comentario_csr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7bc6fe25b31_97651002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833c80c95c585b980f502d4eae82af9eaa657901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\comentario_csr.tpl',
      1 => 1606861822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comentarioForm_csr.tpl' => 1,
  ),
),false)) {
function content_5fc7bc6fe25b31_97651002 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="contenedor" <?php if ((isset($_SESSION['ADMIN']))) {?>
                        data-admin="<?php echo $_SESSION['ADMIN'];?>
"
                    <?php }?>

                    <?php if ((isset($_SESSION['EMAIL']))) {?>
                        data-usuario = "<?php echo $_SESSION['EMAIL'];?>
"
                    <?php }?>>
    
    <ul class="list-group" id="comentarios"  >

    </ul>
</div>
<?php if ($_smarty_tpl->tpl_vars['usuario_smarty']->value != '') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:comentarioForm_csr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php echo '<script'; ?>
 src="js/comentario.js"><?php echo '</script'; ?>
><?php }
}
