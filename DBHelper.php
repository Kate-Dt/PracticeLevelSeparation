<?php

class DBHelper
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "books";
    private static $conn = null;

    static function connect(){
        self::$conn =  new PDO( "mysql:host=".self::$servername.";charset=utf8;"."dbname=".self::$dbname, self::$username, self::$password);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conn;}

    public static function disconnect(){
        self::$conn = null;
    }
}
?>