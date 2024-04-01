
<!--Maria Angel Palacios
    03/21/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
 -->
 <html>
    <head> 
        <title>Login/Logout</title>
    </head>
        <header>
        <?php
        session_start();
        //checks if we are logged in, if so, a log out button is created 
        //se lo puede implementar como el header
        //se crea la session de is valid add sports equipment session
        if (isset($_SESSION['valid_credentials'])) { 
        ?>
            <h3>
                <nav>
                <a href="logout.php">Logout</a>
                <a href="home.php"> Home </a> || 
                <a href="create.php">  Our Products  </a>  ||
                <a href = "shipping_form.php"> Delivery </a> 
            </h3>
                </nav>
                    <?php } else { ?>
                            <h3>
                                <nav>
                                    <a href="login.php">Login</a>||
                                    
                                </nav>
                            </h3>
                    <?php } 
                    
                    

                    ?>
        </header>


<style>
header{
    padding: 0px; 
    text-align: left; 
    margin-top:0;
    font-family: 'Courier New', Courier, monospace;
    font-size: 10px;
}


    

</style>

</html>

