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
    <link rel = "icon" type = "image/png" href = "img/IconosPagina_Base/Icono2.png">  
    <link rel="icon" type="image/gif" href="img/IconosPagina_Base/Icono2.gif">  
    <link rel = "icon" type = "image/png" href = "img/IconosPagina_Base/Icono2.png">  
    <!-- ***** Mis Estilos de login ***** -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="d-flex">    
    <div class="container align-self-center">
        <div class="row">            
            <div class="col-lg-3 col-md-1  col-sm-1"></div>         
            <form action="BackEnd\Login.php"  id="BackEnd\Login" name="BackEnd\Login" class="col-lg-6 col-md-10 col-sm-10 cuadro_login p-4 m-1" method="POST" accept-charset="utf-8">
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
                    <input class="col-11 form-control campo_texto mx-auto" type="text" placeholder="NOMBRE USUARIO" id="txt_user" name="txt_user" maxlength="40" minlength="6">                    
                </div>
                <!-- input de password -->
                <div class="row input-group mx-auto mt-2">                   
                    <input class="col-11 form-control campo_texto mx-auto " type="password" placeholder="CONTRASEÑA" id="txt_pass" name="txt_pass" maxlength="25" minlength="5"> 
                </div>
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
                <form action="BackEnd\Registro.php"  id="BackEnd\Registro" name="BackEnd\Registro" method="POST" class="modal-body ventana_registro_contenido">
                     <!-- input de nombre y apellido -->
                    <div id="txt_nombre_registro" class="row input-group mx-auto">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NOMBRE" id="txt_nombre_registro" name="txt_nombre_registro" maxlength="40" minlength="4">                    
                    </div>
                    <div id="txt_apellido_registro" class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="APELLIDO" id="txt_apellido_registro" name="txt_apellido_registro" maxlength="40" minlength="4">                    
                    </div>
                     <div id="txt_correo_registro" class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="CORREO" id="txt_correo_registro" name = 'txt_correo_registro' maxlength="40" minlength="6">                    
                    </div>
                    <div id="txt_telefono_registro" class="row input-group mx-auto mt-2">                        
                        <input class="col-10 form-control campo_texto mx-auto" type="text" placeholder="NUMERO TELEFONICO" id="txt_telefono_registro" name="txt_telefono_registro" maxlength="40" minlength="6">                    
                    </div>
                    <!-- input de password -->
                    <div id="txt_pass_registro2" class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="password" placeholder="CONTRASEÑA" id="txt_pass_registro2" name="txt_pass_registro2" maxlength="25" minlength="5"> 
                    </div>
                    <div id="txt_pass_registro" class="row input-group mx-auto mt-2">
                        <input class="col-10 form-control campo_texto mx-auto" type="password" placeholder="CONFIRMAR CONTRASEÑA" id="txt_pass_registro" name="txt_pass_registro" maxlength="25" minlength="5"> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_close_registro" data-dismiss="modal">CERRAR</button>
                        <input type="submit" name ="btn_registro" id="btn_registro" class="btn btn_registro ">GUARDAR DATOS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Librerias js -->
    <script src="librerias/jquery-3.3.1.min.js" ></script>
    <script src="librerias/popper.js-1.12.5/dist/umd/popper.min.js"></script>
    <script src="librerias/tether-1.3.3/dist/js/tether.min.js"></script>    
    <script src="librerias/bootstrap-4/js/bootstrap.min.js"></script>

</html>
