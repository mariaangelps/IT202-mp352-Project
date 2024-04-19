<?php
/*Maria Angel Palacios
    04/19/2024
    IT202-006 -> Phase 5 Project 
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
        <form action="add_products.php" method= "post" name="product_form" id="product_form">
            <label>Category:</label>
                <select name="category_id">
                    <?php foreach ($categories as $distribution): ?>
                        <option value="<?php echo $distribution['sportsequipmentCategoryID']; ?>">
                            <?php echo $distribution['sportsequipmentCategoryName']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>
        
            <label>Code:</label>
                <input type="text" name="product_code"  id="code" value="<?php echo isset($_POST['product_code']) ? htmlspecialchars($_POST['product_code']) : ''; ?>"/>
                <span>*</span>
                <br>
            <label>Name:</label>
                <input type="text" name="product_name" id="name" value="<?php echo isset($_POST['product_name']) ? htmlspecialchars($_POST['product_name']) : ''; ?>"/>
                <span>*</span>
                <br>
            <label>Description:</label>
                <input type="text" name="descrip" id="description"
                value="<?php echo isset($_POST['descrip']) ? htmlspecialchars($_POST['descrip']) : ''; ?>"/>
                <span>*</span>
                <br>
            <label>Price:</label>
                <input type="text" name="product_price" id="price"
                value="<?php echo isset($_POST['product_price']) ? htmlspecialchars($_POST['product_price']) : ''; ?>"/>
                <span>*</span>
                <br>
            <label> Size:</label> 
                <input type="text" name="size" id="size" value="<?php echo isset($_POST['size']) ? htmlspecialchars($_POST['size']) : ''; ?>"/>
                <span>*</span>
            <br>
            <input type="submit" value="Add product" id="submit_button" />
            <input type="reset" value="Clear Form" id="reset_button" />

        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" 
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" 
        crossorigin="anonymous"></script>

    <p><a href="product_page.php">View Product List</a></p>
</main>
<?php include('footer.php'); ?>
</body>
<script src="create.js"></script>
</html>

