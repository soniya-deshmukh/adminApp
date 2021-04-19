<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Login Account</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
</head>
<body>
    <nav class="navbar navbar-default navbar-expand-md navbar-dark  ">
        <a class="navbar-brand" href="#">Admin straps</a>
    </nav>
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 text-center">
                    <h1>
                     Admin <small>Login Account</small></h1>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <?php displayMessage();?>
                            <form action='login.php' class="login" method="POST">
                                <div class="formgroup">
                                    <label for="user">Email</label>
                                    <input type="email " name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="formgroup">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="formgroup">
                                    <input type="submit" id ="submit" name="submit" value="Login" class="btn btn-primary mt-2 align-middle">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- ROW FIRST -->
        </div>
    </section>
<?php include 'inc/footer.php';?>
