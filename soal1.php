<?php 

$array_produk = array(
    "itemId" => "12341822",
    "itemName" => "FGX Flannel Shirt",
    "price" => 195000,
    "availableColor" => array(
        array(
            "color" => "blue-black",
            "size" => array("S", "M", "L")
        ),
        array(
            "color" => "black-white",
            "size" => array("L")    
        )
    ),
    "freeShipping" => false
);

header('Content-Type: application/json');
echo json_encode($array_produk);


?>