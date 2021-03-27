<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    require_once('../../session/session.php');
    $admin = new Admin();
    //echo json_encode($admin->getAll());
    if((isset($_POST['login'])) AND (isset($_POST['password'])))
    {
        $test = false;
        foreach($admin->getAll() as $v)
        {
            if($_POST['login'] == $v{'login'})
            {
                if(sha1($_POST['password']) == $v{'password'})
                {
                    $admin->setLogin($_POST['login']);
                    $admin->setPassword($_POST['password']);
                    $test = true;
                    break;
                }
                else
                {
                    echo "Verif your password <br>";
                    break;
                }
            }
        }
        if($test == true)
        {
            $session = new Session();
            $session->connect($admin->getLogin(),$admin->getPassword(),'../../../Admin/index.php',3600);

        }
        else
        {
            echo "Your login or password are incorrect";
        }
    }
    else
    {
        echo "Error";
    }
?>