<?php
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
require_once('database_njit.php');
session_start();
require_once('managers.php');
$db = getDB();
include('menu.php');
include('welcome.php');

//Check if the user is not logged in
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
    // Set an error message indicating the user needs to be logged in
    $error_message = "You must be logged in to access this page.";
}

// Redirect to login page if not logged in
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
    header('Location: login.php');
    exit; // Stop further execution
}



//Display the error message if it's not empty
  if (!empty($error_message)) {
    echo "<div style='color: red;'>$error_message</div>";
  }
  
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
    <title> MPCatalog </title>
    <link rel="stylesheet" href="create.css"/>
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
                <input type="text" name="product_name" value="<?php echo isset($_POST['product_name']) ? htmlspecialchars($_POST['product_name']) : ''; ?>"><br>

            <label>Description:</label>
                <input type="text" name="descrip"
                value="<?php echo isset($_POST['descrip']) ? htmlspecialchars($_POST['descrip']) : ''; ?>"><br>

            <label>Price:</label>
                <input type="text" name="product_price"
                value="<?php echo isset($_POST['product_price']) ? htmlspecialchars($_POST['product_price']) : ''; ?>"><br>
            

            <label> Size:</label>
                <input type="text" name="size" value="<?php echo isset($_POST['size']) ? htmlspecialchars($_POST['size']) : ''; ?>"><br>
                <input type="submit" value="Add Product"><br>

        </form>

    <p><a href="product_page.php">View Product List</a></p>
</main>
<?php include('footer.php'); ?>
</body>
</html>

