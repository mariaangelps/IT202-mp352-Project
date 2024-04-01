<?php
require_once('managers.php');
session_start();
// Retrieve input data from POST request
$emailAddress = filter_input(INPUT_POST, 'emailAddress');
$password = filter_input(INPUT_POST, 'password');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');

if (addsportsequipmentmanager($emailAddress, $password, $firstName, $lastName,$dateCreated)) {
    $_SESSION['valid_credentials'] = true;
    echo "<p>Logged in</p>";

    // Redirect the user to another page
    // Example: header('Location: dashboard.php');
} else {
    if ($emailAddress==NULL&& $password==NULL && $firstName ==NULL&& $lastName==NULL) {
        $login_error = "You must log in to view your products";
    } else {
        $login_error = "Invalid Credentials";
    }
    include('login.php');
}

?>
