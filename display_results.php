

<?php
  
//company features

$error_message  ='';
$tracking_number = filter_input(INPUT_POST, 'tracking_number');
$shipping_class = filter_input(INPUT_POST, 'shipping_class');
$shipping_company = filter_input(INPUT_POST, 'shipping_company');
$shipping_date = filter_input(INPUT_POST, 'shipping_date');
$package_dimension = filter_input(INPUT_POST, 'package_dimension', FILTER_VALIDATE_INT);
$total_value = filter_input(INPUT_POST, 'total_value', FILTER_VALIDATE_FLOAT);
$company_address = filter_input(INPUT_POST, 'company_address');
$user_address = filter_input(INPUT_POST, 'user_address');

//user information
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$city = filter_input(INPUT_POST,'city');
$state = filter_input(INPUT_POST,'state');
$zip_code = filter_input(INPUT_POST,'zip_code'); 

//Check the value of the package is no more than 1000
if($total_value===FALSE){
    $error_message.= "Enter a valid number for your value";}
    else if ($total_value>1000){
      $error_message.= 'The value cannot be more than 1000<br>'; 
    }
    //Check that dimensions are no more than 36 inches
  if($package_dimension===FALSE){
    $error_message.="Enter a valid number for dimensions ";
    }
    else if($package_dimension>36){
      $error_message.='The package size must not exceed 36 inches<br>';}

   //Check ZIP CODE
  if(!ctype_digit($zip_code)){
    $error_message.="Please enter a valid ZIP CODE <br>";}
  //Check state 
  if(!ctype_alpha($state)){
    $error_message.="Please select a valid state";
  }

  //Display the error message if it's not empty
  if (!empty($error_message)) {
    include("shipping_form.php");
    exit();
  }
  
//MAKE THE TAG
//Apply formatting 
$company_addressf =  $company_address;
$namef = $first_name . " " . $last_name;
$user_addressf = $user_address . " <br> <b> UNITED STATES </b>"; // United States is in a new line and its bold
$statef = $state;
$datef = date_format(date_create($shipping_date),'m-d-Y');
$zip_codef =$zip_code;
$total_valuef = "$" . number_format($total_value);
$package_dimensionf = number_format($package_dimension) . " inches";
$tracking_numberf = $tracking_number;
$shipping_classf = $shipping_class;
$shipping_companyf = $shipping_company;


?>

<html>
<head>
  <title>Shipping Tag</title>
</head>
<body>
  <h1>SHIPPING TAG DETAILS:</h1>
  
  <span><?php echo $company_addressf;?></span>
  <br>
  <p>852 3028 3732 </p>

  <h3> SHIP TO: </h3>
    <span><?php echo $namef;?></span>
    <br>
    <span><?php echo $user_addressf;?></span>
    <br>
    <span><?php echo $zip_codef;?></span>
    <br>
    <h3><span> <?php echo $statef;?></span><h3>
    <br>
    <span><?php echo $datef;?></span>   
    <br>
    <span><?php echo $tracking_numberf;?></span>
    <br>
    <h4><label>Size:</label></h4>
    <span><?php echo $package_dimensionf; ?></span>
    <br>
    <h3><span><?php echo $shipping_classf;?></span></h3>
    <br> 
    <h3><span><?php echo $shipping_companyf;?></span></h3>
    <br>098
    <h5><label>Total Value:</label></h5>
    <span><?php echo $total_valuef; ?></span>
    <br>







  
  
  


  
  
 
 
  </body>
</html>