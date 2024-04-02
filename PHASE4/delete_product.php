<?php 
/*Maria Angel Palacios
    03/21/2024
    IT202-006 -> Phase 3 Project 
    mp352@njit.edu 
*/
include('header.php');

//require once is to add values to the database
require_once('database_njit.php');
$product_id = filter_input(INPUT_POST,'sportsequipmentID',FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST,'sportsequipmentCategoryID',FILTER_VALIDATE_INT);

if($product_id!=FALSE && $category_id!=FALSE){
    $query = 'DELETE FROM sportsequipment WHERE sportsequipmentID = :sportsequipmentID';

    //4 step:prepare, bindvalue, execute, closecursor
    $statement = $db->prepare($query); //takes de query and creates the $statement which is  A PDOstatement
    $statement->bindValue(':sportsequipmentID',$product_id); //find and replace, go find the product id and replace the number in there from the filter input
    $success= $statement->execute();
    $statement->closeCursor();
    echo "<p> Item deleted! ";

}
include('footer.php');
?>
<html>
    <head>
        <title> Deleting Items </title>
    </head>
    <body>
    <p><a href="product_page.php"></p>
    </body>
</html>

<style>

body {
    background-image: url("imagesPh3/empty-shopping-basket-online-shopping-concept-pink-background-3d-rendering.jpg");
    background-size: cover; 
    background-position: center; 
    font-family: 'Courier New', Courier, monospace;
    font-size: 18px; 
    padding: 20px; 
    margin: 0; 
}

header{
    padding: 4px; 
    text-align: center; 
    margin-top:20;
    font-size: 18px; 
}

footer {
    padding: 0px;
    position:relative; 
    margin-left: 0px;
    font-size: 18px; 
}


</style>

<button type="button">Continue shopping!</button>
</a>
