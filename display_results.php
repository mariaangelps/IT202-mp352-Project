

<?php
//company features
$tracking_number = filter_input(INPUT_POST, 'tracking_number');
$shipping_class = filter_input(INPUT_POST, 'shipping_class');
$shipping_company = filter_input(INPUT_POST, 'shipping_company');
$shipping_date = filter_input(INPUT_POST, 'shipping_date');
$package_dimension = filter_input(INPUT_POST, 'package_dimension', FILTER_VALIDATE_INT);
$total_value = filter_input(INPUT_POST, 'total_value', FILTER_VALIDATE_FLOAT);
$from_address = filter_input(INPUT_POST, 'from_address');
$street_address = filter_input(INPUT_POST, 'street_address');

//user information
$first_name = filter_input(INPUT_POST,'first_name');
$last_name = filter_input(INPUT_POST,'last_name');
$street_address = filter_input(INPUT_POST,'street_address');
$city = filter_input(INPUT_POST,'city');
$state = filter_input(INPUT_POST,'state');
$zip_code = filter_input(INPUT_POST,'zip_code'); 

//MAKE THE TAG
//Apply formatting 
$total_valuef = "$" . number_format($total_value,2);
$package_dimensionf = number_format($package_dimension) . " inches"


?>

<html>
<head>
  <title>Future Value Calculator</title>
</head>
<body>
  <h1>Future Value Calculator</h1>
  <label>Total:</label>
  <span><?php echo $total_valuef; ?></span>
  <br>
  <label>dimension :</label>
  <span><?php echo $package_dimensionf; ?></span>
  <br>
  <label>Number of Years:</label>
  <span><?php echo $years; ?></span>
  <br>
  <label>Future Value:</label>
    <span><?php echo $future_value_f; ?></span>
  </body>
</html>