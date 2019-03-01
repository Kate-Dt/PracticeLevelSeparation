<?php
require 'smarty-3.1.33/libs/Smarty.class.php';
require_once('BookDAO.php');
require_once('Book.php');

BookDAO::eagerInit();
$books=BookDAO::getBooks();

$smarty=new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
$lang="ua";
$title="Книги";
$descr="Список книг";
$smarty->assign("lang",$lang);
$smarty->assign("title", $title);
$smarty->assign("descr",$descr);
$smarty->assign("start", 0);
$smarty->assign("max", sizeof($books));
$smarty->assign("books", $books);
$smarty->display("BookList.tpl");
?>
