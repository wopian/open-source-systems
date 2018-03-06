<?php
  $myMarks["CO400"] = 100;
  $myMarks["CO401"] = 65;
  $myMarks["CO410"] = 87;
  $myMarks["CO411"] = 98;
  $myMarks["CO422"] = 88;
  $myMarks["CO433"] = 68;
  $total = 0;

  while(list($index, $value) = each($myMarks)) {
    $total += $value;
    echo "for $index my grade was $value<br>";
  }

  $average = round($total / sizeof($myMarks));
  echo "<br>My average grade was $average";
?>
