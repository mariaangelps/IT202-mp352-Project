<?php
//Maria Angel Palacios
//03/01/2024
//IT202-006 -> Phase 3 Project 
//mp352@njit.edu 

require_once('database_njit.php');
include('header.php');

//Select all categories ordered by category ID
$queryAllCategory = 'SELECT * FROM sportsequipmentCategories ORDER BY sportsequipmentCategoryID';
// Prepare and execute the query
$statement1 = $db->prepare($queryAllCategory);
$statement1->execute();
//gets the rows and returns them as an array in a new variable called categories
$categories = $statement1->fetchAll();
$statement1->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <title> My Product Page </title>
    <link rel="stylesheet" href="merchandise.css" />
</head>

<body>
    <main>
        <h1> Check out what MP Kicks has for you </h1>
        <h3> Please select one </h3>
        <form action="add_products.php" method= "post">
        <label>Category:</label>
            <select name="category_id">
                <?php foreach ($categories as $distribution): ?>
                    <option value="<?php echo $distribution['sportsequipmentCategoryID']; ?>">
                        <?php echo $distribution['sportsequipmentCategoryName']; ?>
                    </option>
                <?php endforeach; ?>
            </select><br>
        


    <label>Code:</label>
    <input type="text" name="product_code" value="<?php echo isset($_POST['product_code']) ? htmlspecialchars($_POST['product_code']) : ''; ?>"><br>
    <label>Name:</label>
<input type="text" name="product_name"
    value="<?php echo isset($_POST['product_name']) ? htmlspecialchars($_POST['product_name']) : ''; ?>"><br>

<label>Description:</label>
<input type="text" name="descrip"
    value="<?php echo isset($_POST['descrip']) ? htmlspecialchars($_POST['descrip']) : ''; ?>"><br>

<label>Price:</label>
<input type="text" name="product_price"
    value="<?php echo isset($_POST['product_price']) ? htmlspecialchars($_POST['product_price']) : ''; ?>"><br>
    <input type="submit" value="Add Product"><br>
</form>
    <p><a href="product_page.php">View Product List</a></p>
</main>
<?php include('footer.php'); ?>
</body>
</html>

