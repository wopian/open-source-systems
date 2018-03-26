<?php
  include('class_lib.php');

  $stefan = new person();
  $stefan->set_name('Stefan Mischook');
  echo 'Stefan\'s full name: ' . $stefan->get_name();

  $jimmy = new person;
  $jimmy->set_name('Nick Waddles');
  echo 'Nick\'s full name: ' . $jimmy->get_name();
  ?>
