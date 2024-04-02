<html>
    <head> 
        <title> Login/Logout</title>    
    </head>
    <body> 
        <?php 
            session_start();
            if(isset($_SESSION['valid_credentials'])){
                ?>
                <header>
                <h3>
                    <nav>
                        <a href="login.php">Login</a>
        
                    </nav>
                </h3>
                </header>
                <?php } else{?>
                    <p>
                        <a href="logout.php">Logout</a>||
                        <a href="create.php">  Our Products  </a>  ||
                        <a href = "shipping_form.php"> Delivery </a> 
                    </p>
                        <?php } ?>
    </body>
</html>

<style>
    body {
            margin: 0;
            padding: 20px 0 0 25px; /* Adding top padding */
            background-image: url('imagesPh3/actualizadahome.jpg.png');
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

<html>
<head>
    <title>MP KICKS</title>
</head>
<body>
<main>

</main>
<?php include ('footer.php');?>
    
</body>

</html>
