<?php
/*Maria Angel Palacios
    04/16/2024
    IT202-006 -> Phase 5 Project 
    mp352@njit.edu 
*/
require_once('database_njit.php');

session_start();
require_once('managers.php');
$db = getDB();
include('menu.php');
include('welcome.php');


// Check if the session has been started
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
    // Set an error message indicating the user needs to be logged in
    $error_message = "You must be logged in to access this page.";
}

// Redirect to login if the user is not logged in 
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
    header('Location: login.php');
    exit; 
}

$product_price = isset($_GET['product_price']) ? $_GET['product_price'] : '';
$product_name = isset($_GET['product_name']) ? $_GET'product_name'] : '';
$product_code = isset($_GET['product_code']) ? $_GET['product_code'] : '';
$product_img= isset($_GET['product_img']) ?$_GET['product_img'] : '';
?> 