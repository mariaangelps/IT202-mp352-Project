

<?php
  
//company features

$error_message  ='';
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
$user_addressf = $user_address . "<br> <b> UNITED STATES </b>"; // United States is in a new line and its bold
$statef = $state;
$datef = "<b>Shipping Date: </b> " . date_format(date_create($shipping_date),'m-d-Y');
$zip_codef =$zip_code . ", " . "<b> $statef </b>";
$total_valuef = "<br> <b> Total: </b> " . "$" . floatval($total_value);
$package_dimensionf = "<br> <b> Size: </b> ". number_format($package_dimension) . " inches";
$shipping_classf = "<br> <b> Class Type: </b> ". $shipping_class ;
$shipping_companyf = "<br> <b> Company: </b> " . $shipping_company ;

?>

<html>
<head>
  <title>Shipping Tag</title>
  <link rel="stylesheet" href="result_aesthetic.css"/>
</head>

<body>
<img id="jumping-man" src="images/full-shot-man-jumping-outdoors.jpg" alt="Man jumping" width="100">
    <?php include ('header.php');?>
   
    <main>
        
        <span><?php echo $company_addressf;?><br> 852 3028 3732 </span>

            <h2> SHIP TO: </h2>
            <span><?php echo $namef;?></span>
            <br>
            <span><?php echo $user_addressf;?></span>
            <br>
            <span><?php echo $zip_codef;?></span>
            <br>
            <span><?php echo $datef;?></span>   
            <br>
            <span><?php echo $shipping_classf;?></span>
            <span><?php echo $shipping_companyf;?></span>
            <br>
            <span class = "package" ><?php echo $package_dimensionf; ?></span>
            <br>
            <span class = "value" ><?php echo $total_valuef; ?></span>
            <br>
            <img src = "images/Beige and Brown Running.jpg" alt = "Running Shoes Bar Code" width= "250";>
            
           
    </main>

    <?php include ('footer.php');?>
 
 
</body>
</html>