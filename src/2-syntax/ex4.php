<!-- Speed camera advise script -->

<?php
  $points = 13;
  // Output appropriate message depending on points awarded.
  if ($points >= 12) {
    echo "Public transport is your best option.<br>";
  } elseif ($points >= 9) {
    echo "If you get caught you say your grandmother was driving.<br>";
  } else {
    echo "There is no need to worry about the speed limit.<br>";
  }
?>
