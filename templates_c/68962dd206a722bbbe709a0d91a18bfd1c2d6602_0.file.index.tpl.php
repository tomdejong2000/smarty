<?php
/* Smarty version 3.1.32, created on 2018-06-22 18:04:53
  from 'C:\xampp\htdocs\smarty-3.1.32\tut\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2d1e25eb1ec4_84951329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68962dd206a722bbbe709a0d91a18bfd1c2d6602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-3.1.32\\tut\\template\\index.tpl',
      1 => 1529683491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2d1e25eb1ec4_84951329 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>twitter</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tweets']->value, 'tweet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->value) {
?>
    <h2><?php echo $_smarty_tpl->tpl_vars['tweet']->value['titel'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['tweet']->value['tekst'];?>
</p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>
</html><?php }
}
