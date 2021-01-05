<?php
session_start();
$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
	header("Location: index.php");
    die();
}
include("conexion.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $cod_prod = $row['cod_prod'];
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $temporada = $row['temporada'];
        $categoria = $row['categoria'];
        $categoria2 = $row['categoria2'];
        $color = $row['color'];
        $precio = $row['precio'];
        $talla = $row['talla'];
        $insumos = $row['insumos'];
        $taco = $row['taco'];
        $plataforma = $row['plataforma'];
        $destacado = $row['destacado'];
        $disponible = $row['disponible'];
    }

}
if (isset($_POST['update'])){
    $id = $_GET['id'];
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



    $query = "UPDATE productos set cod_prod = '$cod_prod', nombre='$nombre', descripcion = '$descripcion', temporada = '$temporada', categoria=$categoria, categoria2=$categoria2, color = '$color', precio = $precio, talla = '$talla', insumos = '$insumos', taco = '$taco', plataforma = '$plataforma', destacado = $destacado, disponible = $disponible WHERE id = $id";
    mysqli_query($link,$query);

    $_SESSION['message'] = "Producto editado satisfactoriamente !";
    $_SESSION['message_type'] = "warning";
    header("Location: mostrar_productos.php");

}

?>

<?php include("includes/header.php"); ?>

<section>
    <div class="container-fluid">
        
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mt-5 ml-auto">
                <?php 
                if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
                </div>
                <?php } ?>
                
                <div class="col-auto col-lg-8 mx-auto">

                <div class="card border-warning">
                <div class="card-header bg-warning text-white">
                    <strong><i class="fa fa-pencil"></i> Editar Producto</strong>
                </div>

                    <div class="card card-body">
                        <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            
                        <div class="form-row"> 
                            <div class="form-group col-md-4">
                            <label for="cod_prod" class="col-form-label">Codigo Producto:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $cod_prod; ?>" id="cod_prod" name="cod_prod" placeholder="Cod producto..." required>
                            </div>


                            <div class="form-group col-md-8">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $nombre; ?>" id="nombre" name="nombre" placeholder="Nombre..." required>
                            </div>
                </div>

                            <div class="form-group col-auto">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $descripcion; ?>" id="descripcion" name="descripcion" placeholder="Descripcion..." required>
                            </div>

                            <div class="form-group col-auto">
                            <label for="temporada" class="col-form-label">Temporada:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $temporada; ?>" id="temporada" name="temporada" placeholder="Temporada..." required>
                            </div>
       <div class="form-row"> 
                            <div class="form-group col-md-6">
                            <label for="categoria">Categoria: selecciona una categoria</label>
                            <select name="categoria" id="categoria" class="form-control border border-success">
                            <?php
$consulta="SELECT * FROM categorias";
$resultado = $link->query($consulta);
        
?>
                                <option selected>Elegir...</option>
                                <?php while($mostrar=$resultado->fetch_assoc()){ ?>
                                <option value="<?php echo $mostrar['cod_categoria']?>"><?php echo $mostrar['cod_categoria']?> - <?php echo $mostrar['nombre'] ?></option>
        <?php } ?>
                            </select>
                        </div>

<!-- CATEGORIA2 -->
                        <div class="form-group col-md-6">
                            <label for="categoria2">Categoria 2: selecciona una segunda categoria</label>
                            <select name="categoria2" id="categoria2" class="form-control border border-success">
                            <?php
$consulta="SELECT * FROM categorias";
$resultado = $link->query($consulta);
        
?>
                                <option selected>Elegir...</option>
                                <?php while($mostrar=$resultado->fetch_assoc()){ ?>
                                <option value="<?php echo $mostrar['cod_categoria']?>"><?php echo $mostrar['cod_categoria']?> - <?php echo $mostrar['nombre'] ?></option>
        <?php } ?>
                            </select>
                        </div>
                                </div>

                                <div class="form-row"> 
                            <div class="form-group col-md-4">
                            <label for="color" class="col-form-label">Color:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $color; ?>" id="color" name="color" placeholder="Color..." required>
                            </div>


                            <div class="form-group col-md-4">
                            <label for="precio" class="col-form-label">Precio: (ingrese solo numeros)</label>
                            <input type="text" class="form-control border border-success" id="precio" name="precio" value ="<?php echo $precio; ?>" placeholder="Precio ($)..." required>
                            </div>
                        
                            <div class="form-group col-md-4">
                            <label for="talla" class="col-form-label">Talla:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $talla; ?>" id="talla" name="talla" placeholder="TAlla..." required>
                            </div>
                                </div>


                                  <div class="form-row"> 
                            <div class="form-group col-md-4">
                            <label for="insumos" class="col-form-label">Insumos:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $insumos; ?>" id="insumos" name="insumos" placeholder="insumos..." required>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="taco" class="col-form-label">Taco:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $taco; ?>" id="taco" name="taco" placeholder="Taco..." required>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="plataforma" class="col-form-label">Plataforma:</label>
                            <input type="text" class="form-control border border-success" value ="<?php echo $plataforma; ?>" id="plataforma" name="plataforma" placeholder="Plataforma..." required>
                            </div>
                                </div>

                        <div class="form-row"> 
                            <div class="form-group col-md-3">
                            <label for="destacado" class="col-form-label">Destacado:</label>
                            <input type="text" class="form-control border border-success" value ="1" id="destacado" name="destacado" placeholder="1 o 0">
                            </div>
                            
                            <div class="form-group col-md-3">
                            <label for="disponible" class="col-form-label">Disponible:</label>
                            <input type="text" class="form-control border border-success" value ="1" id="disponible" name="disponible" placeholder = "1 o 0">
                            </div>        
                            <div class="form-group col-md-6">   
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen" />
                            </div>  
                                </div>
                            <button class="btn-warning" name="update">
                                Actualizar Producto
                            </button>
                            <a class="btn-danger" role="button">
                                Cancelar edición
                                </a>
                        </form>
                    </div>
                    </div>
                </div>

                </div>
            </div>
    </div>

</section>

<?php include("includes/footer.php"); ?>