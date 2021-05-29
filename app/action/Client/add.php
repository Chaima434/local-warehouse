<?php

    require_once('../../connection/Connection.php');
    require_once('../../model/Client.php');
    require_once('../../session/sessionClient.php');
    // NB: toujours on doit declarer Connection.php et Admin.php
    //if
    //(
      // (isset($_POST['login']))&& (isset($_POST['first_name']))&&(isset($_POST['last_name']))&&(isset($_POST['email']))
      //  &&(isset($_POST['address']))  &&(isset($_POST['password']))
    //)
    {
        $client= new Client();
        $client->setLogin($_POST['login']);
        $client->setFirst_name($_POST['first_name']);
        $client->setLast_name($_POST['last_name']);
        $client->setEmail(strtolower($_POST['email'])); // we should convert the email to a lowercase
        $client->setAddress($_POST['address']);
        $client->setPassword(sha1($_POST['password']));
        if($client->add() == 1)
        {
            echo "good";
            $session = new SessionClient();
            $session->connect($client->getLogin(),$client->getPassword(),'../../../Client/index.php',3600);
        }
        else
        {
            echo "bad";
        }
    }
    //else
    //{
      //  echo "Error";
    //}
?>