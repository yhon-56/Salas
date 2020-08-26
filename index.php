<!DOCTYPE html>
<html>
<head>
	<title>Frutas y verduras</title>
</head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap y Fonts CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--Estilo propio-->
<link rel="stylesheet" type="text/css" href="css/index.css">




<body>

	<header>
		<div class="container" id="contenedor">
			<img src="imagen/logo.png" class="img-fluid"  id="imagenlogo" >
		</div>

		<div class="container">
			<!-- Aquí va nuestro contenido web -->
			<nav id="menu" class="navbar navbar-toggleable-md navbar-inverse bg-primary " >
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#" >MENU</a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="javascript:Cargar_Pagina_Productos();">PRODUCTOS <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">CONTACTENOS <span class="sr-only">(current)</span></a>
						</li>



					</ul>

				</div>
			</nav>

		</div>



		
	</header>

	<div class="container" >
		<center><h1 style="font-size: 5vw;">Bienvenidos</h1></center>
	</div>

	<div class="container"  >
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="imagen/banner2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imagen/banner1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imagen/banner3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true" id="flecha"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true" id="flecha"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
	</div>

	<!---holaje-->

	    <section id="seccion">
            <header id="subtitulo2">
                <h4>Los mejores Productos</h4>
            </header><img src="img/logo.JPG" style="width:300px; height:200px" id="imagen">
            <aside id="ladoderecho">
                <div id="paginas">
                    <p>
                        Somos una marca Colombiana de moda, enfocada es un estilo de vida joven, fresco y urbano.
                        Encuentra en nuestra tienda online ropa para mujer, hombre, niña y niño perfectamente para todas
                        las ocasiones y momentos:
                        <br><br>
                        trabajo, universidad, fiesta, comida familiar, tarde de amigos. Encuentra tambien en Tennis
                        las ultimas tendencias de moda en jeans,
                        zapatos, accesorios, camisas, vestidos, chaquetas, buzos y demas lineas para estar perfecto
                        en cada ocasion. Nuestras colecciones estan pensadas en ropa de moda del momento para que lleves
                        lo mejor de las tendencias a tu closet y disfrutemos del estilo de vida.
                    </p>
                </div>
               
            </aside>
        </section>

	<div class="container">

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; Your Website 2019</span>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li class="list-inline-item">
								<a href="#" style="color: black">Privacy Policy</a>
							</li>
							<li class="list-inline-item">
								<a href="#" style="color: black">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

	</div>
	

</body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/estilos.js"></script>
</html>


<script type="text/javascript">
	
	 function Cargar_Pagina_Productos() {
	 		  $("#paginas").load("productos.php");
           
	 }
</script>
