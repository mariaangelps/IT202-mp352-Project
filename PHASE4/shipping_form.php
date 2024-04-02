<?php
/*Maria Angel Palacios
    03/21/2024
    IT202-006 -> Phase 3 Project 
    mp352@njit.edu 
*/

// Check if it exists, otherwise create it
if(!isset($shipping_date)){
  $shipping_date='';
}
if(!isset($package_dimension)){
  $package_dimension='';
}

if(!isset($shipping_class)){
  $shipping_class='';
}

if(!isset($shipping_company)){
  $shipping_company='';
}

if(!isset($company_address)){
  $company_address='';
}
if(!isset($user_address)){
  $user_address='';
}
if(!isset($first_name)){
  $first_name='';
}
if(!isset($last_name)){
  $last_name='';
}
if(!isset($user_address)){
  $user_address='';
}
if(!isset($city)){
  $city='';
}
if(!isset($zip_code)){
  $zip_code='';
}

$product_price = isset($_POST['product_price']) ? $_POST['product_price'] : '';
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
$product_code = isset($_POST['product_code']) ? $_POST['product_code'] : '';
$product_img= isset($_POST['product_img']) ? $_POST['product_img'] : '';
?> 


<html>
<head>
    <title>MY SHIPPING ORDER DETAILS:</title>
    <link rel="stylesheet" href="style_shipping.css"/>
    <?php include('menu.php');?>
</head>
<body>
  <h3>Check out <h3>
  <?php
  //Display the error message if it's not empty
    if (!empty($error_message)) {
      echo "<div style='color: red;'>$error_message</div>";
    }
?>


  <main>
    <form action="display_results.php" method="post">
  
      <label>Shipping Date:</label>
        <input type="date" id= "date" name="shipping_date" class="input-field" value="<?php echo htmlspecialchars($shipping_date); ?>">
        <label for="date"> </label>
        <br>

      <label>Shipping Company: </label>
        <input type="radio"  id= "USPS" name="shipping_company" value= "USPS"> <!-- id has to match Value-->
        <label for = "USPS">  USPS </label>
        <input type="radio"  id= "UPS" name="shipping_company" value="UPS">
        <label for = "UPS" > UPS </label>
        <input type="radio"  id= "FedEx" name="shipping_company" value="FedEx">
        <label for = "FedEx" > FedEx </label>
        <br>

      <label>Shipping Class:</label>
        <input type="radio" id= "Next Day Air" name= "shipping_class" value="Next Day Air" >
        <label for = "Next Day Air" > Next Day Air </label>
        <input type="radio" id= "Priority Mail" name= "shipping_class" value="Priority Mail" >
        <label for = "Priority Mail" >Priority Mail</label>
        <br>

      <label>Package Dimension:</label>
        <input type="text" name="package_dimension" class="input-field" value="<?php echo htmlspecialchars($package_dimension); ?>">
        <br>

      <label>Product Name:</label>
        <input type="text" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>" readonly>
        <br>

      <label>Product Price:</label>
        <input type="text" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>" readonly>
        <br>

      <label>Product Code:</label>
        <input type="text" name="product_code" value="<?php echo htmlspecialchars($product_code); ?>" readonly>
        <br>
        
      <label>Your Product:</label>
        <img src="<?php echo htmlspecialchars($product_img); ?>" alt="Product Image" >
        <input type="hidden" name="product_img" value="<?php echo $product_img; ?>">
        <br>
          
      <!-- input-field for name, last name, adress and city-->
        <input type="text" name="user_address" placeholder="Enter your address" value="<?php echo($user_address); ?>" class="input-field" >
        <br>

        <input type= "text" name= "first_name" placeholder="First Name" class="input-field" value= "<?php echo htmlspecialchars($first_name);?>">
        <br>
      
        <input type= "text" name= "last_name" class="input-field" placeholder="Last Name" value= "<?php echo htmlspecialchars($last_name);?>">
        <br>
    
        <input type= "text" name= "city" class="input-field"  placeholder=" City " value= "<?php echo htmlspecialchars($city);?>">
        <br>
        

    
      <label> State: </label> 
        <select id="state" name="state">
          <option value= "N/A" >Select One</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
          <br>
    
          <br>
          <input type= "text" name= "zip_code" placeholder="Zip Code" class="input-field" value= "<?php echo htmlspecialchars($zip_code);?>">
          <br>

      <label>Company Address:</label>
        <select id="company_address" name="company_address">
          <option value= "4585 Whittier Blvd, East Los Angeles, CA 90022 ">4585 Whittier Blvd<br>
          East Los Angeles, CA 90022 
          </option>
        </select>
        <br>

        <input type="submit" value="Send">
    </form>
  </main>
  
</body>
<h6><?php include ('footer.php');?></h6>
</html>

   