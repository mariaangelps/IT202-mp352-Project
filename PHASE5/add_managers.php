<?php
/*Maria Angel Palacios
    04/04/2024
    IT202-006 -> Phase 4 Project 
    mp352@njit.edu 
*/
require_once('database_njit.php');

function addsportsequipmentmanager($sportsequipmentManagerID,$emailAddress, $password, $firstName, $lastName, $dateCreated) {
     $db = getDB();
   $hash = password_hash($password, PASSWORD_DEFAULT);
   $query = 'INSERT INTO sportsequipmentManagers (sportsequipmentManagerID, emailAddress, password, firstName, lastName, dateCreated)
             VALUES (:id, :email, :password, :firstName, :lastName, :dateCreated)';
   $statement = $db->prepare($query);
   $statement->bindValue(':id',$sportsequipmentManagerID);
   $statement->bindValue(':email', $emailAddress);
   $statement->bindValue(':password', $hash);
   $statement->bindValue(':firstName', $firstName);
   $statement->bindValue(':lastName', $lastName);
   $statement->bindValue(':dateCreated', $dateCreated);
   $success = $statement->execute(); 
}


addsportsequipmentmanager(1, 'marita@gmail.com', 'mariaA123', 'Marita', 'Brown', date('Y-m-d H:i:s'));

addsportsequipmentmanager(2, 'juandp43@outlook.com', 'mynameisJuan', 'Juan Diego', 'Zaleski', date('Y-m-d H:i:s'));

addsportsequipmentmanager(3, 'crisbs48@gmail.com', 'holasoyCristina345', 'Cristina', 'Solis', date('Y-m-d H:i:s'));
echo"manager added"


?>