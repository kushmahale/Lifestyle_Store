<?php

    include '../includes/common.php' ;

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Signup | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
        
        <?php include '../includes/header.php' ; ?>
        
        <div class="container">
            <div class="row-style">
                <h2>SIGN UP</h2>
                <form action = "../api/signup.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                         <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                         <input type="tel" class="form-control" name="contact" placeholder="Contact" required>
                    </div>
                    <div class="form-group">
                         <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group">
                         <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
        
        <?php include "../includes/footer.php"; ?>
    </body>
</html>
