<?php 

include '../includes/common.php' ;

$email = $_POST['email'];
$password = $_POST['password'];

$login_querry = mysqli_query($connect,"SELECT id , email from users WHERE email = '$email' AND password = '$password'") ;

$total_rows_fetched = mysqli_num_rows($login_querry);
    if($total_rows_fetched!=0){
        $row = mysqli_fetch_array($login_querry);
        $_SESSION['email'] = $email;
        $_SESSION['user_id']=$row['id'];
        header("location:../routes/products.php");
    }
    else{
        echo '<script>
                    alert("Invalid Credentials");
                    window.location = "../routes/login.php";
            </script>';
    }


?>