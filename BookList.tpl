<!doctype html>
<html>
<head>
    <link href="style/index.css" rel="stylesheet" type="text/css"/>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251"/>
    <meta name="description" lang="{$lang}" content=“ {$descr} "/>
    <title> {$title} </title>
</head>
<body>
<h1 class="page-title">BOOK CATALOGUE</h1>
        {foreach $books as $book}
            {if $book->getYear()>2010}
                <p id="books" class="book-bold">{$book->getAuthor()} - {$book->getTitle()} - {$book->getYear()}</p>
            {else}
                <p id="books" class="book">{$book->getAuthor()} - {$book->getTitle()} - {$book->getYear()}</p>
            {/if}
        {/foreach}
</body>
</html>