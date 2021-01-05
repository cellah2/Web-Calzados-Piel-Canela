<?php
    require_once("modelo/producto_m.php");
    $cod = $_GET['cod'];
    $prod=new producto_modelo();
    $datos=$prod->get_producto($cod);

    //var_dump($datos);    
    require_once("vista/producto_v.php");
?>