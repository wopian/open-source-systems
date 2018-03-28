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

  $query = "SELECT id,name FROM monster";
  $result = $db->query($query);

  echo "<table align='center' border='1'>";
  echo "<tr><th width='200' align='left'>ID</th>";
  echo "<th width='200' align='left'>Name</th>";
  echo "<th>Audio</th><th>Image</th></tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>$row[id]</td>";
    echo "<td>$row[name]</td>";
    echo "<td><a href='ex3-getwav.php?id=$row[id]'>Click to play</a></td>";
    echo "<td><img src='ex3-getjpg.php?id=$row[id]' height='100' width='100'></td>";
    echo "</tr>";
  }

  echo "</table>";
?>
