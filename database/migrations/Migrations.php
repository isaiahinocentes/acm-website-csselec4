<?php

class Migrations extends \Database\Database
{
    public static function run(){

        $conn = Database::getDbConnection();
        create_students_table::create($conn);
    }
}