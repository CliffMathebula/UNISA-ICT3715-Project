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
                <h2 class="text-center">Client Details</h2>
                <a href="view_client.php" class="btn btn-warning btn-block"> view client Info</a>
                
                <?php
                include('action_page.php');

                if (isset($_POST['submit'])) {

                    $c_id = $_POST['client_id'];
                    $c_name = $_POST['c_name'];
                    $c_surname = $_POST['c_surname'];
                    $address = $_POST['address'];
                    $code = $_POST['code'];
                    $tel_h = $_POST['home_tel'];
                    $tel_w = $_POST['work_tel'];
                    $email = $_POST['email'];
                    $ref_id = $_POST['ref_id'];
                    
                    if(!empty($c_id || $c_name || $c_surname || $address || $code || $tel_h || $tel_w || $email || $ref_id)){

                    Action::insert_clientinfo($c_id, $c_name, $c_surname, $address, $code, $tel_h, $tel_w, $email, $ref_id);
                    }else{
                        echo "Fill All Required Fields";
                    }
                }

                ?>

            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
                    <div class="form-group">
                        <label class="text-info">Client Id</label>
                        <input type="number" class="form-control" placeholder="Client ID" name="client_id" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Client Name</label>
                        <input type="text" class="form-control" placeholder="Client name" name="c_name" required />
                    </div>

                    <div class="form-group">
                        <label class="text-info">Surname Name</label>
                        <input type="text" class="form-control" placeholder="Surname name" name="c_surname" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Address</label>
                        <textarea class="form-control" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Area Code</label>
                        <input type="number" class="form-control" placeholder="Area Code" name="code" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Home Telephone</label>
                        <input type="text" class="form-control" placeholder="Home Telephone" name="home_tel" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Work Telephone</label>
                        <input type="text" class="form-control" placeholder="Work Telephone" name="work_tel">
                    </div>
                    <div class="form-group">
                        <label class="text-info">Email Address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Reference ID</label>
                        <input type="number" class="form-control" placeholder="Reference ID" name="ref_id" required />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>

</html>