<?php
    require_once("modelo/nosotros_m.php");
    $prod=new nosotros_modelo();
    $datos=$prod->nosotros_texto();

    //var_dump($datos);    
    require_once("vista/nosotros_v.php");
?>