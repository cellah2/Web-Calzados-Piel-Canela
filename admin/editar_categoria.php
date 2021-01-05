<?php
session_start();
$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
	header("Location: index.php");
    die();
}
include("conexion.php");


if(isset($_GET['id_categoria'])){
    $id = $_GET['id_categoria'];
    $query = "SELECT * FROM categorias WHERE cod_categoria = $id";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $id_cat = $row['cod_categoria'];
        $nom_cat = $row['nombre'];
    }

}
if (isset($_POST['update'])){
    $id = $_GET['id_categoria'];
    $id_cate = $_POST['id_categoria'];
    $nombre_cate = $_POST['nombre_categoria'];


    $query = "UPDATE categorias set cod_categoria=$id_cate, nombre='$nombre_cate' WHERE cod_categoria = $id";
    mysqli_query($link,$query);

    $_SESSION['message'] = "Categoria editada satisfactoriamente !";
    $_SESSION['message_type'] = "warning";
    header("Location: categorias.php");

}

?>

<?php include("includes/header.php"); ?>

<section>
    <div class="container-fluid">
        
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mt-5 ml-auto">

<div class="col-auto col-lg-8 mx-auto">

<div class="card border-success">
                    <div class="card-header bg-success text-white">
                        <strong><i class="fa fa-pencil"></i>Editar Categoria</strong>
                    </div>
                    <div class="card-body">
                        <form action="editar_categoria.php?id_categoria=<?php echo $_GET['id_categoria']; ?>" method="post">
                            <div class="form-group col-auto">
                                <label for="id_categoria" class="col-form-label">ID: (dejar en blanco para autoasignar)</label>
                                <input type="number" class="form-control border border-primary" id="id_categoria" name="id_categoria" value="<?php echo $id_cat; ?>" placeholder="omitir si no sabe...">
                            </div>
                            <div class="form-group col-auto">
                                <label for="nombre_categoria" class="col-form-label">Nombre de la Categoria</label>
                                <input type="text" class="form-control border border-primary" id="nombre_categoria" name="nombre_categoria" value="<?php echo $nom_cat; ?>" placeholder="Nombre..." required>
                            </div>
                            <button name="update" class="btn btn-primary btn-lg"><i class="fa fa-check-circle"></i> Guardar</button>
                            <a href="" class="btn btn-danger btn-delete" data-toggle="modal" data-target="#eliminar"><i class="fa fa-trash"></i>Eliminar Categoria</a>
                        </form>

                    </div>
                </div>

                </div>
                </div>
</div>
</section>


    <!-- modal -->
    <div class="modal fade" id="eliminar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Estas seguro/a que quieres eliminar esta categoria?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                </div>
                <div class="modal-body">
                    Presiona SI para eliminarla.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">No, no quiero</button>
                    <a href="/admin/eliminar_categoria.php?id=<?php echo $id;?>"><button class="btn btn-danger" type="button">SI</button></a> 
                </div>
            </div>
        </div>

    </div>

<?php include("includes/footer.php"); ?>