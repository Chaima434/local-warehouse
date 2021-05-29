<?php
  require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>
<!DOCTYPE html>
<html>
  <?php
    require_once('template/headPrincipal.php');
  ?>
  <body>
    <?php
      require_once('template/navbar.php');
      activePage("");
    ?>
  </body>
</html>