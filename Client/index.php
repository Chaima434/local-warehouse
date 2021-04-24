<?php
require_once('../app/session/sessionClient.php');
  $s = new SessionClient();
  $s->afterConnection();
?>

<a href="logout.php"> Logout </a>
<?php
    echo "user connector is ".$_SESSION['loginClient'];
    
    
?>