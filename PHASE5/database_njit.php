<?php
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
//Data Source Name
function getDB(){
$dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=mp352';
$username = 'mp352';
    $password = 'Holamari1234$';
    try{
        $db = new PDO($dsn,$username,$password);
    } catch(PDOException $ex){
        $error_message = $ex->getMessage(); //calling the object
        include('database_error.php');
        exit();

    }
    //prepare pass to $query
    return $db;
    }
?>



