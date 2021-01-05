


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin/assets/style.css">

    <script src="https://kit.fontawesome.com/d248edc114.js" crossorigin="anonymous"></script>
    <script src="/admin/assets/script.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpg" href="../images/tacon.png">

    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel|Poiret+One|ZCOOL+XiaoWei&display=swap">
</head>
<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light border"> 
        <a href="#" class="navbar-brand">Calzados Piel Canela</a>
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar"> 
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-3 sidebar fixed-top">
                            <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
                            Control Inventario</a>
                        <div class="bottom-border pb-3">
                            <!-- <img src="images/logo.png" width="50" class="rounded-circle mr-3 bg-light" alt=""> -->
                            <h6>Bienvenido:</h6>
                            <a href="#" class="text-white"><?php echo $_SESSION['email']; ?></a>
                        </div>
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item"><a href="dashboard.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                            <li class="nav-item"><a href="mostrar_productos.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-store text-light fa-lg mr-3"></i>Lista de Productos</a></li>
                            <li class="nav-item"><a href="anadir_producto.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-plus text-light fa-lg mr-3"></i>Añadir Producto</a></li>  
                            <li class="nav-item"><a href="categorias.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-th text-light fa-lg mr-3"></i>Categorias</a></li>
                            <li class="nav-item"><a href="productos_destacados.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-cart-plus text-light fa-lg mr-3"></i>Destacados</a></li>
                            <li class="nav-item"><a href="" class="nav-link text-white p-1 mb-2 sidebar-link">
                                <i class="fas fa-envelope text-light fa-lg mr-3"></i>Correo Electronico</a></li>
                            <li class="nav-item"><a href="../index.php" class="nav-link text-white p-1 mb-2 sidebar-link">
                               <i class="fas fa-globe text-light fa-lg mr-3"></i>Pagina Web</a></li>


                        </ul>    
                </div>
                <!-- end sidebar-->
                <!-- top-nav-->
                <div class="col-xl-10 col-lg-9 col-md-9 ml-auto bg-light fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h4 class="text-light mb-0"><img class= "img" src="../images/logo_2019.png" width="200px" height="70px"></h4>
                            
                        </div>
                        <div class="col-md-5">
                            <!-- 
                                <form>
                                <div class="input-group">
                                    <input type="text" class="form-control search-input" placeholder="Buscar...">
                                    <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i> </button>
                                </div>
                            </form>
                             -->

                            <form action="buscar_productos.php" method="get" class="form_search">
                                <div class="input-group">
                                <input type="text" class="form-control search-input" name="busqueda" placeholder=". . .">

                                <div class="input-group-append">
                                <input type="submit" class="btn btn-white btn-sm search-button" value="Buscar">
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-dark fa-lg"></i></a></li>
                                <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-dark fa-lg"></i></a></li>
                                <li class="nav-item ml-md-auto"><a href="" class="nav-link text-light bg-danger border border-danger rounded" data-toggle="modal" data-target="#sign-out">Cerrar Sesion <i class="fas fa-sign-out-alt text-dark fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end top-nav -->
                
            </div>
        </div>

    </div>

    </nav>
    <!-- end nav bar -->