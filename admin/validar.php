<?php



$email=$_POST['email'];
$clave=$_POST['clave'];

//conectar a la base de datos
//$conn=mysqli_connect("localhost","root","admin","PielCanela");
include("conexion.php");

$consulta="SELECT * FROM usuarios WHERE email='$email' and password='$clave'";
$resultado = mysqli_query($link,$consulta);



$filas=mysqli_num_rows($resultado);
if($filas>0){
    session_start();
    $_SESSION['email'] = $email;
    header("location:dashboard.php");
}else {
    echo "<script> alert('Este usuario no existe, intente denuevo'); 
    window.location.href='index.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($link);


?>
