<?php
require_once('database_njit.php');
include('header.php');

//Syntax: Select * from 'table name where categories' 

//Select all categories ordered by category ID
$queryAllCategory = 'SELECT * FROM sportsequipmentCategories ORDER BY sportsequipmentCategoryID';
// Prepare and execute the query
$statement1 = $db->prepare($queryAllCategory);
$statement1->execute();
//gets the rows and returns them as an array in a new variable called categories
$categories = $statement1->fetchAll();
$statement1->closeCursor();







?>

<html>
<head>
    <title> My Product Page </title>
    <link rel="stylesheet" href="products.css"/>
</head>
<body>
<main>
    <h1> Check out what MP Kicks has for you </h1>
    <nav>
        <?php foreach ($categories as $distribution): ?>
            <!-- "?sportsequipmentCategoryID=" will be a parameter of the url-->
            <!--distribution variable will hold the categoryID for each category and then instead of printing out the ID, we 
            make the variable distribution to hold the name of each one insetad of the id-->
            <a href="?sportsequipmentCategoryID=<?php echo $distribution['sportsequipmentCategoryID']; ?>" >
                <?php echo $distribution['sportsequipmentCategoryName']; ?>
            </a> ||
        <?php endforeach; ?>
    </nav>

   

    
</main>
<?php include('footer.php'); ?>
</body>
</html>
