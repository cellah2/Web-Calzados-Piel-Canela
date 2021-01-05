<!DOCTYPE HTML>

<html>
	<head>
		<title>Productos Mujer – Calzados Piel Canela</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/calzados.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
		<link rel="icon" type="image/jpg" href="images/tacon.png">
    </head>
    
	<body class="is-preload">
		<div class="container">
		<header id="header">
				<nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="productos-hombre.php">Hombre</a></li>
						<li><a href="productos-mujer.php">Mujer</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contacto.html">Contacto</a></li>
					</ul>
				</nav>
				<div class="logo">
					<a href="index.php">
						<img class= "img" src="images/logo_2019.png" width="200px" height="70px">
					</a>
				</div>
			</header>

			<div class="product-box"> 
				<div class="product-box__title">
					<h1>Productos Mujer</h1>
                </div>
      <?php  while($cat=$mujer->fetch_object()): ?>   
		<a href="producto.php?cod=<?php echo $cat->cod_prod; ?>" style="text-decoration: none; color: black;">		
		<div class="product-box__items">
					<img src="uploads/images/<?=$cat->imagen ?>" alt="">
					<div>
						<h2><?= $cat->nombre;?></h2>
                        <h6>$<?= $cat->precio;?></h6>
					</div>
				</div>
	  </a>
                <?php endwhile; ?>
			</div>
		<div class="categorias-aside">
				<div class="categorias-aside__title">
					<h2><u>Categorias</u></h2>
				</div>
				<div class="categorias-aside__opciones">
					<ul>
					<ul>
					<?php  while($cat=$categorias->fetch_object()): ?>   
						<a href="ver-productos.php?categoria=<?php echo $cat->cod_categoria;?>"><li><?php echo $cat->nombre;?></li></a>
						<?php endwhile; ?>
					</ul>
					</ul>
				</div>
			</div>
			<!-- Footer (Listo en los elementos)-->
			<footer id="footer">
				<!-- Icons -->
				<ul class="icons">
					<li><a href="https://www.twitter.com/calzpielcanela/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/piel.ltda/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/pielcanelacalzados/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="https://www.youtube.com/channel/UCiNbc7r4TCvSoP1AyDjqmNA" class="icon brands fa-youtube-square"><span class="label">YouTube</span></a></li>
					<li><a href="https://www.pinterest.cl/calzadospielcanela/" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
				</ul>
				<!-- Menu -->
				<ul class="menu">
					<li>&copy; Calzados Piel Canela ltda</li><li>Diseñado por: <a href="https://utem.cl">Crewmates</a></li>
				</ul>
	
			</footer>
		</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.poptrox.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>