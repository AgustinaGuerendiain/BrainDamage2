<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:26:27
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83ec32d26e6_24874808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9373ca53c84d258b34caeefe74c6a20aee26679e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\login.tpl',
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
function content_5fc83ec32d26e6_24874808 (Smarty_Internal_Template $_smarty_tpl) {
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
