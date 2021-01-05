<?php
    require_once("modelo/productosH_m.php");
    $prod=new productos_modelo();
    if (isset($_GET['categoria'])){
        $cod = $_GET['categoria'];
    }
    $datos=$prod->get_productos();
    $hombre = $prod->get_hombre();
    $mujer = $prod->get_mujer();
    $categorias = $prod->nombre_categoria($cod);
    $allCategorias = $prod->get_categorias();
    $productoCat = $prod->get_productoCat($cod);
    //var_dump($datos);    
    require_once("vista/productos_v.php");
?>