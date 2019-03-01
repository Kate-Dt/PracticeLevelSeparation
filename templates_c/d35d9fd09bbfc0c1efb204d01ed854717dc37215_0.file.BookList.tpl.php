<?php
/* Smarty version 3.1.33, created on 2019-03-01 19:38:36
  from 'C:\wamp64\www\Practice2\BookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c798a3c546475_09479913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd35d9fd09bbfc0c1efb204d01ed854717dc37215' => 
    array (
      0 => 'C:\\wamp64\\www\\Practice2\\BookList.tpl',
      1 => 1551469114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c798a3c546475_09479913 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <link href="style/index.css" rel="stylesheet" type="text/css"/>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251"/>
    <meta name="description" lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" content=“ <?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
 "/>
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
</head>
<body>
<h1 class="page-title">BOOK CATALOGUE</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['book']->value->getYear() > 2010) {?>
                <p id="books" class="book-bold"><?php echo $_smarty_tpl->tpl_vars['book']->value->getAuthor();?>
 - <?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
 - <?php echo $_smarty_tpl->tpl_vars['book']->value->getYear();?>
</p>
            <?php } else { ?>
                <p id="books" class="book"><?php echo $_smarty_tpl->tpl_vars['book']->value->getAuthor();?>
 - <?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
 - <?php echo $_smarty_tpl->tpl_vars['book']->value->getYear();?>
</p>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
