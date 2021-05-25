<?php

    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    
    if(isset($_POST['email']))
    {
        $admin = new Admin();
        $test = false;
        foreach($admin->getAll() as $v)
        {
            if($v{'email'} == strtolower($_POST['email']))
            {
                $test = true;
                break;
            }
        }
        if($test == true)
        {
            echo 1; // 1 if this email is exist
        }
        else
        {
            echo 0; // 0 if this email is not exist
        }
    }
    else
    {
        echo "Error : You should enter the parameter 'email'";
    }
    
?>