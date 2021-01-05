<!DOCTYPE HTML>

<html>
	<head>
		<title>Calzados Piel Canela</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
		<link rel="icon" type="image/jpg" href="images/tacon.png">
    </head>
		<header id="header">
			<a href="index.php" style="text-decoration: none; color: black"><h1>Piel Canela</h1></a>
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
				<a href="index.html">
					<img class= "img" src="images/logo_2019.png" width="200px" height="70px">
				</a>
			</div>
		<!--Buscador-->
			<div id="ctn-icon-search">
				<i class="fas fa-search" id="icon-search"></i>
			</div>
		</header>
		
		<div id="ctn-bars-search">
			<input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
		</div>

		<ul id="box-search">
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Botines</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Babuchas</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Zapatos</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Botas</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Zapatos de hombre</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Zapatos Negros</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Carteras</a></li>
			<li><a href="productos-hombre.html"><i class="fas fa-search"></i>Botines rojos</a></li>
		</ul>

		<div id="cover-ctn-search"></div>
		
	<body class="is-preload">
		<!-- Intro -->
		<!--Video Inicio-->
		<div class="headerr contenido">
			<div class="header-video">
				<video muted autoplay loop><source src="images/videos/making1.mp4" type="video/mp4"></video>
			</div>

			<div class="header-colorfondo"></div>
				
			<div class="header-mensaje">
				<h1>Amamos crear un calzado cómodo y exclusivo</h1>
				<p>Rescatando la industria del calzado nacional</p>
				<a href="nosotros.php" class="btn">Conoce más de Piel Canela</a>
			</div>
			
		</div>
		

		<!-- One (Slider con anuncios y productos)-->
		
		<div class="t-slider">
			<h1>Novedades</h1>
		</div>
		<section id="one" class="main style2 right dark fullscreen">
			<div class="slider">
				<ul>
					<li><img src="images/slider-1.jpg" alt="1"></li>
					<li><img src="images/SLIDER-isi.jpg" alt="Isi"></li>
					<li><img src="images/slider-zap-1.jpg" alt="Zapato 1"></li>
					<li><img src="images/sliderDENIMFUSION.jpg" alt="DNIMFUSION"></li>
				</ul>
			</div>
		</section>

		<!-- Work -->
		<section id="work" class="main style3 primary">
			<div class="content">
				<header>
					<h1>Nuestro Trabajo</h1>
					<section id = 'destacados'>
       				 <?php $txt=$destacados->fetch_object() ?>
       				 <p>
       			     <?php echo $txt->texto; ?>
       				 </p>
     				   </section>
				</header>

				<!-- Gallery  -->
				<div class="gallery">
                <?php
                    $bool = 0;    
                while($cat=$datos->fetch_object()): 
                    if ($bool == 0) { ?>
                    <article class="from-left">
						<a href="uploads/images/<?php echo $cat->imagen;?>" class="image fit"><img src="uploads/images/<?php echo $cat->imagen;?>" title="<?php echo $cat->nombre;?> | Precio: <?php echo $cat->precio;?>" alt="" /></a>
					</article>
                    <?php $bool = 1;
                    }else { ?>
        			<article class="from-right">
					<a href="uploads/images/<?php echo $cat->imagen;?>" class="image fit"><img src="uploads/images/<?php echo $cat->imagen;?>" title="<?php echo $cat->nombre;?> | Precio: <?php echo $cat->precio;?>" alt="" /></a>
					</article>
                    <?php $bool = 0;
                    }
                endwhile;
                    ?>
				</div>
			</div>
		</section>

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