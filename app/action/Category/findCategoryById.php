<?php
    $category= new Category();
    if( isset($_GET['id']))
    {
        $category=$category->findCathegoryById($_GET['id']);        
    }
?>