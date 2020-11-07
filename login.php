<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="robots" content="noindex">
	<title>ELECTRÓNICA Y CIRCUITOS</title>
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

</head>
<body>

	<div class ="container">
		<header>
			<div class="logo">
				<img src="./imagenes/logo.png" id="logo">
				<p class="correo"><i class="far fa-envelope"> asesoria.particular(arroba)hotmail.com</i></p>
			</div>
			<h1 class="encabezado_titulo">ELECTRÓNICA Y PROYECTOS CON ARDUINO</h1> 
			<div class="enlaces_header">

				<ul>
					<li><a href="http://127.0.0.1/pag_jorge/">Inicio</a></li>
					<li><a href="./acerca.php">Acerca de</a></li>
					<li><a href="./#empieza_proyectos">Proyectos</a></li>
					<li><a href="/es/tools-resources.html">Precios</a></li>
				</ul>

			</div>
		</header>

		<section class="main">

			<form method="post" action="./login/verificar.php">
				<?php 
				if(isset($_GET['error'])){
					echo '<center>Datos No Validos</center>';
				}
				?>
				<center><input type="text" id="usuario" name="Usuario" placeholder="usuario" style="width:150px; margin-top:50px;" ></center><br>
				<center><input type="password" id="password" name="Password" placeholder="password" style="width:150px"></center><br>
				<center><input type="submit" name="aceptar" value="Aceptar" class="aceptar" style="width:150px"></center>
			</form>

		</section>

		<footer>     
			<div class="social_footer">
				<a href="" ><i class="fab fa-facebook"></i></a>
				<a href=""><i class="far fa-grin-beam"></i></a>
				<p>&copy;2020 - <strong>Todos los derechos reservados.</strong></p>
			</div>
		</footer>
	</div>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>