<?php
  function html_header($pageTitle) {
    echo "<html><head><title>$pageTitle</title></head><body>";
  }

  function calculate_tax($salary, $rate=40, $allowance=0) {
    return ($salary - $allowance) * ($rate / 100);
  }

  function html_footer() {
    echo "</body></html>";
  }
?>
