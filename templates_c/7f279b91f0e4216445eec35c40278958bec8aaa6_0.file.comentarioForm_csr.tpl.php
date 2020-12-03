<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:27:08
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\comentarioForm_csr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83eec362b94_08786765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f279b91f0e4216445eec35c40278958bec8aaa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\comentarioForm_csr.tpl',
      1 => 1606863055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc83eec362b94_08786765 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
        <form action="" method="" id="form-comentario" data-iduser="<?php echo $_smarty_tpl->tpl_vars['usuario_smarty']->value->id_usuario;?>
">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Agrega un comentario</label>
                <textarea class="form-control" id="comentario" rows="3" required></textarea >
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Valoración</label>
                <select class="form-control" id="valoracion" required >
                <option value=1>★</option>
                <option value=2>★★</option>
                <option value=3>★★★</option>
                <option value=4>★★★★</option>
                <option value=5>★★★★★</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar comentario</button>

        </form>
    </div><?php }
}
