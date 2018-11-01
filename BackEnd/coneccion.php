<?php
	$usuario="admin";
	$pass="asd.456";
	$servidor="localhost";
	$db="isw";
	//$conection=mysqli_connect($servidor,$usuario,$pass)or die('No se puede conectar al servidor');
	$conection = mysqli_connect($servidor, $usuario, $pass, $db) or die('No se conecto');
	//mysqli_query($db, "SET NAMES 'utf8_unicode_ci'");
	//}
	//mysqli_select_db($conection,'isw');
	//mysqli_set_charset($coneccion, "utf8_spanish_ci");
	//session_start();	
?>