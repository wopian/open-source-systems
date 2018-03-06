<?php
  $topModules[0] = "Internet Systems Development";
  $topModules[5] = "Programming 1";
  $topModules[10] = "Programming 2";
  $topModules[30] = "OOAD";
  $topModules[40] = "Software Engineering";

  while(list($index, $value) = each($topModules)) {
    echo "Index is $index and the value is $value<br>";
  }
?>
