
<?php
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
session_start();
$_SESSION = [];  // Clear all session data from memory
session_destroy();     // Clean up the session ID
$login_message = 'You have been logged out.';
include('login.php');
?>