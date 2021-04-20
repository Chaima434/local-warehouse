<?php

    function convert_to_base64($file)
    {
        $path = $_FILES['image']['tmp_name'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        return  'data:image/' . $type . ';base64,' . base64_encode($data);
    }
    
    if(isset($_FILES['image']))
    {
        echo convert_to_base64($_FILES['image']);
    }
    else
    {
        echo "Error";
    }
?>