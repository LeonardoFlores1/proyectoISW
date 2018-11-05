<?php 
	include '../coneccion.php';
	error_reporting(0); 
?>

<?php
	$sql='INSERT INTO Usuario (nombre, pass, correo, telefono) VALUES ("'.$_POST['txt_nombre_registro'].'","'.$_POST['txt_pass_registro'].'","'.$_POST['txt_correo_registro'].'","'.$_POST['txt_telefono_registro'].'");';

	$consulta= mysqli_query($coneccion,$sql);
	echo $consulta;
	if ($consulta) {		
		mysqli_free_result ($consulta);	 			
	}	
	mysqli_close($coneccion);
?>