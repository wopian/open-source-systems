<html>
  <body>
    <?php
      $hourlyRate = 5.75;
      $hoursPerWeek = 40;
      $gross = $hourlyRate * $hoursPerWeek;

      $taxRate = 1 - 0.22;
      $netWage = $gross * $taxRate;
      echo $netWage;
    ?>
  </body>
</html>
