<?php
/*Maria Angel Palacios
    03/21/2024
    IT202-006 -> Phase 3 Project 
    mp352@njit.edu 
*/

require_once('database_njit.php');
include('header.php');

///Get category ID
$sportsequipmentCategoryID = filter_input(INPUT_GET, 'sportsequipmentCategoryID', FILTER_VALIDATE_INT);
if ($sportsequipmentCategoryID == NULL || $sportsequipmentCategoryID == FALSE) {
    $sportsequipmentCategoryID = 1;
}

  
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
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Size</th>
            <th>Price</th>
            <th> Date </th>
            <th>Action</th>
            <th>Delete</th>
    
        </tr>
        <?php foreach($products as $merchandise):?>
        <tr>
            <td><?php echo $merchandise['sportsequipmentName']; ?></td>
            <td><?php echo $merchandise['sportsequipmentCode']; ?></td>
            <td><?php echo $merchandise['description']; ?></td>
            <td><?php echo $merchandise['Size']; ?></td>
            <td><?php echo $merchandise['price']; ?></td>
            <td><?php echo $merchandise['dateCreated'];?></td>
            
            <td> 
                <form action="shipping_form.php" method="post" class="form1">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($merchandise['sportsequipmentName']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo $merchandise['price']; ?>">
                    <input type="hidden" name="product_code" value="<?php echo $merchandise['sportsequipmentCode']; ?>">
                    <input type="hidden" name="product_img" value="<?php echo $merchandise['product_image']; ?>">
                    <input type="submit" value="Proceed to the shipping form">
                </form>
            </td>
            <td>
                <form action="delete_product.php" method="post">
                    <input type="hidden" name="sportsequipmentID" value="<?php echo $merchandise['sportsequipmentID']; ?>" />
                    <input type="hidden" name="sportsequipmentCategoryID" value="<?php echo $merchandise['sportsequipmentCategoryID']; ?>" />
                    <input type="submit" value="Delete" />
                </form>
            </td>
        </tr>
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
            </div>

            
    </main>
<?php include('footer.php'); ?>
</body>
</html>
