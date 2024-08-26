<?php

include '../includes/common.php' ;

$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$newpasswordre = $_POST['newpasswordre'];
$email = $_SESSION['email'];

$select_querry = mysqli_query($connect,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$rows = mysqli_num_rows($select_querry);


if ($rows > 0 && $newpassword==$newpasswordre){
    $update_query = mysqli_query($connect,"UPDATE users SET password = '$newpassword' WHERE email = '$email'");
    echo "<script>
            alert('Password Changed') ;
            window.location = '../routes/products.php';
        </script>";
}else{
    echo
        "<script>
            alert('Invalid Credentials');
            window.location = '../routes/settings.php';
        </script>";
}


?>