<?php
  function html_header($pageTitle) {
    echo "<html><head><title>$pageTitle</title></head><body>";
  }

  function calculate_tax($salary, $rate) {
    return $salary * ($rate / 100);
  }

  function html_footer() {
    echo "</body></html>";
  }
?>
