<?php 
session_start();
include("conexion.php");

$cod_prod= $_POST['cod_prod'];
$nombre= $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$temporada = $_POST['temporada'];
$categoria = $_POST['categoria'];
$categoria2 = $_POST['categoria2'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$talla = $_POST['talla'];
$insumos = $_POST['insumos'];
$taco = $_POST['taco'];
$plataforma = $_POST['plataforma'];
$destacado = $_POST['destacado'];
$disponible = $_POST['disponible'];




if(isset($_FILES['imagen'])){

        $file = $_FILES['imagen'];
        $filename = $file['name'];
        $mimetype = $file['type'];


        if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

            if(!is_dir('../uploads/images')){
                          mkdir('../uploads/images', 0777, true);
                      }

            move_uploaded_file($file['tmp_name'], '../uploads/images/'.$filename);
    
                  }
}
$query = "INSERT INTO productos (id,cod_prod,nombre,descripcion,temporada,categoria,categoria2,color,precio,talla,insumos,taco,plataforma,destacado,disponible,imagen) VALUES (NULL,'$cod_prod','$nombre','$descripcion','$temporada',$categoria,$categoria2,'$color',$precio,'$talla','$insumos','$taco','$plataforma',$destacado,$disponible,'$filename')";






mysqli_query($link,$query);

    $_SESSION['message'] = "Su producto fue agregado correctamente!";
    $_SESSION['message_type'] = "success";
    header("Location: mostrar_productos.php");

?>