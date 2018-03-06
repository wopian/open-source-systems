<?php
  if ($_POST["txtage"] < 21) {
    echo "You are under 21 years old";
  } else {
    echo "You are 21 years old or over";
  }

  if ($_POST["radsex"] == "male") {
    echo " and male";
  } else {
    echo " and female";
  }
?>
