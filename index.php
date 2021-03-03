<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>INFORMACIÓN ADJUNTA</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>
<body>
	<div class ="container">
		<div class="header">
			<div class="logo">
				<img src="./imagenes/logo.png">
			</div>

			<div class="encabezado_titulo"><div class="titulo">Lugar de Almacenar Archivos</div></div> 


		</div>
		<br><br><br><br><br>
	  	<section class="main" id="empieza_proyectos">
			<?php
			include 'conexion.php';	
			$re=mysqli_query($con, "select * FROM archivos");

			while ($f=mysqli_fetch_array($re)) {
				?>	
				<div class="producto">
					<img src="./recibos_luz/<?php echo $f['imagen'];?>"><br>
					<p class="parrafo_nombre"><?php echo $f['nombre'];?></p><br><br>
					<a href="./detalles.php?id=<?php echo $f['id'];?>"><button class="formulario__btn">Ver Detalle</button></a>									
				</div>
				<?php
			}
			?>

	  	</section>

		<footer class="social_footer">      
				<i class="far fa-file-alt"></i>
				<p>&copy;2020 - <strong>Todos los derechos reservados.</strong></p>
		</footer>
    </div> 

	<script src="js/script.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>