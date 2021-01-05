<?php
require_once("../modelo/productosH_m.php");

$cate=new productos_modelo();


$categoria = $_GET["categoria"];
echo $categoria;
$datos = $cate->get_productoCat($categoria);

require_once "../vista/ver_productos.php";
?>