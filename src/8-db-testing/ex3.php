<?php
  date_default_timezone_set('Europe/London');
  $lottoDate = date("Ymd");

  echo "The lottery numbers for $lottoDate are:";

  for ($n = 1; $n < 7; $n++) {
    $number[$n] = rand(1,49);
    echo "<br>$number[$n]";
  }

  $hostname = "localhost";
  $username = "21606555";
  $password = "mysqluser";
  $database = "db1_21606555";
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
  }

  $query = "INSERT INTO lotto (lottodate,number1,number2,number3";
  $query.= ",number4,number5,number6) VALUES (?,?,?,?,?,?,?)";
  $sql = $db->prepare($query);
  $sql->bind_param(
    'siiiiii',
    $lottoDate,
    $number[1],
    $number[2],
    $number[3],
    $number[4],
    $number[5],
    $number[6]
  );
  $sql->execute();

  echo "<br>This weeks numbers have been saved";
?>
