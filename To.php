
<?php

$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$street_address = filter_input(INPUT_POST,'street_address');
$city = filter_input(INPUT_POST,'city');
$state = filter_input(INPUT_POST,'state');
$zip_code = filter_input(INPUT_POST,'zip_code');

// Check if it exists, otherwise create it
if(!isset($first_name)){
  $first_name='';
}
if(!isset($last_name)){
  $last_name='';
}
if(!isset($street_address)){
  $street_address='';
}
if(!isset($city)){
  $city='';
}
if(!isset($zip_code)){
  $zip_code='';
}

//Validate Data
$error_message = '';

//check ZIP CODE
if(!ctype_digit($zip_code)){
  $error_message.="Please enter a valid ZIP CODE<br>";
}

//Check state 
if(!ctype_alpha($state)){
  $error_message.="Please select a valid state";
}

?>

<html>
    <head>
      <title>MY SHIPPING ORDER DETAILS: </title>
    </head>
    <body>
      <h1>MY SHIPPING ORDER DETAILS:</h1>
      <br>
      <label> First Name:</label>
      <span><?php echo $first_name;?></span>
      <br>
      <label> Last Name:</label>
      <span><?php echo $last_name;?></span>
      <br>
      <label> Street Address:</label>
      <span><?php echo $street_address;?></span>
      <br>
      <label> City: </label>
      <span><?php echo $city;?></span>
      <br>
      <label> State: </label> 
      <span><?php echo $state;?></span>
      <br> 
      <label> Zip Code:</label>
      <span<?php echo $zip_code;?></span>
      
      <?php
     if(!empty($error_message)){
      echo "<p>";
      echo $error_message;
      echo "<p>";
     }
      ?>
    </body>
</html>


  





