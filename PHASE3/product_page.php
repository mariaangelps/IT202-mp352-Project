<?php
//Maria Angel Palacios
//03/01/2024
//IT202-006 -> Phase 2 Project 
//mp352@njit.edu 

require_once('database_njit.php');
include('header.php');

//Get category ID
$sportsequipmentCategoryID = filter_input(INPUT_GET, 'sportsequipmentCategoryID', FILTER_VALIDATE_INT);

//Syntax: Select * from 'table name where categories' 
//Select all categories ordered by category ID
$queryAllCategory = 'SELECT * FROM sportsequipmentCategories ORDER BY sportsequipmentCategoryID';
// Prepare and execute the query
$statement1 = $db->prepare($queryAllCategory);
$statement1->execute();
//gets the rows and returns them as an array in a new variable called categories
$categories = $statement1->fetchAll();
$statement1->closeCursor();

//Gets the product or merchandise for each category
$queryEachProduct = 'SELECT * FROM sportsequipment WHERE sportsequipmentCategoryID=:categoryID';
$statement2=$db->prepare($queryEachProduct);
$statement2->bindValue(':categoryID',$sportsequipmentCategoryID);
$statement2->execute();
$products = $statement2->fetchAll();
$statement2->closeCursor();?>

<html>
<head>
    <title> My Product Page </title>
    <link rel="stylesheet" href="merchandise.css"/>

</head>
<body>
    <main>
        <h1> Check out what MP Kicks has for you </h1>
    
            
           <!-- Foreach loop that prints the name and picture for each product-->
           <div class="product-container">
            <?php foreach($products as $merchandise): ?>
            <figure class="package-container1">
                <figcaption><?php echo $merchandise['sportsequipmentName']; ?></figcaption>
                <img src="<?php echo $merchandise['product_image']; ?>" alt="<?php echo $merchandise['sportsequipmentName']; ?>" class="product-image">
            </figure>
            <?php endforeach; ?>
            
            </div>
    </main>
<?php include('footer.php'); ?>
</body>
</html>
