<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 19:26:06
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7dc3e71ab42_32820457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f3712647706b0dcd97422b6499f63375fe0bad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\login.tpl',
      1 => 1606863121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc7dc3e71ab42_32820457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
   
    <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>  
    <?php }?>
    

    <form action="verifyAdmin" method="post" style="margin-top: 24px;">
        <div class="form-group">
        <label for="user">Email</label>
        <input class="form-control" id="user" name="input_email" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="input_pass" required>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     
      <?php }
}
