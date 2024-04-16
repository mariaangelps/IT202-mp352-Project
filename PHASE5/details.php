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
$product_id = $_GET['product_id'];

$query = "SELECT * FROM sportsequipment WHERE sportsequipmentID = :product_id";
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$statement->execute();
$product = $statement->fetch();
$statement->closeCursor();

if (!$product) {
   //ERROR WHEN PRODUCT NOT FOUND
    $error_message = "Product not found.";
}

$color_image_filename = $product['product_image']; // Assuming 'product_image' is the key for color image filename
$bw_image_path = $product['bw_images']; // Assuming 'bw_images' is the key for black and white image path
?>

<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <?php if (isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php else: ?>
        <p>Name: <?php echo $product['sportsequipmentName']; ?></p>
        <p>Code: <?php echo $product['sportsequipmentCode']; ?></p>
        <p>Description: <?php echo $product['description']; ?></p>
        <p>Size: <?php echo $product['Size']; ?></p>
        <p>Price: <?php echo $product['price']; ?></p>
        <p>Date Created: <?php echo $product['dateCreated']; ?></p>
        <ul id="image_rollovers">
            <img src="<?php echo $bw_image_path; ?>" alt="Product Image" width="320" height="212" data-color-image="<?php echo $color_image_filename; ?>">
        </ul>
    <?php endif; ?>
    
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- Your rollover JavaScript -->
    <script src="rollover.js"></script>
</body>
</html>