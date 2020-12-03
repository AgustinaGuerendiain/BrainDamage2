<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 19:26:03
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2 + OPCIONAL FILTRO\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7dc3be12d19_93594650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11c5d2a4273cc8ba5bc70cfdd2e5517197c836f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2 + OPCIONAL FILTRO\\templates\\navbar.tpl',
      1 => 1606933558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7dc3be12d19_93594650 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../TPE-PARTE 2 + OPCIONAL FILTRO">Cervezas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../TPE-PARTE 2 + OPCIONAL FILTRO/categorias">Categorías</a>
        </li>
        <?php if ((isset($_SESSION['EMAIL']))) {?>
        
            <?php if ($_SESSION['ADMIN'] == 1) {?>
                <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2 + OPCIONAL FILTRO/administracion">Administración</a>
            </li>
            <?php }?>
            
            <li class="nav-item">
                <button type="button" class="btn btn-outline-secondary class=btn btn-secondary btn-sm"> <a class="nav-link" href="../TPE-PARTE 2 + OPCIONAL FILTRO/logout">Cerrar Sesión</a> </button>
            </li>
            
        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2 + OPCIONAL FILTRO/login">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../TPE-PARTE 2 + OPCIONAL FILTRO/registracion">Registración</a>
            </li>
        <?php }?>

    </ul>
</nav>

<?php }
}
