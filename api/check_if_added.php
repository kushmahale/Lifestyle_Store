<?php

    function check_if_added_to_cart($item_id){
        include '../includes/common.php' ;

        $user_id = $_SESSION['user_id'];

        $query = mysqli_query($connect,"SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'");

        if(mysqli_num_rows($query) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }

    }
?>