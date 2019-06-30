<?php

class Database{
    public static $connection = null;

    public function __construct()
    {
        if (self::$connection){
            return self::$connection;
        }
        $this->connect();
    }

    public function connect(){
        $severName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "ajax_sql";

        self::$connection = new mysqli($severName, $username, $password, $dbName);

        if (self::$connection->connect_error){
            die("Khong the ket noi den CSDL");
        }
    }
    public function disconnect(){
        if (self::$connection){
            self::$connection->close();
        }
    }
}