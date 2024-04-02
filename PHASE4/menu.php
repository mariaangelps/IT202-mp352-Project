<html>
    <head> 
        <title> Login/Logout</title>    
    </head>
    <body> 
        <?php 
            session_start();
            if(isset($_SESSION['valid_credentials'])){
                ?>
                <p>
                    <a href="login.php">Login</a>
                </p>
                <?php } else{?>
                    <p>
                        <a href="logout.php">Logout</a>
                    </p>
                        <?php } ?>
    </body>
</html>