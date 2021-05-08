<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Product.php');
    
    if(isset($_POST['id']))
    {
        $product= new Product();
        if($product->delete($_POST['id']) == 1)
        {
            echo "Delating of new product successfully has been completed";
        }
        else
        {
            echo "Error of delating ";
        } 
    }
    else
    {
        echo "error";
    }
?>
