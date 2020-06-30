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
            </div>
        </div>
        <div class="card bg-dark text-light">
            <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-group">
                    <label class="text-info">Client Id</label>
                        <input type="number" class="form-control" placeholder="Client ID" name="client_id" required/>
                    </div>
                    <div class="form-group">
                    <label class="text-info">Client Name</label>
                        <input type="text" class="form-control" placeholder="Client name" name="client_name" required/>
                    </div>
                    <div class="form-group">
                        <label class="text-info">Address</label>
                        <textarea class="form-control" name="client_name"></textarea>
                    </div>
                    <div class="form-group">
                    <label class="text-info">Area Code</label>
                        <input type="number" class="form-control" placeholder="Area Code" name="Code" required/>
                    </div>
                    <div class="form-group">
                    <label class="text-info">Home Telephone</label>
                        <input type="text" class="form-control" placeholder="Home Telephone" name="home_tel" required/>
                    </div>
                    <div class="form-group">
                    <label class="text-info">Work Telephone</label>
                        <input type="text" class="form-control" placeholder="Work Telephone" name="work_tel">
                    </div>
                    <div class="form-group">
                    <label class="text-info">Email Address</label>
                        <input type="email" class="form-control" placeholder="Email" name="Email" required />
                    </div>
                    <div class="form-group">
                    <label class="text-info">Reference ID</label>
                        <input type="number" class="form-control" placeholder="Reference ID" name="ref_id" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</body>

</html>