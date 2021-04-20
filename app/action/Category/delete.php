<?php
require_once ('../../connection/Connection.php');
    require_once ('../../model/Category.php');
    if(isset($_POST['id']))
    {
        $category= new Category();
        if ($category->delete($_POST['id']))
        {
            echo "Deleting of category successfully has been completed";  
        }
        else
        {
            echo "message error of deleting" ;
        }
    }
    
    else
    {
        echo "error";
    }
?>
