<?php
    session_start();
    require_once('../../connection/Connection.php');
    require_once('../../model/Client.php');
    if((isset($_POST['login']))&& (isset($_POST['first_name']))&&(isset($_POST['last_name']))&&(isset($_POST['email']))
        &&(isset($_POST['address'])))
    {
        $client = new Client();
        $client->setLogin($_POST['login']);
        $client->setFirst_name($_POST['first_name']);
        $client->setLast_name($_POST['last_name']);
        $client->setEmail(strtolower($_POST['email'])); // we should convert the email into lowercase
        $client->setAddress($_POST['address']);
        if($client->update($_SESSION['loginClient']))
        {
            echo "good";
            $_SESSION['loginClient'] = $client->getLogin();
            header ('location: ../../../Client/profile.php');
        }
        else
        {
            echo "Bad";
        }
    }
    else
    {
        echo "Error";
    }
?>