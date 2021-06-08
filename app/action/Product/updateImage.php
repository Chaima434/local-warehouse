<?php
    
    require_once('../../connection/Connection.php');
    require_once('../../model/Product.php');
    
    function convert_to_base64($file)
    {
        $path = $_FILES['image']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return  'data:image/' . $type . ';base64,' . base64_encode($data);
    }
    
    if( ( isset($_FILES['image']) ) && ( isset($_POST['id']))) 
    {
        $product= new Product();
        $product->setPhoto(convert_to_base64($_FILES['image']));
        
        if($product->updateImage($_POST['id']) == 1)
        {
            echo "Updating of this picture has been completed";
        }
        else
        {
            echo "Error of updating";
        }
    }
    else
    {
        echo "Error";
    }
    
 ?>