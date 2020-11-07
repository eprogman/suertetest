<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['proyectos'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
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
		</div>

	</header>

	<nav>
	  <menu>
	    <li><a href="./" class="selected">Inicio</a></li>
	   <!-- <li><a href="#" class="selected">Admin</a></li> -->
	    <li><a href="./admin/agregarproducto.php" class="selected">Agregar</a></li>
	    <li><a href="./admin/modificar.php" class="selected">Modificar</a></li>
	    <li><a href="./login/cerrar.php" class="selected">Salir</a></li>
	  </menu>
	</nav>
	<section style="padding-top: 10px;">
	<center><h1 style="color:#fff;">Últimas Compras</h1></center>
	<table border="0px" width="100%">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>total</td>
		</tr>	

		<?php
			$re=mysqli_query($con, "select * from compras");
			$numeroventa=0;
			while ($f=mysqli_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['total'].'</td>

					</tr>';
			}
		?>
	</table>
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