<?php
	$usuario="root";
	$pass	="";
	$servidor="localhost";
	$coneccion=mysqli_connect($servidor,$usuario,$pass)or die('No se puede conectar al servidor');
	mysqli_select_db($coneccion,'isw');
	mysqli_set_charset($coneccion, "utf8"); 
?>