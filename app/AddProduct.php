<?php
include_once('Controllers/ElectronicItems.php');
include_once('Config/Constants.php');
include_once('Controllers/Controler.php');
include_once('Controllers/Television.php');
include_once('Controllers/Microwave.php');

if(isset($_POST)){
        $products = Products;
        if(is_array($products[$_POST['productType']])){
             $price  = $products[$_POST['productType']][$_POST['productName']];
        }else{
            $price = $products[$_POST['productType']];
        }
        print_r($price);
}


