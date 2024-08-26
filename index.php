<?php
    include './includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:./routes/products.php");
    }
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./routes/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="./routes/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="banner-image">
            <div class="container">
                <center>
                    <div id="banner-content">
                         <h1>We sell lifestyle.</h1>
                         <p>Flat 40% OFF on premium brands</p>
                         <a href="./routes/login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        
        <?php include "./includes/footer.php"; ?>
    </body>
</html>
