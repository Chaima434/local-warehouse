<?php
    $contact = new Contact();
    if(isset($_GET['id']))
    {
        $contact = $contact->findMessageById($_GET['id']);
    }
?>