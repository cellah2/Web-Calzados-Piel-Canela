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
    $id_categoria = $_GET['id'];
    //$id_categoria = (int)$id_categoria;
    $query = "DELETE FROM categorias WHERE cod_categoria = $id_categoria";
    $result = mysqli_query($link,$query);
    //var_dump($id_categoria);
    if (!$result){
         $_SESSION['message'] = "No se pudo eliminar la categoria, tienes productos asociados a ésta !!";
         $_SESSION['message_type'] = "danger";
         //die("Query Failed");
     }else {    
         $_SESSION['message'] = "Categoria eliminada correctamente";
         $_SESSION['message_type'] = "success";}
    
     header("Location: categorias.php");
}


?>