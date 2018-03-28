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

  $query = "DELETE FROM test WHERE name=?";

  $sql = $db->prepare($query);
  $sql->bind_param('s', $_GET[id]);
  $sql->execute();

  printf("%d row deleted.", $sql->affected_rows);
?>
