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

      echo "<div class='alert alert-success' role='alert'>
      Records inserted successfully!
    </div>";
    
  } catch (PDOException $e) {
    echo "<div class='alert alert-danger' role='alert'>
    Duplicates entries not allowed!
  </div>";
  }

    $conn = null;
  }

  //method to innsert records into tblReference
  public static function insert_clientinfo($c_id, $c_name, $c_surname, $address, $code, $tel_h, $tel_w, $email, $ref_id)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM tblReference WHERE Reference_ID=Reference_ID');
      $stmt->bindParam(1, $ref_id, PDO::PARAM_INT);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$row) {
        echo ('nothing found');
      } else {
        $sql = "INSERT INTO `tblClientInfo` (`Client_id`, `C_name`, `C_surname`, `Address`, `Code`, `C_Tel_H`, `C__Tel_W`, `C_Email`, `Reference_ID`) 
      VALUES ('$c_id', '$c_name', '$c_surname', '$address', '$code', '$tel_h', '$tel_w', '$email', '$ref_id')";
        $conn->exec($sql);

        echo "<div class='alert alert-success' role='alert'>
        Records inserted successfully!
      </div>";
      }
    } catch (PDOException $e) {
      echo "<div class='alert alert-danger' role='alert'>
      Duplicates entries not allowed!
    </div>";
    }

    $conn = null;
  }

  //method to innsert records into tblInv_Info
  public static function insert_invoice_info($inv_num, $inv_date, $inv_paid, $date, $comments, $client_id)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM tblClientInfo WHERE Client_id=Client_id');
      $stmt->bindParam(1, $ref_id, PDO::PARAM_INT);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$row) {
        echo ('nothing found');
      } else {
        $sql = "INSERT INTO `tblInv_Info` (`Inv_Num`, `Inv_Date`, `Inv_Paid`, `Inv_Paid_Date`, `Comments`, `Client_id`) 
      VALUES ('$inv_num', '$inv_date', '$inv_paid', '$date', '$comments', '$client_id')";
        $conn->exec($sql);
        echo "<div class='alert alert-success' role='alert'>
        Records inserted successfully!
      </div>";
      }
    } catch (PDOException $e) {
      echo "<div class='alert alert-danger' role='alert'>
      Duplicates entries not allowed!
    </div>";
    }
    $conn = null;
  }


  //method to innsert records into tblSupplier
  public static function insert_supplier($supp_id, $contact_person, $supp_tel, $supp_email, $bank_name, $bank_branch, $bank_code, $account_number)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO tblSupplier_info (Supplier_Id, Contact_Person, Supplier_Tel, Supplier_Email, Bank_Name, Bank_Branch_Name, Bank_branch_code, Account_number) 
        VALUES ('$supp_id', '$contact_person', '$supp_tel', '$supp_email', '$bank_name', '$bank_branch', '$bank_code', '$account_number')";
      // use exec() because no results are returned
      $conn->exec($sql);

      echo "<div class='alert alert-success' role='alert'>
      Records inserted successfully!
    </div>";
    }
   catch (PDOException $e) {
    echo "<div class='alert alert-danger' role='alert'>
    Duplicates entries not allowed!
  </div>";
  }
    $conn = null;
  }

  //method to innsert records into tblSupplements
  public static function insert_suplements($sup_id, $sup_desc, $cost_excl, $cost_incl, $min_level, $tock_level, $nap_code, $supplier_id)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM tblSupplier_info WHERE Supplier_Id=Supplier_Id');
      $stmt->bindParam(1, $ref_id, PDO::PARAM_INT);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$row) {
        echo ('nothing found');
      } else {
        $sql = "INSERT INTO `tblSupplements` (`Supplement_id`, `Supplement_Description`, `Cost_excl`, `Cost_incl`, `Min_level`, `Current_stock_levels`, `Nappi_code`, `Supplier_Id`) 
      VALUES ('$sup_id', '$sup_desc', '$cost_excl', '$cost_incl', '$min_level', '$tock_level', '$nap_code', '$supplier_id')";
        $conn->exec($sql);
        echo "<div class='alert alert-success' role='alert'>
        Records inserted successfully!
      </div>";
      }
    } catch (PDOException $e) {
      echo "<div class='alert alert-danger' role='alert'>
      Duplicates entries not allowed!
    </div>";
    }

    $conn = null;
  }

  //method to innsert records into tblInv_items
  public static function insert_invoice_items($item_price, $items_quantity, $supplement_id, $invoice_num)
  {
    $host = self::$servername;
    $db = self::$dbname;
    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", self::$username, Action::$password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //selects records from supplements and invoices and check if the foreign keys exists.
      $stmt = $conn->prepare("SELECT s.Supplement_id, i.Inv_Num
      FROM tblSupplements AS s, tblInv_Info AS i
      WHERE s.Supplement_id=s.Supplement_id AND i.Inv_Num=i.Inv_Num");

      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if (!$rows) {
        echo ('Supplement ID or Invoice Number not found');
      } else {
        $sql = "INSERT INTO `tblInv_items` (`Item_Price`, `Item_Quantity`, `Supplement_id`, `Inv_Num`) 
      VALUES ($item_price, $items_quantity, $supplement_id, $invoice_num)";
        $conn->exec($sql);
        echo "<div class='alert alert-success' role='alert'>
        Records inserted successfully!
      </div>";
      }
    } catch (PDOException $e) {
      echo "<div class='alert alert-danger' role='alert'>
      Duplicates entries not allowed!
    </div>";
    }
    $conn = null;
  }
}
