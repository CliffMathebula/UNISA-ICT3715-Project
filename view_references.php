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

<body>

    <div class="container">
        <h2 class="text-center text-info mt-4"><small>Reference Details</small></h2>
        <div class="card bg-dark">
            <div class="card-body text-center">
                <a href="reference.php" class="btn btn-info btn-sm">Reference Data</a>
                <a href="clientinfo.php" class="btn btn-info btn-sm">Client Data</a>
                <a href="InvoiceInfo.php" class="btn btn-info btn-sm">Invoice Data</a>
                <a href="invoice_items.php" class="btn btn-info btn-sm">Invoice Items</a>
                <a href="supplements.php" class="btn btn-info btn-sm">Supplements Data</a>
                <a href="supplier.php" class="btn btn-info btn-sm">Supplier Data</a>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Reference ID</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
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

            $sql = "SELECT Reference_ID, Description FROM tblReference";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td scope="row"><?php echo $row["Reference_ID"]; ?></td>
                        <td><?php echo $row["Description"]; ?></td>
                        <td>
                        <a href="insert.php" class="btn btn-success btn-sm"><small>Insert</small></a>    
                        <a href="#" class="btn btn-warning btn-sm"><small>Edit</small></a>
                        <a href="#" class="btn btn-danger btn-sm"><small>Delete</small></a>
                        </td>
                    </tr>
            <?php
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

</body>

</html>