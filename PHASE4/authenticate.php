<?php 
require_once('managers.php');
require_once('database_njit.php');
session_start();

$emailAddress = filter_input(INPUT_POST, 'emailAddress');
$password = filter_input(INPUT_POST, 'password');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');

echo "<p>$emailAddress</p>";

if (is_valid_admin_login($emailAddress, $password)) {
  echo "si funciona";
  
    $manager_details = managers_credentials($emailAddress);
    $_SESSION['valid_credentials'] = true;
    $_SESSION['managers_credentials'] = $manager_details;
    echo "Welcome, " . managers_credentials($emailAddress)['firstName'] . "!<br>";
    echo "<p>You have successfully logged in.</p>";
} else {
    if ($emailAddress == NULL && $password == NULL) {
        $login_message = 'You must login to view this page.';
    } else {
        $login_message = 'Invalid credentials.';
    }
    
    include('login.php');
}
?>
