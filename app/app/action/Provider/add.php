<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Provider.php');
    
    if((isset($_POST['first_name'])) && (isset($_POST['last_name']))
       && (isset($_POST['email'])) && (isset($_POST['address'])) && (isset($_POST['telephone'])))
    {
        $provider = new Provider();
        $provider->setFirst_name($_POST['first_name']);
        $provider->setLast_name($_POST['last_name']);
        $provider->setEmail($_POST['email']);
        $provider->setAddress($_POST['address']);
        $provider->setTelephone($_POST['telephone']);
        if($provider->add() == 1)
        {
            echo "Insertion of new provider successfully has been completed";
        }
        else
        {
            echo "Error of insertion";
        }
    }
    else
    {
        echo "Error";
    }
?>  