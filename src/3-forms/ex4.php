<html>
  <head>
    <title>My Guestbook</title>
  </head>
  <body>
    <h1>Welcome to my Guestbook</h1>
    <h2>Please write me a little note below</h2>

    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>
      <textarea cols='40' rows='5' name='note' wrap='virtual'></textarea>
      <input type='submit' value='Send it'>
    </form>

    <?php
      if (isset($_POST[note])) {
        // Substitute your login in place of "yourLogin"
        $fp = fopen('yourLogin.txt', 'a');
        fputs($fp, nl2br($_POST[note]) . '<br>');
        fclose($fp);
      }
    ?>
    <h2>The entries so far:</h2>

    <?php
      // Substitute your login in place of "yourLogin"
      @readfile('yourLogin.txt');
    ?>
