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

  $txtName = $_POST[txtname];
  $txtEmail = $_POST[txtemail];
  $txtPhoneNumber = $_POST[txttelno];

  $query = "UPDATE test SET email=?,phone_number=? WHERE name=?";

  $sql = $db->prepare($query);
  $sql->bind_param('sis', $txtEmail, $txtPhoneNumber, $txtName);
  $sql->execute();

  printf("%d row updated.", $sql->affected_rows);
?>
