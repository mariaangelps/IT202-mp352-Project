<html>
<head>
    <title>Login/Logout</title>
    <style>
        body {
            margin: 0;
            padding: 10px 0 0 25px; /* Adding top padding */
            background-color: #F3CBCC;
            background-size: 100%;
            background-repeat: no-repeat;
            margin-bottom: 0;
        }

        nav {
            float: right; /* Aligning navigation to the right */
        }

        nav a {
            margin-right: 10px; /* Adding some spacing between links */
        }
    </style>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['valid_credentials'])) { ?>
        <header>
            <h3>
                <nav>
                <a href="login.php">login</a> ||
                <a href="create.php">Our Products</a> ||
                <a href="shipping_form.php">Delivery</a> 
                </nav>
            </h3>
        </header>
    <?php } else { ?>
        <p>
            <a href="logout.php">logout</a> ||
            <a href="create.php">Our Products</a> ||
                <a href="shipping_form.php">Delivery</a> 
        </p>
    <?php } 
     include ('footer.php');?>
    
</body>
</html>