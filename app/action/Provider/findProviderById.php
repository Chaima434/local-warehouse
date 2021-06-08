<?php
    $provider = new Provider();
    if(isset($_GET['id']))
    {
        $provider = $provider ->findProviderById($_GET['id']);
    }
?>