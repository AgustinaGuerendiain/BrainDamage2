<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 02:25:30
  from 'C:\xampp\htdocs\WEB2\BraianDamage2\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc83e8a4a90c0_74940570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73afb595dea47f789b1a7b63145669a7d145cb3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\BraianDamage2\\templates\\navbar.tpl',
      1 => 1606958716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc83e8a4a90c0_74940570 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../BraianDamage2">Cervezas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../BraianDamage2/categorias">Categorías</a>
        </li>
        <?php if ((isset($_SESSION['EMAIL']))) {?>
        
            <?php if ($_SESSION['ADMIN'] == 1) {?>
                <li class="nav-item">
                <a class="nav-link" href="../BraianDamage2/administracion">Administración</a>
            </li>
            <?php }?>
            
            <li class="nav-item">
                <button type="button" class="btn btn-outline-secondary class=btn btn-secondary btn-sm"> <a class="nav-link" href="../BraianDamage2/logout">Cerrar Sesión</a> </button>
            </li>
            
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="../BraianDamage2/login">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../BraianDamage2/registracion">Registración</a>
            </li>
        <?php }?>

    </ul>
</nav>

<?php }
}
