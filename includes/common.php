<?php

$connect = mysqli_connect("localhost","root","","lifestyle_store");
    if(!isset($_SESSION['email'])){
        session_start();
    }

?>