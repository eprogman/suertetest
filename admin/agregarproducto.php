<?php
session_start();
include "../conexion.php";
if(isset($_SESSION['Usuario'])){

}else{
	header("Location: ./index.php?Error=Acceso denegado");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

</head>
<body>
			<div class ="container">
	<header>
		<div class="logo">
			<img src="../imagenes/logo.png" id="logo">
		</div>

	</header>

	<nav>
		<menu>
			<li><a href="../admin.php" class="selected">Inicio</a></li>
			<!-- <li><a href="#" class="selected">Admin</a></li> -->
			<li><a href="./modificar.php" class="selected">Modificar</a></li>
			<li><a href="../login/cerrar.php" class="selected">Salir</a></li>
		</menu>
	</nav>
	<section>
		<center><h1>Agregar un Nuevo Producto</h1></center>
		<form action="altaproducto.php" method = "post" enctype="multipart/form-data">
			<fieldset>
				Nombre<br>
				<input type="text" name="nombre">
			</fieldset>
			<fieldset>
				Descripción<br>
				<input type="text" name="descripcion">
			</fieldset>
			<fieldset>
				Imagen<br>
				<input type="file" name="file">
			</fieldset>
			<fieldset>
				Precio<br>
				<input type="text" name="precio">
			</fieldset>
			<input type="submit" name="accion" value="Enviar">
		</form>	

	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
			<footer class="social_footer">      
				<a href=""><i class="fab fa-facebook"></i></a>
				<a href=""><i class="far fa-grin-beam"></i></a>
				<p>&copy;2020 - <strong>Todos los derechos reservados.</strong></p>
		</footer>
    </div> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>