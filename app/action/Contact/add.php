<?php

    require_once ('../../connection/Connection.php');
    require_once ('../../model/Contact.php');
    
    if((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['message'])))
    {
        $contact = new Contact();
        $contact->setName($_POST['name']);
        $contact->setEmail($_POST['email']);
        $contact->setMessage($_POST['message']);
        if($contact->add() == 1)
        {
            echo "Your message has been sent";
        }
        else
        {
            echo "Error of insertion";
        }
    }
    else
    {
        echo "Error :  There are 3 POST";
    }
?>