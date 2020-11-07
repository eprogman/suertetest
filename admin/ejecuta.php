<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysqli_query($con, "delete from clasesarduino where Id=".$_POST['Id']);
		unlink("../productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysqli_query($con, "update clasesarduino set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysqli_query($con, "update clasesarduino set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		mysqli_query($con, "update clasesarduino set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>