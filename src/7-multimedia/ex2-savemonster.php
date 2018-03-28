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

  $name = $_POST['txtname'];
  $image = $_FILES['monsterimage']['tmp_name'];
  $audio = $_FILES['monsteraudio']['tmp_name'];

  // Get binary file data
  $imagedata = addslashes(file_get_contents($image));
  $audiodata = addslashes(file_get_contents($audio));

  // bind_param accepts only variables
  $null = NULL;

  $query = "INSERT INTO monster (name,image,audio) VALUES (?,?,?)";
  $sql = $db->prepare($query);
  $sql->bind_param('sbb', $name, $null, $null);
  $sql->send_long_data(1, $imagedata);
  $sql->send_long_data(2, $audiodata);
  $sql->execute();
?>
