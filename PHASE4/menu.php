<?php 
    session_start();
    if(isset($_SESSION['is_valid_admin'])) { ?>
        <header>
            <h3>
                <nav>
                    <a href="home.php">Home</a> ||
                    <a href="logout.php">Logout</a> ||
                    <a href="create.php">Our Products</a> ||
                    <a href="shipping_form.php">Delivery</a> 
                </nav>
            </h3>
        </header>
    <?php } else { ?>
    <header>
        <h3>
            <nav>
                <a href="home.php">Home</a> ||
                <a href="login.php">Login</a> ||
                <a href="create.php">Our Products</a> ||
                <a href="shipping_form.php">Delivery</a> 
            </nav>
        </h3>
    </header>
    <?php } 
     include ('footer.php');?>
<html>
<head>
    <title>Login/Logout</title>
</head>
</html>
