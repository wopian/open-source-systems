<?php
  session_start();
  $_SESSION['widgetQuantity'] = $_POST[selqty];
?>

<html>
  <head>
    <title>Select colour page</title>
  </head>
  <body>
    <form action='ex1-confirm.php' method='post'>
      Select the colour for the <?= $_SESSION[widgetQuantity] ?>
      widgets you are ordering
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
