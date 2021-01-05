<?php 
session_start();
$varsession = $_SESSION['email'];
if($varsession==null || $varsession=''){
    echo 'Usted no tiene autorizacion';
	header("Location: index.php");
    die();

}
include("conexion.php"); 
include("includes/header.php");
?>

<section>
<?php 
  $busqueda = '';
  $search_categoria='';
  if (empty($_REQUEST['busqueda']) && empty($_REQUEST['categoria']))
  {
    header("location: mostrar_productos.php");
  }

?>
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 mt-5 ml-auto">
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
                        <li class="breadcrumb-item active" aria-current="page">Lista de Productos</li>  
                        </ol>
                    </nav>
                <table id = "tabla" class="table table-striped table-hover table-bordered table-sm bg-white">
        <thead>
          <tr>
         <!--   <td>ID</td>   --> 
            <td>COD</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>TEMPORADA</td>
            <td>CATEGORIA</td>
            <td>CATEGORIA 2</td>
            <td>COLOR</td>
            <td>PRECIO</td>
            <td>TALLA</td>
            <td>INSUMOS</td>
            <td>TACO</td>
            <td>PLATAFORMA</td>
            <td>DESTACADO</td>
            <td>DISPONIBLE</td>
            <td>IMAGEN</td>
            <td>OPERACIONES</td>
          </tr>
        </thead>
        <?php

          //paginador
          $sql_totales = $link->query("SELECT COUNT(*) as total_registro FROM productos");
          $result_registros = mysqli_fetch_array($sql_totales);
          $total_registro = $result_registros['total_registro'];

          $por_pagina = 6;

          if(empty($_GET['pagina']))
          {
            $pagina = 1;
          }else{
            $pagina = $_GET['pagina'];
          }

          $desde = ($pagina-1) * $por_pagina;
          $total_paginas = ceil($total_registro / $por_pagina);


$consulta="SELECT * FROM productos";
$resultado = $link->query($consulta);

?>
        <tbody>
        <?php
        while($mostrar=$resultado->fetch_assoc()){

          $cod_prod = $mostrar['id'];
        ?>
          <tr>

            <td><?php echo $mostrar['cod_prod'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td><?php echo $mostrar['temporada'] ?></td>
<td>
<?php $cat = $mostrar['categoria'];
$var=mysqli_query($link,"SELECT * from categorias where cod_categoria=$cat");
$ext = $var->fetch_array();

echo $ext['nombre'];

?>
</td>
<td>
<?php $cat2 = $mostrar['categoria2'];
$var2=mysqli_query($link,"SELECT * from categorias where cod_categoria=$cat2");
$ext2 = $var2->fetch_array();

echo $ext2['nombre'];

?>
</td>
<td><?php echo $mostrar['color'] ?></td>
<td><?php echo $mostrar['precio'] ?></td>
<td><?php echo $mostrar['talla'] ?></td>
<td><?php echo $mostrar['insumos'] ?></td>
<td><?php echo $mostrar['taco'] ?></td>
<td><?php echo $mostrar['plataforma'] ?></td>
<td><?php if($mostrar['destacado'] == 1){?><i class="fas fa-check"></i><?php }else{ ?><i class="fas fa-times-circle"></i><?php } ?></td>
<td><?php if($mostrar['disponible'] == 1){?><i class="fas fa-check"></i><?php }else{ ?><i class="fas fa-times-circle"></i><?php } ?></td>
<td><?php echo $mostrar['imagen'] ?></td>
            <td>
              <a href="/admin/editar.php?id='<?php echo $mostrar['id']?>'" class="btn btn-secondary"><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger btn-delete" data-toggle="modal" data-target="#eliminar-producto"><i class="fa fa-trash"></i></a>
            </td>
          </tr>

        <!-- modal -->
        <div class="modal fade" id="eliminar-producto">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Estas seguro/a que quieres eliminar esta producto?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                </div>
                <div class="modal-body">
                    Presiona SI para eliminarlo.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">No, no quiero</button>
                    <a href="/admin/eliminar.php?id='<?php echo $mostrar['id']?>'"><button class="btn btn-danger" type="button">SI</button></a> 
                </div>
            </div>
        </div>
    </div>
    
        <?php
        }
        ?>

        </tbody>
      </table>

<div class="paginador">
        <ul>
        <?php 
            if($pagina !=1){

            
        ?>
          <li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
          <li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
            <?php 
            }
            for ($i=1; $i <= $total_paginas ; $i++){
              if($i == $pagina){
                echo '<li><a href="?pagina='.$i.'" class="pageSelected">'.$i.'</a></li>';
              }else{
              echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
              }
            }
            if($pagina!=$total_paginas)
            {
          ?>
         
          <li><a href="?pagina=<?php echo $pagina+1; ?>">>></a></li>
          <li><a href="?pagina=<?php echo $total_paginas; ?>">>|</a></li>
            <?php } ?>
        </ul>
</div>

                </div>
            </div>
        </div>

    </section>

<?php include("includes/footer.php"); 
unset($_SESSION["message"]);
?>
