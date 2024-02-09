<?php
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
if(!isset($state)){
  $state='';
}
if(!isset($zip_code)){
  $zip_code='';
}
if(!isset($order_number)){
  $order_number='';
}
if(!isset($shipping_date)){
  $shipping_date='';
}
if(!isset($package_dimension)){
  $package_dimension='';
}
if(!isset($total_value)){
  $total_value='';
}
?>
<html> 
  <head> 
    <title> SHIPPING ORDER: </title>
  </head>

  <body> 
    <?php
  //check whether the value is empty. The empty syntax will always be
  if(!empty($error_message)){
      echo "<p>";
      echo $error_message;
      echo "</p>";
            }
            ?>
    <form action = "to.php" method = "post">
      <input type = "text" name= "first_name" value="<?php echo htmlspecialchars($first_name);?>"/>
      <br>
      <input type= "text" name="last_name" value="<?php echo htmlspecialchars($first_name);?>"/>
      <br>
      <input type = "text" name = "street_address" value ="<?php echo htmlspecialchars($first_name);?>"/>
      <br>
      <input type = "text" name= " $city ">
      <br>
      <input type = "text" name= " $city "> <!-- termminar de poner las variables -->
      <br>

      <br>

      <br>

      <br>

      <br>

      <br>

      <br>
    </form>
  </body>          
</html>