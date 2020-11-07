<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>ELECTRÓNICA Y PROYECTOS</title>
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel=”canonical” href=http ://pagina336.webcindario.com/>

</head>
<body>
	<div class ="container">
		<header>
			<div class="logo">
				<img src="./imagenes/logo.png" id="logo">
				<p class="correo"><i class="far fa-envelope"> asesoria.particular(arroba)hotmail.com</i></p>
			</div>
			<h1 class="encabezado_titulo">PROYECTOS DE ELECTRÓNICA</h1> 
			<div class="enlaces_header">

				<ul>
					<li><a href="http://127.0.0.1/pag_jorge/">Inicio</a></li>
					<li><a href="./acerca.php">Acerca de</a></li>
					<li><a href="#empieza_proyectos">Proyectos</a></li>
					<li><a href="./precios.php">Precios</a></li>
				</ul>

			</div>

		</header>
		<section class="main" id="empieza_proyectos">
			<?php
			include 'conexion.php';	
			$re=mysqli_query($con, "select * FROM clasesarduino");

			while ($f=mysqli_fetch_array($re)) {
				?>	
				<div class="producto">
					<img src="./productos/<?php echo $f['imagen'];?>"><br>
					<p class="parrafo_nombre"><?php echo $f['nombre'];?></p><br><br>
					<a href="./detalles.php?id=<?php echo $f['id'];?>"><button class="formulario__btn">ACCESO</button></a>									
				</div>
				<?php
			}
			?>

		</section>

		<footer class="social_footer">      
			<i class="fas fa-bicycle"></i>
			<p>&copy;2020 - <strong>Todos los derechos reservados.</strong></p>
		</footer>
	</div> 

	<script type="text/javascript" src="./js/scripts.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>	