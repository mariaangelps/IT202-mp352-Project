<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // Recibe los datos del formulario
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'product_code');
    $name = filter_input(INPUT_POST, 'product_name');
    $description = filter_input(INPUT_POST, 'descrip');
    $price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);


    // Validación de los datos recibidos
    if ($category_id == null || $category_id == false || $code == null || 
        $name == null || $description == null || $size == null || 
        $price == null || $price == false) {
        $error = "Invalid product data. Check all fields and try again.";
        echo "<p>$error</p>";
    } else {
        require_once('database_njit.php');
        // Consulta SQL para la inserción de datos
        $query = 'INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
        sportsequipmentName, description, Size, price, dateCreated) 
                  VALUES (:category_id, :product_code, :product_name, :descrip, :size, :product_price, NOW())';

        // Preparación y ejecución de la consulta
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':product_code', $code);
        $statement->bindValue(':product_name', $name);
        $statement->bindValue(':descrip', $description);
        $statement->bindValue(':size', $size);
        $statement->bindValue(':product_price', $price);
        
        $success = $statement->execute();
        $statement->closeCursor();
        echo "<p>Your insert statement status is $success</p>";
    }
}
?>

<p><a href="product_page.php">View Product List</a></p>
