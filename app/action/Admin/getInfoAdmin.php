<?php
    $admin = new Admin();
    foreach($admin->getAll() as $v)
    {
        if($_SESSION['login'] == $v{'login'})
        {
            $admin->setLogin($v{'login'});
            $admin->setFirst_name($v{'first_name'});
            $admin->setLast_name($v{'last_name'});
            $admin->setAddress($v{'address'});
            $admin->setEmail($v{'email'});
            break;
        }
    }
    

?>