<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    session_start ();
    if(($_POST['old_password']) && ($_POST['new_password']))
    {
        if(sha1($_SESSION['password']) == sha1($_POST['old_password']))
        {
            $admin = new Admin();
            $admin->setPassword(sha1($_POST['new_password']));
            if($admin->updatePassword($_SESSION['login']))
            {
                header ('location: ../../../Admin/logout.php');
            }
            else
            {
                echo "Error on query";
            }
        }
        else
        {
            echo "Verif your old password";
        }
    }
    else
    {
        echo "Error";
    }
?>