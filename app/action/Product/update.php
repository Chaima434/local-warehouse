<?php
    session_start();
    require_once('../../connection/Connection.php');
    require_once('../../model/Product.php');
    
    function convert_to_base64($file)
    {
        $path = $_FILES['image']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return  'data:image/' . $type . ';base64,' . base64_encode($data);
    }
    
    if((isset($_POST['id']) ) && ( isset($_POST['label']) ) && ( isset($_POST['description']) ) && ( isset($_POST['number']) ) && ( isset($_POST['price']) )
        &&( isset($_POST['idCat']) ) && ( isset($_POST['idProvider'])))
    {
        $product= new Product();
        $product->setLabel($_POST['label']);
        $product->setDescription($_POST['description']);
        $product->setNumber($_POST['number']);
        $product->setPrice($_POST['price']);
        $product->setIdCat($_POST['idCat']);
        $product->setidProvider($_POST['idProvider']);

        if($product->update($_POST['id']) == 1)
        {
            echo "Updating the product has been completed";
        }
        else
        {
            echo "Error of updating";
        }
    }
    //else
    {
        echo "Error";
    }
    
 ?>