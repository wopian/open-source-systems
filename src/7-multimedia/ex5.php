<?php
  switch ($_GET[type]) {
    case 'image':
      $contentType = 'image/jpeg';
      $column = 'image';
      break;
    case 'audio':
      $contentType = 'audio/wav';
      $column = 'audio';
      break;
  }

  header("Content-Type: $contentType");

  $hostname = "localhost";
  $username = "21606555";
  $password = "mysqluser";
  $database = "db1_21606555";
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }

  $query = "SELECT $column FROM monster WHERE id='$_GET[id]'";
  $result = $db->query($query);
  $row = $result->fetch_assoc();
  echo stripslashes($row[$column]);
?>
