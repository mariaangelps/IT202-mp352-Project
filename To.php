
<?php
$error_message = '';
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$street_address = filter_input(INPUT_POST,'street_address');
$city = filter_input(INPUT_POST,'city');
$state = filter_input(INPUT_POST,'state');
$zip_code = filter_input(INPUT_POST,'zip_code');
$order_number = filter_input(INPUT_POST,'order_number');
$shipping_date = filter_input(INPUT_POST,'shipping_date');
$package_dimension = filter_input(INPUT_POST,'package_dimension');
$total_value = filter_input(INPUT_POST,'total_value');


//Check the value of the package is no more than 1000
if($total_value<=1000){
  $error_message.="The value cannot be more than 1000<br>";
  else if($total_value<=0){
    $error_message.= "Please enter a valid quantity<br>";
  }
} 

//Check that dimensions are no more than 36 inches
if($package_dimension>36){
  $error_message.="The package size must not exceed 36 inches<br>";
  else if($package_dimension<=0){
    $error_message.="Please enter a valid size<br>";
  }
}

//check ZIP CODE
if(!ctype_digit($zip_code)){
  $error_message.="Please enter a valid ZIP CODE";
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
      <br>
      <label> Order Number:</label>
      <span><?php echp $order_number;?></span>
      <br>
      <label> Shipping Date: </label> 
      <span><?php echo $shipping_date;?></span>
      <br>
      <label> Package Dimension: </label>
      <span><?php echo $package_dimension;?></span>
      <br>
      <label> Total Value: </label>
      <span><?php echo %$total_value;?></span>

    </body>
</html>


  





