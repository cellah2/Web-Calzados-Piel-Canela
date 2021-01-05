<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Catalogo de Productos - Don Mateo</title>
				<link rel="shortcut icon" type="image/png" href="/images/favicon.png" />
        <meta name="keywords" content="catalogo de productos, productos, tienda, lista de precios, categorias, insumos para sushi, hamburguesas, croquetas, papas pre fritas, mariscos, productos congelados, santiago, san bernardo">
<!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->

		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <div class="site-header">
            <div class="container">
                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo4.png" alt="Logotipo Don Mateo" title="Logo">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="ofertas.html">Ofertas</a></li>
                                    <li class="active"><a href="catalogo.html">Catálogo</a></li>
                                    <li><a href="acerca.html">Quienes Somos</a></li>
                                    <li><a href="contacto.html">Contacto</a></li>
                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs" style="font-size:25px; margin-right:60px;">
                                    <i class="fa fa-bars">Menú</i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="ofertas.html">Ofertas</a></li>
                                <li class="active"><a href="catalogo.html">Catálogo</a></li>
                                <li><a href="acerca.html">Quienes Somos</a></li>
                                <li><a href="contacto.html">Contacto</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->




        <div class="page-top" id="templatemo_events">
        </div> <!-- /.page-header -->
        <div class="red"> 
<div id="facebook"><a href="https://www.facebook.com/Don-Mateo-1352814331507064/" class="fa fa-facebook"></a></div>
<div id="instagram"><a href="https://www.instagram.com/donmateospa/" class="fa fa-instagram"></a></div>
<div id="correo"><a href="mailto:contacto@donmateo.cl" class="fa fa-envelope"></a></div>
<div id="mapa"><a href="https://www.google.cl/maps/place/Comercial+Don+Mateo+Spa/@-33.5951351,-70.7040575,17z/data=!3m1!4b1!4m5!3m4!1s0x9662d944d8f42b63:0x6090c9400a0d6f57!8m2!3d-33.5951351!4d-70.7018635" class="fa fa-map-marker"></a></div>

</div>
      
      
		<style>
.collapsible {
  background-color: #8B2121;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
    margin-bottom: 8px;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active2, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}


.active2:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
    color: black;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>
      
      
        <div class="middle-content">
            <div class="container">
            
                <div class="row"><!-- first row -->
                <div class="text-center">
	<h7 class="widget-title">~ Catálogo de Productos~</h7>
	
	<a style="font-size:20px" href="#">
		<center><img src="images/excel2.png" align="center" width=100px > Descargar Lista de Precios </center></a><br>
		<h3 class="widget-title">* El precio y la disponibilidad en local pueden variar *</h3>		
	</div>
	<br>
		
	</div>
	
	


   <?php include("conexion.php"); ?>

<h2 style="font-size: 25px;">LISTADO DE PRECIOS</h2>
<p style="font-size: 18px">Selecciona una Categoria:</p>

    <?php 
            $query_cat = mysqli_query($link,"select * from categorias");
            $total = mysqli_num_rows($query_cat);
            $cantidad = mysqli_num_rows($query_productos);
            
            if ($total>0){
                while($categorias=mysqli_fetch_array($query_cat)){
                    $codigo = $categorias["id_categoria"];
                    //echo $codigo;
                    $consulta = "SELECT * FROM productos WHERE id_producto = $codigo";
                    $query_productos = mysqli_query($link,$consulta);
                    ?>
                    
                    <button class="collapsible" ><?php echo $categorias["nombre_categoria"];?></button>
                    <div class="content">
                                             
                        <table class="w3-table w3-striped w3-border">
                        <tr><th>Producto</th><th>Precio</th></tr>
                        <?php while($productos=mysqli_fetch_array($query_productos)){
                            ?><tr>
                            <td><?php echo $productos["nombre"];?></td>
                            <td>$<?php echo $productos["precio"];?></td>
                         </tr>

                       <?php } ?>
                </table>
                </div>
               <?php }
            }

            
            ?>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active2");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>


	
	
	
                    
 <!-- /.row first -->
         
                
             <!-- /.container -->
        </div> <!-- /.middle-content -->


        <div class="partner-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/logoking.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/logomacrofood.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/logolacrianza.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/logominutoverde.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item">
                            <img src="images/partners/logopf.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="partner-item last">
                            <img src="images/partners/logoagrosuper.png" alt="">
                        </div> <!-- /.partner-item -->
                    </div> <!-- /.col-md-2 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.partner-list -->

		
        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo"><br>
                            <a href="index.html">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright"><span>Copyright &copy; 2019 <a href="www.donmateo.cl">Don Mateo SPA</a></span><br />
&nbsp;
<p>Local San Bernardo</p>
<p><i class="fa fa-map-marker">&nbsp;</i><a href="https://www.google.cl/maps/place/Comercial+Don+Mateo+Spa/@-33.5951351,-70.7040575,17z/data=!3m1!4b1!4m5!3m4!1s0x9662d944d8f42b63:0x6090c9400a0d6f57!8m2!3d-33.5951351!4d-70.7018635">Bulnes #617 </a></p>

<p><i class="fa fa-phone">&nbsp;</i><a href="tel:228591125">2 28591125</a></p>

<p>Local Maipú</p>
<p><i class="fa fa-map-marker">&nbsp;</i><a href="https://www.google.cl/maps/place/Chacabuco+198,+Maipú,+Región+Metropolitana/@-33.5092896,-70.7604776,17z/data=!4m5!3m4!1s0x9662dcd48b35fc25:0x2a614ece19cac6a7!8m2!3d-33.5090749!4d-70.7599412">Av. Chacabuco #198 Local 3</a></p>
<p><i class="fa fa-phone">&nbsp;</i><a href="tel:+56413189861">+56413189861</a></p>
    <br>
<p><i class="fa fa-envelope">&nbsp;</i><a href="mailto:contacto@donmateo.cl" target="_top">contacto@donmateo.cl</a></p>
</div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        	<center><p style="font-size:20px">CATEGORIAS DE PRODUCTOS</p></center><br>
					<a style="font-size:15px" href="#">
					- Linea Sushi</a><br>
					<a style="font-size:15px" href="#">
					- Linea Vegana</a><br>
					<a style="font-size:15px" href="#">
					- Linea Comida Rapida</a><br>
					<a style="font-size:15px" href="#">
					- Masas Don Mateo</a><br>
					<a style="font-size:15px" href="#">
					- Mariscos y Pescados</a><br>
					<a style="font-size:15px" href="#">
					- Carnes Blancas y Rojas</a><br>
					<a style="font-size:15px" href="#">
					- Hamburguesas y Empanizados</a><br>
					<a style="font-size:15px" href="#">
					- Verduras y Hortalizas</a><br>
					<a style="font-size:15px" href="#">
					- Frutas y Pulpas</a><br>
					<a style="font-size:15px" href="#">
					- Papas Pre-Fritas</a><br>
					
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->


        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- templatemo 409 travel -->
    </body>
  
</html>