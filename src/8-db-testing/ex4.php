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

  if ($_POST[selweek]) {
    $query = "SELECT * FROM lotto WHERE wk=?";
    $sql = $db->prepare($query);
    $sql->bind_param('i', $_POST[selweek]);
    $sql->execute();
    $sql->bind_result(
      $wk,
      $lottodate,
      $number1,
      $number2,
      $number3,
      $number4,
      $number5,
      $number6
    );
    $sql->fetch();

    date_default_timezone_set('Europe/London');
    $date = date("jS F, Y", strtotime($lottodate));
    printf("Lotto numbers for %s (week %s)<br>", $date, $wk);

    for ($n = 1; $n < 7; $n++) {
      // Dynamically referencing number1 to 6 with ${...}
      printf("Number %s is %s<br>", $n, ${'number' . $n});
    }
  } else {
    $query = "SELECT wk FROM lotto";
    $sql = $db->prepare($query);
    $sql->execute();
    $sql->bind_result($wk);

    echo "<form action='$_SESSION[PHP_SELF]' method='post'>";
    echo "<br>Select the lottery week: ";
    echo "<select name='selweek'>";

    while ($sql->fetch()) {
      echo "<option value='$wk'>$wk</option>";
    }

    echo "</select><br>";
    echo "<input type='submit' value='Select'>";
    echo "</form>";
  }
?>
