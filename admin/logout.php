<?php
session_start();

session_unset();

session_destroy();
$_SESSION['email'] = '';
$_SESSION['clave'] = '';
header('Location:index.php');



?>
