<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Client.php');
    require_once('../../session/sessionClient.php');
    $client = new Client();

    if((isset($_POST['login'])) AND (isset($_POST['password'])))
    {
        $test = false;
        foreach($client->getAll() as $v)
        {
            if($_POST['login'] == $v{'login'})
            {
                if(sha1($_POST['password']) == $v{'password'})
                {
                    $client->setLogin($_POST['login']);
                   $client->setPassword($_POST['password']);
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
            $session = new SessionClient();
            $session->connect($client->getLogin(),$client->getPassword(),'../../../Client/index.php',3600);
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