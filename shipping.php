<?php
$shoes_brand = filter_input(INPUT_POST,'shoes_brand');
$order_number = filter_input(INPUT_POST,'order_number');
$buyer_credentials = filter_input(INPUT_POST,'buyer_credentials');

?>

<html>
    <head>
    <title>MY SHIPPING ORDER DETAILS: </title>
</head>
<body>
  <h1>MY SHIPPING ORDER DETAILS:</h1>
  <br>
  <label> Package adress:</label>
  <label> Shipping Date:</label>
  <label> Order_number: </label>
  <label> Package Dimensions </label>
  <label> Total value: </label>
  