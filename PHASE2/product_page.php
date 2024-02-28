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
        <table id="productTable">
            <h1> Please select one </h1>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Size</th>
                <th>Price</th>
            </tr>
                <!--Print the product for each category-->
                <?php foreach($products as $merchandise):?>
                    <tr>
                    <td><?php echo $merchandise['sportsequipmentName']; ?></td>
                    <td><?php echo $merchandise['sportsequipmentCode']; ?></td>
                    <td><?php echo $merchandise['description']; ?></td>
                    <td><?php echo $merchandise['Size']; ?></td>
                    <td><?php echo $merchandise['price']; ?></td>
                    
                <?php endforeach; ?>
        </table> 
        
           <!-- Assuming this part of the code is within a loop that fetches products -->
           <?php foreach($products as $merchandise):?>
    <figure class="package-container1">
        <img src="imagesPh2/<?php echo $merchandise['imagesPh2/96022-71_FUSE-275-ARCTBLU-BLK_FDSQ.webp.jpg']; ?>" alt="<?php echo $merchandise['sportsequipmentName']; ?>" class="package">
        <figcaption><?php echo $merchandise['sportsequipmentName']; ?></figcaption>
    </figure>
<?php endforeach; ?>


    


    
    </main>

    


<?php include('footer.php'); ?>
</body>
</html>
