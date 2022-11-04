<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>FBN-PELIS</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">FBN-PELIS<img src="img/icono.PNG" class="logo"></h2>
			<nav>
				<a href="index.php" class="activo">Inicio</a>
				<a href="#">Animes</a>
				<a href="#">Películas</a>
				<a href="#">Series</a>
				<a href="logout.php">Salir</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Animes</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="Dragon-ball-z/series.html"><img src="img/poster-frezzer.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/cell-poster.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/magin-poster.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="jujutsu-kaisen/series.html"><img src="img/jujutsu-kaisen.jpg"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="hellsing/series.html"><img src="img/Hellsing.jpg"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png"  height="350"alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/5.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/6.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/7.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/1.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/2.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/3.png"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="img/4.png"  height="350" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>

	</main>
	<main>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Peliculas-recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				
				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="peliculas/pelis1.html"><img src="img/Anabel.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="peliculas/pelis2.html"><img src="img/broly.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="peliculas/pelis3.html"><img src="img/Demon.jpg" height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="peliculas/pelis4.html"><img src="img/Depredador.jpg"  height="350" alt=""></a>
						</div>
						<div class="pelicula">
							<a href=""><img src="img/Simpsons.jpg"  height="350" alt=""></a>
						</div>
						
					</div>
				</div>

			</div>
		</div>

	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>