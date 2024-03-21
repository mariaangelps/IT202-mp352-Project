<?php
// Verifica si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'product_code');
    $name = filter_input(INPUT_POST, 'product_name');
    $description = filter_input(INPUT_POST, 'descrip');
    $price = filter_input(INPUT_POST, 'product_price', FILTER_VALIDATE_FLOAT);

    // Validación de los datos recibidos
    if ($category_id === false || $code === null || $name === null || $price === false) {
        $error = "Invalid product data. Check all fields and try again.";
        echo "<p>$error</p>";
    } else {
        // Consulta SQL para la inserción de datos
        $query = 'INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
        sportsequipmentName, description, price, dateCreated) 
                  VALUES (:category_id, :product_code, :product_name, :descrip, :product_price, NOW())';

        // Preparación y ejecución de la consulta
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':product_code', $code);
        $statement->bindValue(':product_name', $name);
        $statement->bindValue(':descrip', $description);
        $statement->bindValue(':product_price', $price);
        
        $success = $statement->execute();
        if ($success) {
            echo "<p>Product inserted successfully.</p>";
        } else {
            echo "<p>Failed to insert product.</p>";
        }

        $statement->closeCursor();
    }
}
?>

<p><a href="product_page.php">View Product List</a></p>
