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
    <link rel="stylesheet" href="merchandise.css" />
 
</head>
<body>
    <main>
        <h1> Check out what MP Kicks has for you </h1>
        <h3> Please select one </h3>
            <div class="dropdown">
                <button class="dropbtn">Select a Category 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <?php foreach ($categories as $distribution): ?>
                <!-- "?sportsequipmentCategoryID=" will be a parameter of the url-->
                <!--distribution variable will hold the categoryID for each category and then instead of printing out the ID, we 
                make the variable distribution to hold the name of each one insetad of the id-->
                <a href="?sportsequipmentCategoryID=<?php echo $distribution['sportsequipmentCategoryID']; ?>" >
                    <?php echo $distribution['sportsequipmentCategoryName']; ?>
                </a> 
            <?php endforeach; ?>
            </div> 
            </div>
        </nav>
        
   
        <!--Print the product for each category-->
        <table>
        
        <th>Name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Size</th>
        <th>Price</th>
        <th> Date Created </th>
        <th> Action </th>
        
        <?php foreach($products as $merchandise):?>
            <tr>
                <td><?php echo $merchandise['sportsequipmentName']; ?></td>
                <td><?php echo $merchandise['sportsequipmentCode']; ?></td>
                <td><?php echo $merchandise['description']; ?></td>
                <td><?php echo $merchandise['Size']; ?></td>
                <td><?php echo $merchandise['price']; ?></td>
                <td><?php echo $merchandise['dateCreated']; ?></td>
                <td> 
                    <form action="shipping_form.php" method="post" class="form1">
                        <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($merchandise['sportsequipmentName']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo $merchandise['price']; ?>">
                        <input type="hidden" name="product_code" value="<?php echo $merchandise['sportsequipmentCode']; ?>">
                        <input type="hidden" name="product_img" value="<?php echo $merchandise['product_image']; ?>">
                        
                        <input type="submit" value="Proceed to the shipping form">
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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


</html>
