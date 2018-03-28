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

  $result = $db->query("SELECT * from test");
?>

<html>
  <body>
    <?php
      while ($row = $result->fetch_assoc()) {
        echo "<a href=\"ex2-action.php?id=$row[name]\">$row[name]</a> ";
        // See Exercise 4
        echo "<a href=\"ex4-action.php?id=$row[name]\">[DELETE]</a><br>";
      }
    ?>
  </body>
</html>
