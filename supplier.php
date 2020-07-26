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
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">ALT Health</a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="card bg-info text-white">
            <div class="card-body">
                <h2 class="text-center">Supplier Details</h2>
                <a href="view_supplier.php" class="btn btn-warning btn-block">View all Supplier Details</a>
                
                <?php
                include('action_page.php');

                $supp_id = $_POST['supp_id'];
                $contact_person = $_POST['contact_person'];
                $supp_tel = $_POST['supp_tel'];
                $supp_email = $_POST['email'];
                 $bank_name = $_POST['bank_name'];
                 $bank_branch = $_POST['bank_branch'];
                 $bank_code = $_POST['bank_code'];
                 $account_number = $_POST['account_num'];

                if (isset($_POST['submit'])) {   
                    if(!empty($supp_id || $contact_person || $supp_tel || $supp_email || $bank_name || $bank_branch || $bank_code || $account_number)){

                    Action::insert_supplier($supp_id, $contact_person, $supp_tel, $supp_email, $bank_name, $bank_branch, $bank_code, $account_number);
                    }else{
                        echo "Fill All Required Fields";
                    }
                }
                ?>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                    <div class="form-group">
                        <label class="text-white">Supplier ID </label>
                        <input type="text" class="form-control" placeholder="Supplier ID" name="supp_id" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Contact Person" name="contact_person" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Supplier Telephone </label>
                        <input type="phone" class="form-control" placeholder="Telephone" name="supp_tel" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Supplier Email</label>
                        <input type="email" class="form-control" placeholder="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label class="text-white">Bank Name</label>
                        <input type="text" class="form-control" placeholder="Bank Name" name="bank_name" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Bank Branch Name</label>
                        <input type="text" class="form-control" placeholder="Bank Branch Name" name="bank_branch" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Bank Branch Code</label>
                        <input type="text" class="form-control" placeholder="Bank Branch Code" name="bank_code" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Bank Account Number</label>
                        <input type="number" class="form-control" placeholder="Bank Account Number" name="account_num" required />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>

</html>