<?php
    if(isset($_GET['id']))
    {
        $product = new Product();
        $product = $product->findProductById($_GET['id']);
    }
    else
    {
        header('location : Product_Management.php?page=list');
    }
?>