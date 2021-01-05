<?php
    require_once("modelo/productosM_m.php");
    $prod=new productos_modelo();
    $datos=$prod->get_productos();
    $mujer = $prod->get_mujer();

    $categorias = $prod->get_categorias();
    $cod = $_GET['categoria'];

    $productoCat = $prod->get_productoCat($cod);
    //var_dump($datos);    
    require_once("vista/productosM_v.php");
?>