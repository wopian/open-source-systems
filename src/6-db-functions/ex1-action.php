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

  $txtName = $_POST[txtName];
  $txtEmail = $_POST[txtEmail];
  $txtPhoneNumber = $_POST[txtPhoneNumber];

  $query = "INSERT INTO test (name,email,phone_number) VALUES (?,?,?)";
  $sql = $db->prepare($query);
  $sql->bind_param('ssi', $txtName, $txtEmail, $txtPhoneNumber);
  $sql->execute();

  $result = $db->query("SELECT * from test");
  while ($row = $result->fetch_assoc()) {
    echo "$row[name] $row[email] $row[phone_number]<br>";
  }
?>
