<?php
session_start();
require_once('managers.php');
include('header.php'); // Include header file

$emailAddress = filter_input(INPUT_POST, 'emailAddress');
$password = filter_input(INPUT_POST, 'password');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');

if(!isset($_SESSION['valid_credentials'])){
    echo "You are not logged in";
}
else{
    echo "You arte logged in";
}






//check and validate the managers credentials
/*if(addsportsequipmentmanager($emailAddress,$password,$firstName,$lastName)){
    //check for a valid login
    //create the session
    $_SESSION['valid_credentials']=true;
    echo"<p> You have sucessfully logged in.</p>";
}
else{
    $login_error = "Invalid credentials";
}*/
?>