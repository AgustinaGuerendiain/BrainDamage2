<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 05:08:02
  from 'C:\xampp\htdocs\WEB2\TPE-PARTE 2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1cd228b1af1_91729505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666546faecdfec99b417e9a30dead273d6e7292f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-PARTE 2\\templates\\header.tpl',
      1 => 1606536468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5fc1cd228b1af1_91729505 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
            <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <title> <?php echo $_smarty_tpl->tpl_vars['titulo_smarty']->value;?>
 </title>
                <base href="<?php echo BASE_URL;?>
">
                <link rel="icon" href="img/icono.png">
            </head>
            <body>
                <h1> <?php echo $_smarty_tpl->tpl_vars['titulo_smarty']->value;?>
 </h1>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
