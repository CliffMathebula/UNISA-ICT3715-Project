<?php

class Action
{

    public static function connection()
    {
        $servername = "localhost";
        $database_name = "ict3715_database";
        $username = "root";
        $password = "1989@Cliff";

        try {
            $conn = new PDO("mysql:host=$servername; dbname=$database_name", $username, $password);

            //Set pdo error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed" . $e->getMessage();
        }
    }
}
