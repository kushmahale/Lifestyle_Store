<?php

    include '../includes/common.php' ;

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Settings | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
    
        <?php include '../includes/header.php' ; ?>
        
        <div class="container">
            <div class="row-style">
                <h2>Change Password</h2>
                <form action = "../api/settings.php" method = "POSt">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpasswordre" placeholder="Re-type New Password">
                    </div>
                    <button class="btn btn-primary" type = "submit">Change</button>
                </form>
            </div>
        </div>
        
        <?php include "../includes/footer.php"; ?>
    </body>
</html>
