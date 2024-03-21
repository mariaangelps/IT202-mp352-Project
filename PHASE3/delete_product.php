<?php 
//Slide 37
//require once es para add los valores a esa base de datos 
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
?>

 
<p><a href="product_page.php">

<button type="button">Continue shopping!</button>
</a>
</p>