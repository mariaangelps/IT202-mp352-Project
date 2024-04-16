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
$product_id = $_GET['product_id'];

$query = "SELECT * FROM sportsequipment WHERE sportsequipmentID = :product_id";
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$statement->execute();
$product = $statement->fetch();
$statement->closeCursor();
?>

<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <p>Name: <?php echo $product['sportsequipmentName']; ?></p>
    <p>Code: <?php echo $product['sportsequipmentCode']; ?></p>
    <p>Description: <?php echo $product['description']; ?></p>
    <p>Size: <?php echo $product['Size']; ?></p>
    <p>Price: <?php echo $product['price']; ?></p>
    <p>Date Created: <?php echo $product['dateCreated']; ?></p>
    <img src="<?php echo $product['product_image']; ?>" alt="Product Image">
</body>
</html>
