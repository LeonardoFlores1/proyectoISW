<<<<<<< HEAD:login.php
<?php
    error_reporting(0);
    include 'coneccion.php';
    session_start();
	$_SESSION['id_usuario']=-1;	  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>login</title>

    <!-- LIBRERIAS -->
    <!-- etiquetas generadas por el editor -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="librerias/bootstrap-4/css/bootstrap.min.css">    

    <!-- ***** Mis Estilos de login ***** -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body class="d-flex">    
    <div class="container align-self-center">
        <div class="row">            
            <div class="col-lg-3 col-md-1  col-sm-1"></div>         
            <form class="col-lg-6 col-md-10 col-sm-10 cuadro_login p-4 m-1" action="" method="post" accept-charset="utf-8">
                <!-- Icono superior -->
                <div class="row fila_absoluta">
                    <img class="icono_superior mx-auto col-12" src="img/login/Icono_User_superior.svg" alt="">
                </div>
                <!-- Nombre o logo de Empresa -->
                <div class="row form-group mx-auto">
                    <h3 class="col-12 text-center tittulo_login">UNAH INTERCAMBIOS</h3>
                </div>
                <!-- input de email -->
                <div class="row input-group mx-auto">                                        
                    <input class="col-11 form-control campo_texto mx-auto" type="text" placeholder="NOMBRE USER" id="txt_user" name="txt_user" maxlength="40" minlength="6">                    
                </div>

                <!-- input de password -->
                <div class="row input-group mx-auto mt-2">                   
                    <input class="col-11 form-control campo_texto mx-auto " type="password" placeholder="CONTRASEÑA" id="txt_pass" name="txt_pass" maxlength="25" minlength="5"> 
                </div>
                <!-- Codigo php para el login-->
                <?php
					if (isset($_POST['btn_login'])) {	//comprobamos que se envieran datos con el formulario que contiene boton "btn_login"					
						if (isset($_POST['txt_user'])&&isset($_POST['txt_pass'])) {
							if ($_POST['txt_user']!=''&& $_POST['txt_pass']!='') {
								$sql = 'CALL login("'.$_POST['txt_user'].'" , "'.$_POST['txt_pass'].'")'; //procedimiento almacenado
								$consulta= mysqli_query($coneccion,$sql);
								$lineas=Array();
								$i=0;
								if ($consulta) {
									while ($linea=mysqli_fetch_object($consulta)) {
										$lineas[$i]=$linea;
										$i++;
									}		
									mysqli_free_result ($consulta);	 			
								}else{
									echo '<div class="row w-75 alert alert-danger  mx-auto mt-3" role="alert">
				  						<strong>Ojo!</strong> No se pudo conectar con el servidor.
									</div>';
								}
								for ($i=0; $i <count($lineas) ; $i++) {
									$_SESSION['id_usuario'] = $lineas[$i]->id_usuario;
								}
								mysqli_close($coneccion);
								if ($_SESSION['id_usuario'] != -1) {
								 	header('location: pagina_base.php');
								}else{
									echo '<div class="row col-11 alert alert-danger mt-1 mb-0 mx-auto" role="alert">
				  						<strong>Ojo!</strong> Usuario o Password incorrecto.
									</div>';
								}
							}
						}
						mysqli_close($coneccion);
					}			        	 	 
				 ?>

                <!-- Boton enviar -->
                <div class="row form-group mx-auto mt-3">                    
                    <button name="btn_login" class="col-11 btn btn_login mx-auto">LOG IN</button>
                </div>                

                <!-- label de olvidar contraseña -->
                <div class="row form-groups mx-auto">
                    <label class="col-md-3 col-sm-12 text-left etiqueta" data-toggle="modal" data-target="#ventanaRegistro">¡Registrarse!</label>
                    <div class="col-md-4"></div>
                    <label class="col-md-5 col-sm-12 text-right etiqueta">¿Olvidaste tu contraseña?</label>                    
                </div>
            </form>
            <div class="col-lg-3 col-md-1 col-sm-1"></div>
        </div>               
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ventanaRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ventana_registro">
                <!-- Cabecera donde esta el titulo -->
                <div class="modal-header">
                    <h5 class="modal-title titulo_ventana_registro margen-auto" id="exampleModalLabel">CREAR USUARIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Contenedor de contenido (formularios y demas) -->
                <div class="modal-body ventana_registro_contenido">
                     <!-- input de nombre y apellido -->
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NOMBRE" id="txt_nombre_registro" maxlength="40" minlength="6">                    
                    </div>

                    <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="APELLIDO" id="txt_apellido_registro" maxlength="40" minlength="6">                    
                    </div>

                     <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="CORREO" id="txt_correo_registro" maxlength="40" minlength="6">                    
                    </div>

                    <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NUMERO TELEFONICO" id="txt_telefono_registro" maxlength="40" minlength="6">                    
                    </div>

                    <!-- input de password -->
                    <div class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="txt" placeholder="CONTRASEÑA" id="txt_pass_registro" maxlength="25" minlength="5"> 
                    </div>
                </div>
                <!-- Botones de guradado y cierre -->
                <div class="modal-footer">
                    <button type="button" class="btn btn_close_registro" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn_save_registro ">GUARDAR DATOS</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Librerias js -->
    <script src="librerias/jquery-3.3.1.min.js" ></script>
    <script src="librerias/popper.js-1.12.5/dist/umd/popper.min.js"></script>
    <script src="librerias/tether-1.3.3/dist/js/tether.min.js"></script>    
    <script src="librerias/bootstrap-4/js/bootstrap.min.js"></script>
</body>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>login</title>

    <!-- LIBRERIAS -->
    <!-- etiquetas generadas por el editor -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="librerias/bootstrap-4/css/bootstrap.min.css">    

    <!-- ***** Mis Estilos de login ***** -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body class="d-flex">    
    <div class="container align-self-center">
        <div class="row">            
            <div class="col-lg-3 col-md-1  col-sm-1"></div>            
            <form class="col-lg-6 col-md-10 col-sm-10 cuadro_login p-4 m-1">
                <!-- Icono superior -->
                <div class="row fila_absoluta">
                    <img class="icono_superior mx-auto col-12" src="img/login/Icono_User_superior.svg" alt="">
                </div>
                <!-- Nombre o logo de Empresa -->
                <div class="row form-group mx-auto">
                    <h3 class="col-12 text-center tittulo_login">UNAH INTERCAMBIOS</h3>
                </div>
                <!-- input de email -->
                <div class="row input-group mx-auto">                                        
                    <input class="col-11 form-control campo_texto mx-auto" type="text" placeholder="CORREO" id="txt_user" maxlength="40" minlength="6">                    
                </div>

                <!-- input de password -->
                <div class="row input-group mx-auto mt-2">                   
                    <input class="col-11 form-control campo_texto mx-auto " type="password" placeholder="CONTRASEÑA" id="txt_pass" maxlength="25" minlength="5"> 
                </div>

                <!-- Boton enviar -->
                <div class="row form-group mx-auto mt-3">                    
                    <button class="col-11 btn btn_login mx-auto">LOG IN</button>
                </div>                

                <!-- label de olvidar contraseña -->
                <div class="row form-groups mx-auto">
                    <label class="col-md-3 col-sm-12 text-left etiqueta" data-toggle="modal" data-target="#ventanaRegistro">¡Registrarse!</label>
                    <div class="col-md-4"></div>
                    <label class="col-md-5 col-sm-12 text-right etiqueta">¿Olvidaste tu contraseña?</label>                    
                </div>
            </form>
            <div class="col-lg-3 col-md-1 col-sm-1"></div>
        </div>               
    </div>
    <!-- Modal -->
    <div class="modal fade" id="ventanaRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ventana_registro">
                <!-- Cabecera donde esta el titulo -->
                <div class="modal-header">
                    <h5 class="modal-title titulo_ventana_registro margen-auto" id="exampleModalLabel">CREAR USUARIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Contenedor de contenido (formularios y demas) -->
                <div class="modal-body ventana_registro_contenido">
                     <!-- input de nombre y apellido -->
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NOMBRE" id="txt_user" maxlength="40" minlength="6">                    
                    </div>

                    <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="APELLIDO" id="txt_user" maxlength="40" minlength="6">                    
                    </div>

                     <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="CORREO" id="txt_user" maxlength="40" minlength="6">                    
                    </div>

                    <div class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NUMERO TELEFONICO" id="txt_user" maxlength="40" minlength="6">                    
                    </div>

                    <!-- input de password -->
                    <div class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="password" placeholder="CONTRASEÑA" id="txt_pass" maxlength="25" minlength="5"> 
                    </div>

                    <div class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="password" placeholder="REPETIR CONTRASEÑA" id="txt_pass" maxlength="25" minlength="5"> 
                    </div>
                </div>
                <!-- Botones de guradado y cierre -->
                <div class="modal-footer">
                    <button type="button" class="btn btn_close_registro" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn_save_registro ">GUARDAR DATOS</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Librerias js -->
    <script src="librerias/jquery-3.3.1.min.js" ></script>
    <script src="librerias/popper.js-1.12.5/dist/umd/popper.min.js"></script>
    <script src="librerias/tether-1.3.3/dist/js/tether.min.js"></script>    
    <script src="librerias/bootstrap-4/js/bootstrap.min.js"></script>
</body>
>>>>>>> b82bbedaf6816df0e842c92d34a7ff2e61d7aaf7:login.html
</html>