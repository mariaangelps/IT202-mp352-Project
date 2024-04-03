<?php

require_once('database_njit.php');




function is_valid_admin_login($emailAddress, $password) {
    $db = getDB();
    $query = 'SELECT password FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
    $statement = $db->prepare($query);
    $statement->bindValue(':emailAddress', $emailAddress);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor(); 
    
    if ($row == false) {
        return false;
    } else {
        $hash = $row['password'];
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}

function managers_credentials($emailAddress) {
    $db = getDB();
    $query = 'SELECT emailAddress, firstName, lastName FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
    $statement = $db->prepare($query);
    $statement->bindValue(':emailAddress', $emailAddress);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    if ($result) {
        return $result;
    } else {
        return false;
    }
}

?>
