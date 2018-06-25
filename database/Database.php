<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 5/25/2018
 * Time: 8:46 AM
 */

namespace Database;


class Database
{

    public static $HOST = "localhost";
    public static $USER = "root";
    public static $DATABASE_NAME = "apm-mis";
    public static $USERNAME = "root";
    public static $PASSWORD = "";

    public static function getDbConnection(){
        $conn = new \mysqli(Database::$HOST, Database::$USERNAME, Database::$PASSWORD, Database::$DATABASE_NAME);
        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        } else {
            return $conn;
        }
    }
}