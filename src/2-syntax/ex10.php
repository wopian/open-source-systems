<?php
  $myMarks["Year 1"] = 55;
  $myMarks["Year 2"] = 65;
  $myMarks["Year 3"] = 75;
?>

<html>
  <head>
    <title>Data in table</title>
  </head>
  <body>
    <table border=1 align=center>
      <tr>
        <th>Index</th>
        <th>Subject</th>
      </tr>
      <?php
        while(list($index, $value) = each($myMarks)) {
          echo "<tr><td>$index</td><td>$value</td></tr>";
        }
      ?>
    </table>
    <?php echo "<br>My best year was Year 3 when I averaged " . $myMarks["Year 3"]; ?>
  </body>
</html>
