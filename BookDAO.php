<?php
require_once('DBHelper.php');

class BookDAO
{
    static private $books;
    static private $DBHelper;

    static public function eagerInit(){
        $pdo = DBHelper::connect();
        $sqlQuery = "select * from book";
        foreach ($pdo->query($sqlQuery) as $row){
            $id = $row["id"];
            $author = $row["author"];
            $title = $row["title"];
            $publisher = $row["publisher"];
            $year = $row["year"];
            self::$books[] = new Book($id, $author, $title,
                $publisher, $year);
        }
    }

    static public function getBooks(){
        return self::$books;
    }
}

