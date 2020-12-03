<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:18:27
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\registracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83ce38573c2_37524483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697a384cc7df1f29e50b4ec33f8f0fde1a4e3784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\registracion.tpl',
      1 => 1606862971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc83ce38573c2_37524483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
   
    <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>  
    <?php }?>
    

    <form action="insertUsuario" method="post" style="margin-top: 24px;">
        <div class="form-group">
        <label for="user">Email</label>
        <input class="form-control" id="user" name="input_email" aria-describedby="emailHelp" required>
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="input_pass" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     <?php }
}
