<?php
    $provider = new Provider();
    if($_GET['id'])
    {
        $provider = $provider ->findProviderById($_GET['id']);
    }
?>