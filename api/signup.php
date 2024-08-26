<?php

include '../includes/common.php' ;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$insert = mysqli_query($connect,"insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')");
$user_id = mysqli_insert_id($connect);
$_SESSION['email'] = $email;
$_SESSION['user_id'] = $user_id;
echo
    "<script>
        alert('Account Created. Enjoy Shopping.');
        window.location = '../routes/products.php';
    </script>";

?>