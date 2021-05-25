<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Provider.php');
    
    if(isset($_POST['id']))
    {
        $provider = new Provider();
        if($provider->delete($_POST['id']) == 1)
        {
            echo "Deleting of provider successfully has been completed";
        }
        else
        {
            echo "Error of deleting";
        }
    }
    else
    {
        echo "Error";
    }
?>