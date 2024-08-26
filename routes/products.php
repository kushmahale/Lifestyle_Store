<?php

    include '../includes/common.php';
    // if(isset($_SESSION['email'])){
    //     header("location:./routes/products.php");
    // }

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Home | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../includes/links.php" ; ?>
    </head>
    <body>
        
        <?php   include '../includes/header.php' ; 
                include '../api/check_if_added.php';
                $user_id = $_SESSION['user_id'];
                $email = $_SESSION['email'];
        ?>
        
        
        <div class="container">
            <div class="jumbotron" style="margin-top: 70px">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                     have all in one place.
                </p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/5.jpg" alt=""/>
                        <div class="caption">
                            <h2>Canon EOS</h2>
                            <p>Price: Rs. 36,000.00</p>
                            <?php if(check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/2.jpg" alt=""/>
                        <div class="caption">
                            <h2>Sony DSLR#25</h2>
                            <p>Price: Rs. 40,000.00</p>
                            <?php if(check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/3.jpg" alt=""/>
                        <div class="caption">
                            <h2>Sony DSLR#30</h2>
                            <p>Price: Rs. 50,000.00</p>
                            <?php if(check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/4.jpg" alt=""/>
                        <div class="caption">
                            <h2>Olympus DSLR</h2>
                            <p>Prise: Rs. 80,000.00</p>
                            <?php if(check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/10.jpg" alt=""/>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13,000.00</p>
                            <?php if(check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/9.jpg" alt=""/>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3,000.00</p>
                            <?php if(check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/11.jpg" alt=""/>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8,000.00</p>
                            <?php if(check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/12.jpg" alt=""/>
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs. 18,000.00</p>
                            <?php if(check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="row text-center" style="margin-bottom: 70px;">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/8.jpg" alt=""/>
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price: Rs. 800.00</p>
                            <?php if(check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/6.jpg" alt=""/>
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1,000.00</p>
                            <?php if(check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/13.jpg" alt=""/>
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1,500.00</p>
                            <?php if(check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img src="../img/14.jpg" alt=""/>
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1,300.00</p>
                            <?php if(check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else { ?>
                                <a href="../api/cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
        <?php include "../includes/footer.php"; ?>
    </body>
</html>
