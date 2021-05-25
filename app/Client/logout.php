<?php
    require_once('../app/session/sessionClient.php');
    $session = new SessionClient();
    $session->logOut();
?>