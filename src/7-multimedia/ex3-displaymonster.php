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

  $query = "SELECT id FROM monster";
  $result = $db->query($query);
  $row = $result->fetch_assoc();

  echo "<img src='ex3-getjpg.php?id=$row[id]'>";
?>
