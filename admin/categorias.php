<?php 
session_start();

$varsession = $_SESSION['email'];
if($varsession == null || $varsession=''){
    echo 'No esta autorizado';
    die();

}
include("conexion.php");
include("includes/header.php");
?>

<section>
    <div class="container-fluid w-auto">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-9 mt-5 ml-auto mb-2">
            <?php 
                if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" data-auto-dismiss="1000" id="success-alert" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
                </div>
                <?php } ?>

                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categorias</li>  
                        </ol>
                </nav>

        <div class="row">
            <div class="col-xl-5 col-md-6 col-sm-5">
                <h4>Listado de categorias</h3>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                        Categoria
                        <span>Productos</span>
                        <span>Acción</span>
                    </li>
        <?php 
            $query_categorias = "SELECT * FROM categorias";
            $res = $link->query($query_categorias);
            while($mostrar=$res->fetch_assoc()){
                $id = $mostrar['cod_categoria'];
                $query_productos = "SELECT * FROM productos WHERE categoria=$id or categoria2=$id";
                $result = mysqli_query($link,$query_productos);
                $rcount = mysqli_num_rows($result);
        ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $mostrar['cod_categoria'] ?> - <?php echo $mostrar['nombre'] ?>
                        <span class="badge badge-success badge-pill"><?php echo $rcount; ?></span>
                        <a href="editar_categoria.php?id_categoria='<?php echo $id ?>'"><span class="badge badge-warning badge-pill">Editar</span></a>
                    </li>
            <?php } ?>
                </ul>
            </div>

            <div class="col-xl-5 col-md-6 col-sm-7">
                <div class="card border-success">
                    <div class="card-header bg-success text-white">
                        <strong><i class="fa fa-plus"></i>Crear Categoria</strong>
                    </div>
                    <div class="card-body">
                        <form action="crear_categoria.php" method="post">
                            <div class="form-group col-auto">
                                <label for="id_categoria" class="col-form-label">ID:</label>
                                <input type="number" class="form-control border border-success" id="id_categoria" name="id_categoria" placeholder="codigo categoria..." required>
                            </div>
                            <div class="form-group col-auto">
                                <label for="nombre_categoria" class="col-form-label">Nombre de la Categoria</label>
                                <input type="text" class="form-control border border-success" id="nombre_categoria" name="nombre_categoria" placeholder="Nombre..." required>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Guardar</button>

                        </form>

                    </div>
                </div>
            </div>

        </div>

            </div>
        </div>
        
    </div>
    
</section>
<?php include("includes/footer.php"); 
unset($_SESSION["message"]);
?>