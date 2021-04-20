<?php
        require_once ('../../connection/Connection.php');
    require_once ('../../model/Category.php');
    
    if((isset($_POST['label'])) && (isset($_POST['description'])&&( isset($_POST['id']))))
    {
        $c=new Category ();
        $c->setLabel($_POST['label']);
        $c->setDescription($_POST['description']);
        
        if ($c->update($_POST['id'])==1)
        {
            echo "Uppdating of category successfully has been completed";
        
        }
        else
        {
            echo "Error of insertion";
        }
    }
    else
    {
        echo "Error";
    }
?>