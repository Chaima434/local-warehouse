<?php

    session_start();
    if($_SESSION['login'])
    {
        header("location: Admin/");
    }
    else
    {
        if($_SESSION['loginClient'])
        {
            header("location: Client/");
        }
        else
        {
            header("location: Public/");
        }
    }
?>