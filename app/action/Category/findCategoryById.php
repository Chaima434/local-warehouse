<?php
    if( isset($_GET['id']))
    {
        $category= new Category();
        $category=$category->findCathegoryById($_GET['id']);
        
    }
?>