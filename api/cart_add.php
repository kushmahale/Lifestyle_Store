<?php

    include '../includes/common.php' ;

    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET['id'];
        $user_id = $_SESSION['user_id'];

        $querry = mysqli_query($connect,"INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')");

        header("location:../routes/products.php");
    }

?>