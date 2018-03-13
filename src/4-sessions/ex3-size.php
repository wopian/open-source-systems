<?php
  session_start();
  $_SESSION[widgetQuantity] = $_POST[selqty];
?>

<html>
  <head>
    <title>Select size page</title>
  </head>
  <body>
    <form action='ex3-colour.php' method='post'>
      Select the size of the <?= $_SESSION[widgetQuantity] ?>
      widgets you are ordering
      <select name='selsize'>
        <option>Small (£15.75)</option>
        <option>Medium (£16.75)</option>
        <option>Large (£17.75)</option>
        <option>Extra Large (£18.75)</option>
      </select>
      <br><br>
      <input type='submit' value='Next'>
    </form>
  </body>
</html>
