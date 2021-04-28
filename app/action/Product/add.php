<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Product.php');
    session_start ();
    
    function convert_to_base64($file)
    {
        $path = $_FILES['photo']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return  'data:image/' . $type . ';base64,' . base64_encode($data);
    }
    
    if(( isset($_POST['label']) ) && ( isset($_POST['description']) ) && ( isset($_POST['number']) ) && ( isset($_POST['price']) )
        && ( isset($_FILES['photo']) ) &&( isset($_POST['idCat']) ) && ( isset($_POST['idProvider']) ) && ( isset($_SESSION['login']) ))
    {
        $product= new Product();
        $product->setLabel($_POST['label']);
        $product->setDescription($_POST['description']);
        $product->setNumber($_POST['number']);
        $product->setPrice($_POST['price']);
        $product->setPhoto(convert_to_base64($_FILES['photo']));
        $product->setIdCat($_POST['idCat']);
        $product->setidProvider($_POST['idProvider']);
        $product->setlogin($_SESSION['login']);
    
        if($product->add() == 1)
        {
            echo "Insertion of new product successfully has been completed";
        }
        else
        {
            echo "Error of insertion";
        }
    }
    else
    {
        echo "Error";
    }
    
 ?>