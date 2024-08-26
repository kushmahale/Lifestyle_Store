<?php

    include '../includes/common.php' ;

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Cart | Lifestyle Store</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
        
    <?php include '../includes/header.php' ; ?>
        
        <div class="container">
            <div class="table-responsive" style="margin-left: 300px; margin-right: 300px; margin-top: 80px;">
                <table class="table table-striped table-bordered">
                    <?php 
                    $sum = 0 ;
                    $user_id = $_SESSION['user_id'] ;
                    $query = mysqli_query($connect,"SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'");
                    if(mysqli_num_rows($query) >= 1){
                    ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($query)) {
                            $sum+= $row["Price"];                                    
                            $id = $row["id"];
                            echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='../api/cart_remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                        }
                        
                        echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                    ?>  

                    <?php } else { ?>
                        <div>
                            <center>
                                <h2> Add items to the cart first! </h2>
                            </center>
                        </div>
                    <?php } ?>
                </table>
            </div>
        </div>
        
        <?php include "../includes/footer.php"; ?>
    </body>
</html>
