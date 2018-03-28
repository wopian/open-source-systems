<?php
  include('ex7-functions.php');
  html_header('My first function demo');
  printf("I pay £%d in tax", calculate_tax(15000));
  html_footer();
?>
