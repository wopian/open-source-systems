<?php
  include('ex8-functions.php');
  html_header('My first function demo');
  printf("I pay £%d in tax<br>", calculate_tax(15000, 21, 11800));
  printf("I pay £%d in tax (no allowance)", calculate_tax(15000, 21));
  html_footer();
?>
