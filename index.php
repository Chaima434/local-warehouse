<?php

    session_start();
    if(isset($_SESSION['login']))
    {
        header("location: Admin/");
    }
    else
    {
        if(isset($_SESSION['loginClient']))
        {
            header("location: Client/");
        }
        else
        {
            header("location: Public/");
        }
    }
?>