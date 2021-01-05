<?php 
session_start();

$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
header("Location: index.php");
    die();
}
include("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `productos` WHERE `id` = $id";
    $result = mysqli_query($link,$query);
    
    if (!$result){
        $_SESSION['message'] = "No se pudo eliminar el producto";
        $_SESSION['message_type'] = "danger";
        die("Query Failed");
    }else{
    $_SESSION['message'] = "Producto con id: ".$id." eliminado correctamente";
    $_SESSION['message_type'] = "danger";
    }
    header("Location: mostrar_productos.php");
}


?>