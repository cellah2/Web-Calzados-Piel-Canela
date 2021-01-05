<?php
    require_once("modelo/productosH_m.php");
    $prod=new productos_modelo();

    $datos=$prod->get_productos();
    $hombre = $prod->get_hombre();
    $categorias = $prod->get_categorias();
    $cod = $_GET['categoria'];

    $productoCat = $prod->get_productoCat($cod);
    //var_dump($datos);    
    require_once("vista/productosH_v.php");
?>