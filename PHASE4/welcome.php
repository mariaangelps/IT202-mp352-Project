<?php
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
// Start the session
session_start();

// Check if manager is logged in
if (isset($_SESSION['is_valid_admin']) && $_SESSION['is_valid_admin'] == true) {
    // Get manager details
    $manager_details = managers_credentials($_SESSION['emailAddress']);
    // Display welcome message
    echo "<h3>Welcome, " . $manager_details['firstName'] . " " . $manager_details['lastName'] . " (" . $manager_details['emailAddress'] . ")!</h3>";
}
?>
