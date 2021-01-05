<?php 

include("conexion.php");
session_start();

$varsession = $_SESSION['email'];



$resultado = mysqli_query($conn,$consulta);

if($varsession==null || $varsession=''){
   
    echo 'Usted no tiene autorizacion';
    die();
}



include("includes/header.php");
?>

<section>
    <div class="container-fluid w-auto">
        <div class="row">
            
        <div class="col-xl-10 col-lg-9 col-md-8 mt-5 ml-auto">
        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Añadir Producto</li>  
                        </ol>
                    </nav>
        <div class="col-auto col-lg-8 mx-auto p-2">
        
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    <strong><i class="fa fa-plus"></i> Agregar Nuevo Producto</strong>
                </div>
                <div class="card-body">
                    <form action="anadir.php" method="post" enctype="multipart/form-data">
                         <div class="form-row">
                             <div class="form-group col-md-3">
                            <label for="cod_prod" class="col-form-label">Codigo Producto:</label>
                            <input type="text" class="form-control border border-success" id="cod_prod" name="cod_prod" placeholder="codigo..." required>
                            </div>


                            <div class="form-group col-md-9">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control border border-success" id="nombre" name="nombre" placeholder="Nombre..." required>
                            </div>
                        </div>
                            <div class="form-group col-auto">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" class="form-control border border-success" id="descripcion" name="descripcion" placeholder="Descripcion..." required>
                            </div>

                            <div class="form-group col-auto">
                            <label for="temporada" class="col-form-label">Temporada:</label>
                            <input type="text" class="form-control border border-success" id="temporada" name="temporada" placeholder="Temporada..." required>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="categoria">Categoria N°1:</label>
                            <select name="categoria" id="categoria" class="form-control border border-success">
                            <?php
$consulta="SELECT * FROM categorias";
$resultado = $link->query($consulta);
        
?>
                                <option selected>Selecciona la categoria principal...</option>
                                <?php while($mostrar=$resultado->fetch_assoc()){ ?>
                                <option value="<?php echo $mostrar['cod_categoria']?>"><?php echo $mostrar['cod_categoria']?> - <?php echo $mostrar['nombre'] ?></option>
        <?php } ?>
                            </select>
                        </div>

<!-- CATEGORIA2 -->
                        <div class="form-group col-md-6">
                            <label for="categoria2">Categoria N°2:</label>
                            <select name="categoria2" id="categoria2" class="form-control border border-success">
                            <?php
$consulta="SELECT * FROM categorias";
$resultado = $link->query($consulta);
        
?>
                                <option selected>Selecciona la categoria secundaria...</option>
                                <?php while($mostrar=$resultado->fetch_assoc()){ ?>
                                <option value="<?php echo $mostrar['cod_categoria']?>"><?php echo $mostrar['cod_categoria']?> - <?php echo $mostrar['nombre'] ?></option>
        <?php } ?>
                            </select>
                        </div>
                                </div>

                                <div class="form-row"> 
                            <div class="form-group col-md-4">
                            <label for="color" class="col-form-label">Color:</label>
                            <input type="text" class="form-control border border-success" id="color" name="color" placeholder="Color..." required>
                            </div>


                            <div class="form-group col-md-4">
                            <label for="precio" class="col-form-label">Precio: (ingrese solo numeros)</label>
                            <input type="text" class="form-control border border-success" id="precio" name="precio" placeholder="Precio ($)..." required>
                            </div>
                        
                            <div class="form-group col-md-4">
                            <label for="talla" class="col-form-label">Tallas:</label>
                            <input type="text" class="form-control border border-success" id="talla" name="talla" placeholder="TAlla..." required>
                            </div>
                                </div>
                                <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="insumos" class="col-form-label">Insumos:</label>
                            <input type="text" class="form-control border border-success" id="insumos" name="insumos" placeholder="insumos..." required>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="taco" class="col-form-label">Taco:</label>
                            <input type="text" class="form-control border border-success" id="taco" name="taco" placeholder="Taco..." required>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="plataforma" class="col-form-label">Plataforma:</label>
                            <input type="text" class="form-control border border-success" id="plataforma" name="plataforma" placeholder="Plataforma..." required>
                            </div>
                                </div>
                                <div class="form-row">
                            <div class="form-group col-md-3">
                            <label for="destacado" class="form-check-label">Destacado:</label>
                            <input type="text" class="form-control border border-success" id="destacado" name="destacado" placeholder = "1 o 0">
                            </div>
                            
                            <div class="form-group col-md-3">
                            <label for="disponible" class="form-check-label">Disponible:</label>
                            <input type="text" class="form-control border border-success" id="disponible" name="disponible" placeholder="1 o 0">
                            </div>        
                            <div class="form-group col-md-6">   
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen" />
                            </div>  
                                </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fa fa-check-circle"></i>Guardar</button>

                    </form>
                
                
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>

</section>

<?php include("includes/footer.php"); 


?>