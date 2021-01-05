<?php 


session_start();

$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
    die();
}

include("conexion.php");
include("includes/header.php");

//$conn=mysqli_connect("localhost","root","admin","PielCanela");


$consulta="SELECT * FROM productos";
$resultado = mysqli_query($link,$consulta);
$rcount=mysqli_num_rows($resultado);


$consulta_cat="SELECT * FROM categorias";
$resultado_cat = mysqli_query($link,$consulta_cat);
$rcount_cat=mysqli_num_rows($resultado_cat);

$consulta_dest="SELECT * FROM productos WHERE destacado=1";
$resultado_dest = mysqli_query($link,$consulta_dest);
$rcount_dest=mysqli_num_rows($resultado_dest);

$correo = $_SESSION['email'];
$consulta_name="SELECT nombre FROM usuarios WHERE email = '$correo'";
$resultado_name = $link->query($consulta_name);
//$resultado_name = mysqli_query($link,$consulta_name);

?>


<section>
<div class="container-fluid">
            <div class="row mt-1">
                <div class="col-xl-10 col-lg-9 col-md-8 mt-5 ml-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>  
                        </ol>
                    </nav>
                    <h3>Hola <?php 
                    if ($resultado_name) {
                    while ($fila = $resultado_name->fetch_row()) {
                        echo $fila[0];
                    }
                }                  
                    ?>, bienvenido/a al Panel de Administracion de Calzados Piel Canela.</h3>
                    

                    <section>
                    <div class="row pt-5 mt-3 mb-5">
                            <div class="col-sm-6 p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                            <div class="text-right text-secondary">
                                            <h5>Cantidad de Productos</h5>
                                            <h3><?php echo $rcount ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Actualizado ahora</span>
                                    </div>   
                                </div>
                            </div>
                            <div class="col-sm-6 p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                            <div class="text-right text-secondary">
                                            <h5>Ventas</h5>
                                            <h3>$135.000</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Actualizado ahora</span>
                                    </div>   
                                </div>
                            </div>
                            <div class="col-sm-6 p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-users fa-3x text-info"></i>
                                            <div class="text-right text-secondary">
                                            <h5>Categorias</h5>
                                            <h3><?php echo $rcount_cat ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Actualizado ahora</span>
                                    </div>   
                                </div>
                            </div>
                            <div class="col-sm-6 p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-chart-line fa-3x text-danger"></i>
                                            <div class="text-right text-secondary">
                                            <h5>Destacados</h5>
                                            <h3><?php echo $rcount_dest ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                        <i class="fas fa-sync mr-3"></i>
                                        <span>Actualizado ahora</span>
                                    </div>   
                                </div>
                            </div>
                            
                        </div>
                    </section>

                
                </div>
            </div>
</div>
    </section>


<?php include("includes/footer.php") ?>