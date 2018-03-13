<?php
  session_start();

  $colour = $_POST[selcolour];
  $quantity = $_SESSION[widgetQuantity];
  $totalPrice = $_SESSION[widgetPrice] * $quantity;

  echo "<h2>Your order quantity is $quantity</h2>";
  echo "<h2>and the selected colour is $colour.</h2>";
  echo "<h2>for a total price of £$totalPrice</h2>";
?>
