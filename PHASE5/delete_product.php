<?php 
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/


//require once is to add values to the database
require_once('database_njit.php');
$db = getDB();
include('menu.php');
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
<html>
    <head>
        <title> Deleting Items </title>
    </head>
    <body>
        <script>
        //Guia para poder utilizar en el proyecto cuando se elimina
        const confirmDelete = confirm("ARE YOY SURE YOU WANT TO DELETE THIS ITEM?");
            if(confirmDelete){
                //code that deletes the item
                console.log("delete confirmed");}
            else{
                console.log("delete canceled");
                }
        </script>
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
