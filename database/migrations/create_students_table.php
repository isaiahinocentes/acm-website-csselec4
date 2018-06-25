<?php
/**
 * Created by PhpStorm.
 * User: Isaiah
 * Date: 5/25/2018
 * Time: 12:26 PM
 */

class create_students_table
{
    public static function create(mysqli $conn){
        $sql = "CREATE TABLE Students 
        (   studno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            fname VARCHAR(30) NOT NULL,
            lname VARCHAR(30) NOT NULL,
            mname VARCHAR(50) NOT NULL,
            course VARCHAR(50) NOT NULL
        )";

        if($conn->query($sql) == TRUE){
            echo "Success created Students Table...<br\>";
        } else {
            echo "Error to create Students Table...<br\>";
        }
    }
}