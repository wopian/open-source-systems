<?php
  $hostname = "localhost";
  $username = "21606555";
  $password = "mysqluser";
  $database = "db1_21606555";
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }

  $result = $db->query("SELECT * from test WHERE name='$_GET[id]'");
  $row = $result->fetch_assoc()
?>

<html>
  <body>
    <!-- See Exercise 3 for ex3-action.php -->
    <form action='ex3-action.php' method='post'>
      Name:
      <input type='text' name='txtname' value="<?= $row[name] ?>" readonly>
      <br>
      Phone Number:
      <input type='text' name='txttelno' value="<?= $row[phone_number] ?>">
      <br>
      Email:
      <input type='text' name='txtemail' value="<?= $row[email] ?>">
      <br>
      <input type='submit' value='Update Data'>
    </form>
  </body>
</html>
