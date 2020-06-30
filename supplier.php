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
            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label class="text-white">Supplier ID </label>
                        <input type="text" class="form-control" placeholder="Supplier ID" name="supplier_id" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Contact Person" name="contact_person" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Supplier Telephone </label>
                        <input type="phone" class="form-control" placeholder="Telephone" name="telephone" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Price Including Vat</label>
                        <input type="number" class="form-control" placeholder="0.00" name="cost_incl_vat" required />
                    </div>
                    <div class="form-group">
                        <label class="text-white">Minimum Level</label>
                        <input type="number" class="form-control" placeholder="Minimum Level" name="min_level" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Current Stock Level</label>
                        <input type="number" class="form-control" placeholder="Current Stock Level" name="current_stock_level">
                    </div>
                    <div class="form-group">
                        <label class="text-info">Nappi Code</label>
                        <input type="text" class="form-control" placeholder="Nappi Code" name="Nappi_Code" required />
                    </div>
                    <div class="form-group">
                        <label class="text-info">Suplier ID</label>
                        <input type="text" class="form-control" placeholder="Supplier ID" name="supplier_id" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>

</html>