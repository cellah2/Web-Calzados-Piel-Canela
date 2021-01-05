
<?php 
$pagina = 'Productos';
include("assets/header.php");
$cat=$datos->fetch_object() ?>
    <body>
        <div class="container">
            <div class="product-box">
                <div class="product-box__img" style = "background-image: url('uploads/images/<?php echo $cat->imagen; ?>');">
                </div>
                

                <div class="product-box__info">
                    <div class="product-box__info-title">
                        <h1><?php echo $cat->nombre;?></h1>
                    </div>
                    <div class="product-box__info-descripcion">

                        <h1>$<?php echo $cat->precio;?></h1>
                        <p>Insumos: <?php echo $cat->insumos;?></p>
                        <p>Color: <?php echo $cat->color;?></p>
                        <p>Taco: <?php echo $cat->taco?> </p>
                        <p>Plataforma interna: <?php echo $cat->plataforma;?></p>
                        <p>Temporada: <?php echo $cat->temporada;?></p>
                        <p>Tallas: <?php echo $cat->talla?></p>
                        <p>Descripcion: <?php echo $cat->descripcion;?></p>
                        <p>Categoria: <?php echo $cat->nombre_categoria;?></p>
                           <p><small> cod: <?php echo $cat->cod_prod;?></small></p>
                    </div>
                    <div class="product-box__info-pedido">
                        <input type="button" value="Realizar Pedido"/>
                    </div>
                </div>
                <div class="product-box__otras-img">
                    <div class="product-box__otras-img-1">
                        <img src="images/calzados/ainhoa-gris-1-100x100.jpg"/>
                    </div>
                    <div class="product-box__otras-img-2"> 
                        <img src="images/calzados/ainhoa-gris-100x100.jpg"/>
                    </div>
                </div>                
                <div class="product-box__relacionados">
                    <div class="product-box__relacionados-title">
                        <h1>Productos Relacionados</h1>
                    </div>
                    <div class="product-box__relacionados-imgs">
                        <div>
                            <img src="images/calzados/PASCUALA-BURDEO.jpg" width="250" height="250">
                            <h3>PASCUALA BURDEO</h3>
                            <h3>$79.990</h3>
                        </div>
                        <div>
                            <img src="images/calzados/SOBRE-MIA-BLANCO.jpg" width="250" height="250">
                            <h3>SOBRE MIA BLANCO</h3>
                            <h3>$15.990</h3>
                        </div>
                        <div>
                            <img src="images/calzados/PORTA-PASAPORTE-CAFÉ.jpg" width="250" height="250">
                            <h3>PORTA PASAPORTE CAFÉ</h3>
                            <h3>$19.990</h3>
                        </div>
                        <div>
                            <img src="images/calzados/L-1.jpg" width="250" height="250">
                            <h3>BABUCHA AVA JEANS PLATA</h3>
                            <h3>$26.990</h3>
                        </div>
                    </div>
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