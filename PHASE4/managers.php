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
function is_valid_admin_login($emailAddress, $password){
  echo "This is working VALID ADMIN LOGIN";
  $db=getDB();
  $query = 'SELECT password FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
  $statement = $db->prepare($query);
  $statement->bindValue(':emailAddress', $emailAddress);
  $statement->execute();
  $row =$statement->fetch();
  $statement->closeCursor(); 

  if ($row == false) {
    return false;
  } else {
    $hash = $row['password'];
    return password_verify($password, $hash);
  }
  echo"si pasa el if else";
}

function managers_credentials($emailAddress) {
echo "This is working";
$db = getDB(); // Assuming getDB() is defined and returns the database connection
$query = 'SELECT firstName, lastName, emailAddress FROM sportsequipmentManagers WHERE emailAddress = :emailAddress';
$statement = $db->prepare($query);
$statement->bindValue(':emailAddress', $emailAddress);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
$statement->closeCursor();
return $result;
}

?>
