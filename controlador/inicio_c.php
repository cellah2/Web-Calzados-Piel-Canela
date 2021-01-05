<?php
    require_once("modelo/inicio_m.php");
    $prod=new inicio_modelo();
    $datos=$prod->inicio_destacados();
    $destacados=$prod->destacados_texto();
    //var_dump($datos);    
    require_once("vista/inicio_v.php");
?>