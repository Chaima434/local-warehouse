<?php
require_once ('../../connection/Connection.php');
require_once ('../../model/Category.php');
if((isset($_POST['label'])) && (isset($_POST['description'])))
{
    $c=new Category ();
    $c->setLabel($_POST['label']);
    $c->setDescription($_POST['description']);
    if ($c->add()==1)
    {
        echo "insertion effectuee avec succees";
    
    }
    else {
        echo "erreur";
    }
}
else {
    echo "erreur";
}
?>
