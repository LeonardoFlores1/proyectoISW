<?php

	if(isset($_POST)){
		require_once 'coneccion.php';
		
		session_start();
		$nombre_re = isset($_POST['txt_nombre_registro']) ? $_POST['txt_nombre_registro'] : false;
		$apellido_re = isset($_POST['txt_apellido_registro']) ? $_POST['txt_apellido_registro'] : false;
		$correo_re = isset($_POST['txt_correo_registro']) ? $_POST['txt_correo_registro']  :false;
		$telefono_re = isset($_POST['txt_telefono_registro']) ? $_POST['txt_telefono_registro'] : false;
		$password_re = isset($_POST['txt_pass_registro']) ? $_POST['txt_pass_registro'] : false;
		//array errores
		$errores = array();
		//validar
		if(!empty($nombre_re) && !is_numeric($nombre_re) && !preg_match("/[0-9]/", $nombre_re)){

			$nombre_registro_val = true; 
			echo $correo_re;
			//$query1 = "INSERT INTO usuario(nombre,apellido,pass,correo,telefono) 
			//VALUES ('$nombre_re','$apellido_re','$password_re','$correo_re','$telefono_re');";
			$query2 = "CALL insertar_usuario('$nombre_re','$apellido_re','$password_re','$correo_re','$telefono_re')";
			$consulta3 = mysqli_query($conection,$query2);
			if ($consulta3){	
				echo "despues de consulta3";
			
			}else
			{	echo "no se ejecuto";}
		}else{
			$nombre_registro_val = false;
			$errores['txt_nombre_registro'] = "El nombre no es Valido";
		}
/*
		if(!empty($nombre_re) && !is_numeric($nombre_re) && !preg_match("/[0-9]/", $nombre_re)){
			$nombre_registro_val = true; 
		}else{
			$nombre_registro_val = false;
			$errores['txt_nombre_registro'] = "El nombre no es Valido";
		}
		*/

	}
	header('location: ..\login.php');
?>