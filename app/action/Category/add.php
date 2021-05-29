<?php
    require_once ('../../connection/Connection.php');
    require_once ('../../model/Category.php');
    
    if((isset($_POST['label'])) && (isset($_POST['description'])))
    {
        $c=new Category ();
        $c->setLabel(ucfirst($_POST['label'])); //ucfirst mettre le 1er caratére majiscule
        $c->setDescription($_POST['description']);
        if ($c->add()==1)
        {
            echo "Insertion of new category successfully has been completed";
        }
        else
        {
            echo "Error of insertion";
        }
    }
    else
    {
        echo "Error : there are two post [label, description]";
    }
?>