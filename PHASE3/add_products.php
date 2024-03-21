<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'product_code');
$name = filter_input(INPUT_POST, 'product_name');
$description = filter_input(INPUT_POST, 'descrip');
$price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);
$size = filter_input(INPUT_POST,'size');

// Validate inputs
if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
        $name == NULL || $price == NULL || $price == FALSE)||$size==NULL || $size == f {
    $error = "Invalid product data. Check all fields and try again.";
    echo "$error <br>";
    // include('error.php');
} else {
    require_once('database_njit.php');

    $query = 'INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
              sportsequipmentName, description,price) 
              VALUES (:category_id, :product_code, :product_name, :descrip, :product_price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':product_code', $code);
    $statement->bindValue(':product_name', $name);
    $statement->bindValue(':descrip', $description);
    $statement->bindValue(':product_price', $price);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>Your insert statement status is $success</p>";

}
?>

<p><a href="product_page.php">View Product List</a></p>
