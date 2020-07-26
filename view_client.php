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
        <h2 class="text-center text-info mt-4"><small>Clients Details</small></h2>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Client ID</th>
                <th scope="col">Client Name</th>
                <th scope="col">Client Surname</th>
                <th scope="col">Address</th>
                <th scope="col">Code</th>
                <th scope="col">Client Home Telephone</th>
                <th scope="col">Client Work Telephone</th>
                <th scope="col">Client Email</th>
                <th scope="col">Client Reference ID</th>
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

            $sql = "SELECT * FROM tblClientInfo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td scope="row"><?php echo $row["Client_id"]; ?></td>
                        <td><?php echo $row["C_name"]; ?></td>
                        <td><?php echo $row["C_surname"]; ?></td>
                        <td><?php echo $row["Address"]; ?></td>
                        <td><?php echo $row["Code"]; ?></td>
                        <td><?php echo $row["C_Tel_H"]; ?></td>
                        <td><?php echo $row["C__Tel_W"]; ?></td>
                        <td><?php echo $row["C_Email"]; ?></td>
                        <td><?php echo $row["Reference_ID"]; ?></td>
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