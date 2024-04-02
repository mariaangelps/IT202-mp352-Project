<?php

require_once('managers.php');

session_start();


$emailAddress = filter_input(INPUT_POST, 'emailAddress');
$password = filter_input(INPUT_POST, 'password');

if (is_valid_admin_login($emailAddress, $password)) {
    $manager_details = managers_credentials($emailAddress);
    if ($manager_details) {
        $_SESSION['is_valid_admin'] = true;
        include('home.php');
        // Output welcome message using manager details
        echo "<br>";
        echo "<h3><br>Welcome, " . $manager_details['firstName'] . " " . $manager_details['lastName'] ."<br>" . $manager_details['emailAddress'] . "!<br> </h3>";
        echo "<h4>You have successfully logged in.</h3>";
        
    } else {
        //credentials not found
        echo "Credentials not found!";
        
        
    }
} else {
    // Handle invalid login attempt
    echo "Invalid credentials.";
    include('login.php');
}

?>
