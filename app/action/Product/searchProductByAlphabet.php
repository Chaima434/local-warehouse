<?php
    $T = array();
    $product = new Product();
    if(isset($_POST['search']))
    {
        $T = $product->searchProductByAlphabet($_POST['search']);
    }
    else
    {
        echo "Error";
    }
?>