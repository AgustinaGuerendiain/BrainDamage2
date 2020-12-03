<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 23:35:42
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6c53e160372_67481748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ea471295f71e342a4601724a52fb7e7397c1f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2\\templates\\navbar.tpl',
      1 => 1606862134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc6c53e160372_67481748 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../TPE-PARTE 2">Cervezas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../TPE-PARTE 2/categorias">Categorías</a>
        </li>
        <?php if ((isset($_SESSION['EMAIL']))) {?>
        
            <?php if ($_SESSION['ADMIN'] == 1) {?>
                <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2/administracion">Administración</a>
            </li>
            <?php }?>
            
            <li class="nav-item">
                <button type="button" class="btn btn-outline-secondary class=btn btn-secondary btn-sm"> <a class="nav-link" href="../TPE-PARTE 2/logout">Cerrar Sesión</a> </button>
            </li>
            
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2/login">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2/registracion">Registración</a>
            </li>
        <?php }?>

    </ul>
</nav>

<?php }
}
