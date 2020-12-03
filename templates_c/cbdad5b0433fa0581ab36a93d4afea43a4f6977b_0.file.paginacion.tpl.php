<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 18:42:54
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\paginacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7d21eeeca10_24509915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdad5b0433fa0581ab36a93d4afea43a4f6977b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\paginacion.tpl',
      1 => 1606930972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7d21eeeca10_24509915 (Smarty_Internal_Template $_smarty_tpl) {
?><nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">

    <li class="page-item "><a class="page-link" href="#" >Previous</a></li>
      

        <li class="page-item"><a class="page-link" href="#">1</a></li>
  <?php
 while ($_smarty_tpl->tpl_vars['foo']->value > 0) {?>
  <?php echo $_smarty_tpl->tpl_vars['foo']->value--;?>

    <?php }?>

    <li class="page-item"><a class="page-link" href="#">Next</a></li>
    
  </ul>
</nav><?php }
}
