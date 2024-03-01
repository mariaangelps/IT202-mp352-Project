<?php
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
        <table>
            <h1> Please select one </h1>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Size</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
           
                <!--Print the product for each category-->
                <?php foreach($products as $merchandise):?>
                    <tr>
                    <td><?php echo $merchandise['sportsequipmentName']; ?></td>
                    <td><?php echo $merchandise['sportsequipmentCode']; ?></td>
                    <td><?php echo $merchandise['description']; ?></td>
                    <td><?php echo $merchandise['Size']; ?></td>
                    <td><?php echo $merchandise['price']; ?></td>
                    <tr>
                <?php endforeach; ?>
        </table> 
            
           <!-- Foreach loop that prints the name and picture for each product-->
           <div class="product-container">
            <?php foreach($products as $merchandise): ?>
            <figure class="package-container1">
                <figcaption><?php echo $merchandise['sportsequipmentName']; ?></figcaption>
                <img src="<?php echo $merchandise['product_image']; ?>" alt="<?php echo $merchandise['sportsequipmentName']; ?>" class="product-image">
            </figure>
            <?php endforeach; ?>
            <form action="shipping_form.php" method="post" class="form1">
                        <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($merchandise['sportsequipmentName']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo $merchandise['price']; ?>">
                        <input type="submit" value="Proceed to the shipping form">
                    </form>
            </div>
    </main>
   

        
       


<?php include('footer.php'); ?>
</body>
</html>
