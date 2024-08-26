<?php

    include '../includes/common.php' ;

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login | Lifestyle Store</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
        
        <?php include '../includes/header.php' ; ?>
        
        <div class="container">
            <div class="row-style">
                <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <h2>LOGIN</h2>
                </div>
                <div class="panel-body">
                    <p class="panel-warning">Login to make purchase</p>
                    <form action = "../api/login.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required> 
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <button class="btn btn-primary" type = "submit">Login</button>
                    </form>
                </div>
                <div class="panel-footer">Don't have a account?<a href="signup.php" style="text-decoration: none">Register</a> </div> 
                </div>
            </div>
        </div>
        
        <?php include "../includes/footer.php"; ?>
    </body>
</html>
