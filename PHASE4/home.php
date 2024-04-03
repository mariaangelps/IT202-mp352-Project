<?php 

require_once('database_njit.php');
session_start();
require_once('managers.php');
$db = getDB();


?>
<html>
<head>
    <title>MP KICKS</title>
    <style>
        body {
            margin: 0;
            padding: 0; 
            background-image: url('imagesPh3/actualizadahome.jpg.png');
            background-color: #F3CBCC;
            background-size: cover; /* Ensures the background image covers the entire screen */
            background-position: center; /* Centers the background image */
            margin-bottom: 0;
            font-family: 'Courier New', Courier, monospace;
        }
        main {
            padding-left: 25px; /* Moved padding from body to main if needed */
        }
        /* Additional styling can go here */
    </style>
</head>
<body>
    <main>
        <?php include('menu.php');
              include('welcome.php'); ?> 
        <!-- Your main content goes here -->
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
