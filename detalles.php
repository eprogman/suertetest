<?php
session_start();
include './conexion.php';
if(isset($_SESSION['proyectos'])){
	if(isset($_GET['id'])){
		$arreglo=$_SESSION['proyectos'];
		$encontro=false;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			if($arreglo[$i]['Id']==$_GET['id']){
				$encontro=true;
				$numero=$i;
			}
		}
		if($encontro==true){
						//$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['proyectos']=$arreglo;
		}else{
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysqli_query($con, "select * from clasesarduino where id=".$_GET['id']);
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
						$datosNuevos=array('Id'=>$_GET['id'], // se asigna cada elemento al nuevo indice con letra mayuscula
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['proyectos']=$arreglo;

					}
				}




			}else{
				if(isset($_GET['id'])){
					$nombre="";
					$precio=0;
					$imagen="";
					$re=mysqli_query($con, "select * from clasesarduino where id=".$_GET['id']);
					while ($f=mysqli_fetch_array($re)) {
						$nombre=$f['nombre'];
						$precio=$f['precio'];
						$imagen=$f['imagen'];
					}
					$arreglo[]=array('Id'=>$_GET['id'],
						'Nombre'=>$nombre,
						'Precio'=>$precio,
						'Imagen'=>$imagen,
						'Cantidad'=>1);
					$_SESSION['proyectos']=$arreglo;
				}
			}
			?>


			<!DOCTYPE html>
			<html lang="es">
			<head>
				<meta charset="utf-8"/>
				<meta name="robots" content="noindex">
				<title>ELECTRÓNICA Y PROYECTOS</title>
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
						<h1 class="encabezado_titulo">PROYECTOS DE ELECTRÓNICA</h1> 
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
						<?php
						include 'conexion.php';
						$re=mysqli_query($con,"select * from clasesarduino WHERE id=".$_GET['id'])or die(mysql_error());
						while ($f=mysqli_fetch_array($re)) {
							?>		
							<center> 
								<div class="proyectos">
									<img src="./productos/<?php echo $f['imagen'];?>"><br><br>
									<h2><?php echo $f['nombre'];?></h2><br>
									<h3><?php echo $f['descripcion'];?></h3><br>
									<p>Precio: <?php echo $f['precio'];?></p><br>

								<!-- <center><a href="./compras/compras.php">Comprar</a></center> -->


									<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="2E8N6CDPDEFJW">
											<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="180px" height="70px">
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
									</form>




								</div>
							</center>
							<?php 
						}
						?>
					</section>
					<footer>  

						<div class="social_footer">
							<i class="fas fa-bicycle"></i>
							<p>&copy;2020 - <strong>Todos los derechos reservados.</strong></p>
						</div>
					</footer>

				</div>
				<script type="text/javascript" src="js/scripts.js"></script>
				<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
			</body>
			</html>