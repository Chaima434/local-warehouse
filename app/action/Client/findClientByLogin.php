<?php
    $client = new Client();
    $client = $client->findClientByLogin($_SESSION['loginClient']);
?>