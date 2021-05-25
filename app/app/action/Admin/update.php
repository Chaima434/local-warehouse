<?php
    session_start();
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    if((isset($_POST['login']))&& (isset($_POST['first_name']))&&(isset($_POST['last_name']))&&(isset($_POST['email']))
        &&(isset($_POST['address'])))
    {
        $admin = new Admin();
        $admin->setLogin($_POST['login']);
        $admin->setFirst_name($_POST['first_name']);
        $admin->setLast_name($_POST['last_name']);
        $admin->setEmail(strtolower($_POST['email'])); // we should convert the email into lowercase
        $admin->setAddress($_POST['address']);
        if($admin->update($_SESSION['login']))
        {
            echo "good";
            $_SESSION['login'] = $admin->getLogin();
            header ('location: ../../../Admin/updateProfile.php?page=updateInfo');
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