<?php
  header('Content-Type: image/jpeg');

  $hostname = "localhost";
  $username = "21606555";
  $password = "mysqluser";
  $database = "db1_21606555";
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }

  $query = "SELECT image FROM monster WHERE id='$_GET[id]'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  echo stripslashes($row['image']);
?>
