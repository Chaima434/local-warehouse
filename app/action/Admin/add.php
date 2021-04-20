<?php

    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    require_once('../../session/session.php');
    // NB: toujours on doit declarer Connection.php et Admin.php
    if((isset($_POST['login']))&& (isset($_POST['first_name']))&&(isset($_POST['last_name']))&&(isset($_POST['email']))
        &&(isset($_POST['address']))  &&(isset($_POST['password']))
    )
    {
        $admin = new Admin();
        $admin->setLogin($_POST['login']);
        $admin->setFirst_name($_POST['first_name']);
        $admin->setLast_name($_POST['last_name']);
        $admin->setEmail(strtolower($_POST['email'])); // we should the email to a lowercase
        $admin->setAddress($_POST['address']);
        $admin->setPassword(sha1($_POST['password']));
        if($admin->add() == 1)
        {
            echo "good";
            $session = new Session();
            $session->connect($admin->getLogin(),$admin->getPassword(),'../../../Admin/index.php',3600);
        }
        else
        {
            echo "bad";
        }
    }
    else
    {
        echo "Error";
    }
?>