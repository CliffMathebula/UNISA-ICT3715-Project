<!DOCTYPE html>
<html lang="en">

<head>
  <title>ALT Health Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  .price {
    color: grey;
    font-size: 22px;
  }

  .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  .card button:hover {
    opacity: 0.7;
  }
</style>

<body>

  <div class="bg-dark">
    <div class="card-body text-center">
      <a href="reference.php" class="btn btn-info btn-sm">Reference Data</a>
      <a href="clientinfo.php" class="btn btn-info btn-sm">Client Data</a>
      <a href="InvoiceInfo.php" class="btn btn-info btn-sm">Invoice Data</a>
      <a href="invoice_items.php" class="btn btn-info btn-sm">Invoice Items</a>
      <a href="supplements.php" class="btn btn-info btn-sm">Supplements Data</a>
      <a href="supplier.php" class="btn btn-info btn-sm">Supplier Data</a>
    </div>
  </div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "1989@Cliff";
  $dbname = "ict3715_database";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM tblSupplements";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
  ?>

      <div class="card mt-4">
        <h1>Supplement Details </h1>
        <p class="price">Price excludig vat <?php echo "R" . $row["Cost_excl"]; ?></p>

        <p class="price"> Price including vat <?php echo "R".$row["Cost_incl"]; ?> </p>
        <p><?php echo $row["Supplement_Description"]; ?></p>
        <p><button>Add to Cart</button></p>
      </div>
  <?php
    }
    echo "</table>";
  } else {
    echo "<p class='text-danger'>Stock not available</p>";
  }
  $conn->close();
  ?>

</body>

</html>