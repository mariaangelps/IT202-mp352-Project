<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
// Receive data from the form
$error_message  ='';
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'product_code', FILTER_SANITIZE_STRING);
$name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
$description = filter_input(INPUT_POST, 'descrip', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);
$size = filter_input(INPUT_POST, 'size');
$product_image = ""; // Initialize product_image variable

// Check if product_image is set in $_POST
if(isset($_POST['product_image'])){
    $product_image = $_POST['product_image'];
}

// Check for duplicates
require_once('database_njit.php');
$checkduplicates = "SELECT COUNT(*) AS duplicate_count FROM sportsequipment WHERE sportsequipmentCode = :product_code";
$statement = $db->prepare($checkduplicates);
$statement->bindValue(':product_code', $code);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
$duplicate_count = (int) $result['duplicate_count'];

if ($duplicate_count > 0  || $price >= 1000) {
    $error_message = "Duplicate product code found. Please use a unique product code. <p><b> Recall that Price cannot be greater than 1000";
} elseif ($category_id == null || $code == null || 
          $name == null || $description == null || $price == null || $size == null ) {
    $error_message = "Invalid product data. Check all fields and try again.";
} else {
    // SQL query for data insertion
    $query = 'INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
    sportsequipmentName, description, Size, price, dateCreated, product_image) 
              VALUES (:category_id, :product_code, :product_name, :descrip, :size, :product_price, NOW(), :product_image)';

    // Prepare and execute the query
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':product_code', $code);
    $statement->bindValue(':product_name', $name);
    $statement->bindValue(':descrip', $description);
    $statement->bindValue(':size', $size);
    $statement->bindValue(':product_price', $price);
    $statement->bindValue(':product_image', $product_image); // Bind product_image
    
    $success = $statement->execute();
    
    if ($success) {
        echo "<p>Data added successfully.</p>";
    } else {
        echo "<p>Failed to add data.</p>";
    }
    
    $statement->closeCursor(); // Closing cursor after execution
}

// Display the error message
if (!empty($error_message)) {
    echo "<p>$error_message</p>";
}
?>

<p><a href="product_page.php">View Product List</a></p>
