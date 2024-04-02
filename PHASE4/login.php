<?php 
include('menu.php');
if(!isset($login_message)){
    $login_message='You must login to view this page';}

    ?>


<!DOCTYPE html>
<html>
<head>
    <title> MP KICKS STORE </title>
</head>
<body> 
    <main>
    <h3> Log in </h3>
    <form action="authenticate.php" method="post">
        <label> Email : </label>
        <input type = "text" name="emailAddress" value="">
        <br>
        <label> Password </label>
        <input type="password" name="password" value="">
        <br>
        <label> First Name </label>
        <input type="text" name="firstName" value="">
        <br>
        <label> Last Name </label>
        <input type="text" name="lastName" value="">
        <br>
        <input type="submit" value="Login">
    </form>
    <p> <?php echo $login_message;?></p>
    </main>
</body>
</html>