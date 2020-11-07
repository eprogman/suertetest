<?php
session_start();
include "../conexion.php";
$re=mysqli_query($con,"select * FROM usuarios WHERE Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido'],'Imagen'=>$f['Imagen']);
	}
	
	if(isset($arreglo)){
		$_SESSION['proyectos']=$arreglo;
		header("Location: ../admin.php");
	} else{
		header("Location: ../login.php?error=datos no validos");
	}
?>