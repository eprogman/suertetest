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
	    <li><a href="../admin/agregarproducto.php" class="selected">Agregar</a></li>
	   <!-- <li><a href="./admin/modificar.php" class="selected">Modificar</a></li>-->
	    <li><a href="../login/cerrar.php" class="selected">Salir</a></li>
	  </menu>
	</nav>

			<section>
		<h1>MODIFICAR Y/O ELIMINAR</h1>
		<table width="100%">
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Precio</td>
				<td>Eliminar</td>
				<td>Modificar</td>
			</tr>
		<?php 
			$resultado=mysqli_query($con, "select * from clasesarduino");
			while($row=mysqli_fetch_array($resultado)){
				echo '
				<tr>
					<td>
						<input type="hidden" value="'.$row[0].'">'.$row[0].'
						<input type="hidden" class="imagen" value="'.$row[3].'">
					</td>
					<td><input type="text" class="nombre" value="'.$row[1].'"></td>
					<td><input type="text" class="descripcion" value="'.$row[2].'"></td>
					<td><input type="text" class="precio" value="'.$row[4].'"></td>
					<td><button class="eliminar" data-id="'.$row[0].'">Eliminar</button></td>
					<td><button class="modificar" data-id="'.$row[0].'">Modificar</button></td>
				</tr>
				';
			}
		?>
	</table>
	</section>
    </div> 
		<script type="text/javascript" src="./modificar.js"></script>
		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>