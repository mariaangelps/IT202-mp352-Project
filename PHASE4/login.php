<?php 
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
include('menu.php');
if(!isset($login_message)){
    $login_message='You must login to view this page';}

    ?>

<html>
<head>
    <title> MP KICKS STORE </title>
</head>
<body> 
    <main>
    <h3> Log in </h3>
    <form action="authenticate.php" method="post">
        <h3> Please Enter your Manager's credentials </h3>
        
        <input type = "text" name="emailAddress" placeholder= " Email" class="input-field" value="">
        <br> 
       
        <input type="password" name="password" placeholder="Password" class="input-field" value="">
        <br>
        
        <br>
        <input type="submit" value="Login">
    </form>
    <p> <?php echo $login_message;?></p>
    </main>
</body>
<style>
    body {
            background-image: url('phase4img/flat-lay-arrangement-with-gadgets-copy-space.jpg');
            background-size: cover;
            background-position: center;
            margin: 10;
            padding: 10;
            font-family: 'Courier New', Courier, monospace;
            font-size: 25px;
        } 
        .input-field {
            width: 30%;
            padding: 8px;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 12px;
            }
</style>
</html>