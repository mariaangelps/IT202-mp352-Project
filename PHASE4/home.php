<?php 
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
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
            background-size: cover; 
            background-position: center; 
            margin-bottom: 0;
            font-family: 'Courier New', Courier, monospace;
        }
        main {
            padding-left: 25px; 
        }
        
    </style>
</head>
<body>
    <main>
        <?php include('menu.php');
              include('welcome.php'); ?> 
   
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
