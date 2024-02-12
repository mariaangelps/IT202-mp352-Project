<?php
 

$tracking_number = filter_input(INPUT_POST,'tracking_number');
$shipping_date = filter_input(INPUT_POST,'shipping_date');
$shipping_class= filter_input(INPUT_POST,'shipping_class');
$shipping_company = filter_input(INPUT_POST,'shipping_company');
$package_dimension = filter_input(INPUT_POST,'package_dimension',FILTER_VALIDATE_INT);
$total_value = filter_input(INPUT_POST,'total_value',FILTER_VALIDATE_FLOAT);
$from_address=filter_input(INPUT_POST,'from_address');
$street_address = filter_input(INPUT_POST,'street_address');


  //Validate Data 
  $error_message = '';
      
  //Check the value of the package is no more than 1000
  if($total_value===FALSE){
    $error_message.= "Enter a valid number!";}
    else if ($total_value>1000){
      $error_message.= 'The value cannot be more than 1000<br>'; 
    }
  

  //Check that dimensions are no more than 36 inches
  if($package_dimension===FALSE){
    $error_message.="Enter a valid number";
  }
    else if($package_dimension>36){
      $error_message.='The package size must not exceed 36 inches<br>';}
   
       // Display the error message if it's not empty
    if (!empty($error_message)) {
      echo "<div style='color: red;'>$error_message</div>";
  }
  ?>



<html> 
  <head> 
    <title> GENERAL INFROMATION: </title>
  </head>

  <body> 
    <h1> GENERAL INFROMATION: </h1>


    <form action = "to.php" method = "post">
      <label> Store Address: </label>
      <input type = "text" name = "store_address" value="<?php echo htmlspecialchars($from_address);?>"/>
      <br>
      <label> Client Address: </label>
      <input type = "text" name = "client_address" value="<?php echo htmlspecialchars($street_address);?>"/>
      <br>
      <label> Shipping Date: </label> 
      <input type = "text" name = "shipping_date " value="<?php echo htmlspecialchars($shipping_date);?>"/>
      <br>
      <label> Package Dimension: </label>
      <input type = "text" name= "package_dimension" value="<?php echo htmlspecialchars($package_dimension);?>"/>
      <br>
      <label> Package Declared Value: </label>
      <input type = "text" name= "total_value" value="<?php echo htmlspecialchars($total_value);?>"/>
      <br>
      <label> Shipping Company: </label>
      <input type= "text" name= "shipping_company" value= "<?php echo htmlspecialchars($shipping_company);?>"/>
      <br>
      <label> Shipping Class: </label>
      <input type= "text" name= "shipping_class" value= "<?php echo htmlspecialchars($shipping_class);?>"/>
      <br>
      <label> Tracking Number: </label>
      <input type = "text" name= "order_number" value="<?php echo htmlspecialchars($tracking_number);?>"/>
  
      <br>
      <label> Barcode: </label> <!--insertar imagen-->
      <br>

     
    
      <input type = "submit" value= "send"/>
    </form>
  </body>          
</html>