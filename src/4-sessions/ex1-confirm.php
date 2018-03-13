<?php
  session_start();
  $quantity = $_SESSION[widgetQuantity];
  $colour = $_POST[selcolour];
  echo "<h2>Your order quantity is $quantity</h2>";
  echo "<h2>and the selected colour is $colour.</h2>";
?>
