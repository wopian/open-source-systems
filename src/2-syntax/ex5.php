<?php
  if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false) {
    echo "You are using Internet Explorer";
  } else {
    echo "Why are you not using Internet Explorer?";
  }
?>
