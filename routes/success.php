<?php

    include '../includes/common.php' ;

?>

<!DOCTYPE html>

<html>
    <head>
       <title>Success | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
    
        <?php 
            include '../includes/header.php' ; 
            $user_id = $_SESSION['user_id'];
            $query = mysqli_query($connect, "SELECT item_id FROM users_items WHERE user_id = '$user_id'") ; 

            while($row = mysqli_fetch_array($query)){
                $item_id = $row["item_id"];
                $query_update = mysqli_query($connect, "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'") ;            
            }
        ?>
        
        <div class="container">
            <div class="jumbotron" style="margin: 200px">
                <p><strong>Your order is confirmed. Thank you for shopping with us.
                    <a href="products.php"> Click here</a> to purchase any other item
                </strong></p>
            </div>
        </div>
        
        <?php include ".s/includes/footer.php"; ?>
    </body>
</html>
