<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <title>Calzados Piel Canela</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<header>

    <!-- FIXED NAV -->
    <!--  
<div class="row">
        <ul class="nav justify-content-center fixed-top bg-light">
            <li class="nav-item">
                <a class="nav-link active" href="#" id = "link">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Calzado1</a>
                    <a class="dropdown-item" href="#">Calzado1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Calzado3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Carro de Compras</a>
            </li>
        </ul>
</div>
-->

      <!-- COLLAPSABLE NAV BAR -->
 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand text-light" href="index.html"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link">Ofertas</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Calzado1</a>
                            <a class="dropdown-item" href="#">Calzado1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Calzado3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Carro de Compras</a>
                    </li>
                    <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-1">
                        <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-md btn-outline-dark my-2 my-sm-0 bg-light" type="submit"><img src="https://svgsilh.com/svg/3331255.svg" alt="" width=16px;></button>
                    </form>
                    </li>
        
            </div>
    </nav>

    <div class="row" style="margin-top: 60px; position:absolute; z-index:1000; text-align:center;">
        <div class="col-sm-5"></div>
        <div class="col-sm-2"><img src="https://www.calzadospielcanela.cl/wp-content/uploads/2019/02/logo_2019.png" alt="" width="60%"></div>
        <div class="col-sm-5"></div>
        </div>


    </div>

</header>
<body>
<section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="https://slidesjs.com/img/example-slide-350-1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            <h5>Titulo1</h5>
            <button type="button" class="btn btn-outline-light">Ver</button>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://vistelacalle.com/wp-content/uploads/2016/12/example-slide-350-3-1.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
            <h5>Titulo2</h5>
            <button type="button" class="btn btn-outline-light">Ver</button>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://wowslider.com/sliders/demo-37/data1/images/waterandmountains.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
            <h5>Titulo3</h5>
            <button type="button" class="btn btn-outline-light">Ver</button>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</section>

<section>
        <h1 style="text-align: center; padding:2rem; font-style: italic;">Calzado Mujer</h1>
        <div class="row justify-content-md-center p-3 m-3">
     <?php  while($cat=$datos->fetch_object()): ?>
            <div class="col-lg-2 col-md-4">
                <div class="card" style="width: auto;">
                    <img class="card-img-top" src="https://dummyimage.com/250/ffffff/000000" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $cat->nombre; ?></h5>
                       <!-- <p class="card-text"><?php echo $cat->descripcion; ?></p>  --> 
                        <h5 class="card-subtitle text-primary">$<?php echo $cat->precio; ?></p>
                      <!--  <a href="producto.php?cod=<?php echo $cat->cod_prod; ?>"> IR </a>  --> 
                        <a class="btn btn-success" href="producto.php?cod=<?php echo $cat->cod_prod; ?>" role="button">VER</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
<?php $txt=$texto->fetch_object() ?>
    <span id="texto">
        <h3>¿ Quienes Somos ?</h3>
        <?php echo $txt->texto;?>
      </span>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>