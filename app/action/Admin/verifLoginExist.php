<?php
    
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    
    if(isset($_POST['login']))
    {
        $test = false;
        $admin = new Admin();
        foreach($admin->getAll() as $v)
        {
            if($v{'login'} == $_POST['login'])
            {
                $test = true;
                break;
            }
        }
        if($test == true)
        {
            echo 1; // if the login is exist
        }
        else
        {
            echo 0; // if the login is not exist
        }
    }
    else
    {
        echo "Error : You should enter the parameter 'email'";
    }
    
?>