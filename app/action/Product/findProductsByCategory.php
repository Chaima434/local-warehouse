<?php

    $product = new Product();
    $provider = new Provider();
    if(isset($_GET['category']))
    {
        $cat = $_GET['category'];
    }
    if (isset($_GET['id']))
    {
        $listProduct = $product->findProductsByCategory($_GET['id']);
    }
    
?>