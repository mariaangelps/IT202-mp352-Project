<?php

require_once('database_njit.php');

/*function addsportsequipmentmanager($emailAddress, $password, $firstName, $lastName, $dateCreated) {
    $db = getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO sportsequipmentManagers (emailAddress, password, firstName, lastName, dateCreated)
             VALUES (:emailAddress, :password, :firstName, :lastName, :dateCreated)';
    $statement = $db->prepare($query);
    $statement->bindValue(':emailAddress', $emailAddress);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':dateCreated', $dateCreated);
    $success = $statement->execute(); 
}


// Adding sportsequipmentmanagers
addsportsequipmentmanager('marita@gmail.com', 'mari123', 'Marita', 'Brown', date('Y-m-d H:i:s'));
addsportsequipmentmanager('juandp43@outlook.com', 'mynameisJuan', 'Juan Diego', 'Zaleski', date('Y-m-d H:i:s'));
addsportsequipmentmanager('crisbs48@gmail.com', 'holasoyCristina345', 'Cristina', 'Solis', date('Y-m-d H:i:s'));
*/

function is_valid_admin_login($emailAddress, $password) {
    //echo "Validating Admin Login...<br>";
    $db = getDB();
    $query = 'SELECT password FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
    $statement = $db->prepare($query);
    $statement->bindValue(':emailAddress', $emailAddress);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor(); 
    
    if ($row == false) {
        echo "User not found!<br>";
        return false;
    } else {
        $hash = $row['password'];
        if (password_verify($password, $hash)) {
            echo "Login successful!<br>";
            return true;
        } else {
            echo "Incorrect password!<br>";
            return false;
        }
    }
}

function managers_credentials($emailAddress) {
    echo "Working Manager Credentials...<br>";
    $db = getDB();
    $query = 'SELECT emailAddress, firstName, lastName FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
    $statement = $db->prepare($query);
    $statement->bindValue(':emailAddress', $emailAddress);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    if ($result) {
        echo "Manager credentials found!<br>";
        return $result;
    } else {
        echo "Manager not found!<br>";
        return false;
    }
}



?>
