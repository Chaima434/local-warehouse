<?php
    require_once('../app/session/session.php');
    $session = new Session();
    $session->logOut();
?>