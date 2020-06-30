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
                <h2 class="text-center">Invoice Items</h2>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-group">
                    <label class="text-white">Item Price</label>
                        <input type="text" class="form-control" placeholder="Item Price" name="item_price" required/>
                    </div>
                    <div class="form-group">
                    <label class="text-white">Item Quantity</label>
                        <input type="number" class="form-control" placeholder="Item Quantity" name="item_quantity" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Supplement ID</label>
                        <input type="text" class="form-control" placeholder="Supplement ID" name="supplement_id" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Invoice Number</label>
                        <input type="text" class="form-control" placeholder="Invoice NO" name="invoice_no" required/>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>

</html>