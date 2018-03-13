<?php
  session_start();
  // Input is "Small (£15)"
  // Output is [ "Small", "15" ]
  $selSize = explode('(£', rtrim($_POST[selsize], ')'));
  $_SESSION[widgetSize] = $selSize[0];
  $_SESSION[widgetPrice] = $selSize[1];
?>

<html>
  <head>
    <title>Select colour page</title>
  </head>
  <body>
    <form action='ex3-confirm.php' method='post'>
      Select the colour for the <?= $_SESSION[widgetQuantity] ?>
      <?= $_SESSION[widgetSize] ?> widgets you are ordering
      <select name='selcolour'>
        <option>White</option>
        <option>Red</option>
        <option>Yellow</option>
        <option>Green></option>
        <option>Blue</option>
      </select>
      <br><br>
      <input type='submit' value='Next'>
    </form>
  </body>
</html>
