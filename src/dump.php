<?php
function shutdown(){
  var_dump(error_get_last());
}

register_shutdown_function('shutdown');
?>
