<?php

class Action
{
  public static  $servername = "localhost";
  public static $username = "root";
  public static $password = "1989@Cliff";
  public static $dbname = "ict3715_database";

  //method to innsert records into tblReference
  public static function insert_reference($ref, $desc)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO tblReference (Reference_ID, Description) VALUES ('$ref', '$desc')";
      // use exec() because no results are returned
      $conn->exec($sql);

      echo "New record created successfully";
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
  }

  //method to innsert records into tblReference
  public static function insert_clientinfo($c_id)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO tblClientInfo (Client_id, C_name, C_surname, Address, Code, C_Tel_W, C_Email, Reference_ID) 
      VALUES ('$c_id', '$c_name', '$c_surname', '$address', '$code', '$tel_home', '$tel_w', '$email', '$ref_id')";
      $conn->prepare($sql)->execute($data);

      echo "New record created successfully";
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
  }
}
