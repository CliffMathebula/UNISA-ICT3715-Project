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
                <h2 class="text-center">Reference Details</h2>
                
                <a href="view_references.php" class="btn btn-warning btn-block"> View all Reference Details</a>
                <?php
                include('action_page.php');

                $ref = $_POST['reference_id'];
                $desc = $_POST['description'];


                if (isset($_POST['submit'])) {
                    Action::insert_reference($ref, $desc);
                }

                ?>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                    <div class="form-group">
                        <label class="form-label">Reference ID</label>
                        <input type="number" class="form-control" placeholder="Reference ID" name="reference_id" required />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" required>
                        </textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-success btn-block">Save</button>
                </form>
            </div>
        </div>
        <br>

    </div>

</body>

</html>