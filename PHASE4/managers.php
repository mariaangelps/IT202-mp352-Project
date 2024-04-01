<?php

require_once('database_njit.php');

function addsportsequipmentmanager($emailAddress, $password, $firstName, $lastName, $dateCreated) {
     $db = getDB();
   $hash = password_hash($password, PASSWORD_DEFAULT);
   $query = 'INSERT INTO sportsequipmentManagers (emailAddress, password, firstName, lastName, dateCreated)
             VALUES (:email, :password, :firstName, :lastName, :dateCreated)';
   $statement = $db->prepare($query);
   $statement->bindValue(':email', $emailAddress);
   $statement->bindValue(':password', $hash);
   $statement->bindValue(':firstName', $firstName);
   $statement->bindValue(':lastName', $lastName);
   $statement->bindValue(':dateCreated', $dateCreated);
   $success = $statement->execute(); 

     // Check if the execution was successful and return accordingly
     if ($success) {
      return true;  // Operation succeeded
  } else {
      return false; // Operation failed
  }

}
addsportsequipmentmanager('marita@gmail.com', 'mari123', 'Marita', 'Brown', date('Y-m-d H:i:s'));

addsportsequipmentmanager('juandp43@outlook.com', 'mynameisJuan', 'Juan Diego', 'Zaleski', date('Y-m-d H:i:s'));

addsportsequipmentmanager('crisbs48@gmail.com', 'holasoyCristina345', 'Cristina', 'Solis', date('Y-m-d H:i:s'));

addsportsequipmentmanager('karen32@yahoo.com', 'iamkaren', 'Karen', 'Palma', date('Y-m-d H:i:s'));



?>
