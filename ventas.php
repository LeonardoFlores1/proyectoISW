<?php
    error_reporting(0);
    include 'BackEnd\comprobador_usuario.php';    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Intercambios UNAH</title>
    <?php include 'php_moldes_html/librerias_head.php'; ?>
    
    <!-- Mis CSS -->
    <link rel="stylesheet" type="text/css" href="css/pagina_base.css">    
    <link rel="stylesheet" type="text/css" href="css/ventas.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src= 'BackEnd/obtenerLibros.js'>
  </script>
</head>

<body>
    <!-- Barra de navegacion -->
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">

            <a class="navbar-brand" href="pagina_base.php">

            <a class="navbar-brand" href="">

                <img src="img/IconosPagina_Base/Icono1.svg" alt="Logo" style="width:40px;">
                INTERCAMBIOS UNAH
            </a>
            <!-- boton togler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>                        
            <!-- menu que se comprimira notar que el contenedor tiene el mismo id que el boton (togler) anterior -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">

                        <a class="nav-link" href="compras.php" style="font-family: CaviarDreams;">Comprar Articulo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Vender Articulo</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="intercambio.php">Cambiar Articulo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi Perfil</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="BackEnd\logout.php">SALIR</a>
                    </li>
                </ul>
            </div>            
        </nav>
    </div>

    <div class="container cuerpo_pagina bg-light mt-3 border">
        <h4 class="text-center my-2">Libros para ventas o intercambios</h4>
        <div class="row mt-3 w-100">            
            <!-- LISTADO DE MIS LIBROS -->
            <div class="col-lg-4 col-sm-12 border mx-auto cuadro_lista">
                <h5 class="text-center mt-2">Mi lista de libros</h5>
                <div class="form-group col-sm-12">
                    <select multiple class="form-control" id="slcLibros" size="7">
                    </select>
                </div>
                <!--Botones agregar o quitar libros -->
                <div class="row form-group mx-auto">
                    <span class="btn btn-success btn-md col-4" data-toggle="modal" data-target="#frmAgregarLibro">
                        <span class="fas fa-book text-left iconos">&nbsp; &nbsp; + </span>
                    </span>
                    <div class="col-4"></div>
                    <span class="btn btn-warning btn-md col-4 align-self-end" data-toggle="modal" data-target="#frmEliminarLibro">
                        <span class="fas fa-book text-left iconos">&nbsp; &nbsp; - </span>
                    </span>
                </div>  
            </div>
            
            <!-- CUADRO DETALLES DEL LIBRO (IMAGENES Y DATOS) -->
            <div class="col-lg-7 col-sm-12 border mx-auto cuadro_detalles">
                <!-- Imagenes del visor -->
                <div class="row my-2 mx-auto">
                    <div class="col-lg-4">
                        <ul id="out-of-the-box-demo">
                          <li>
                            <a href="#slide1">
                              <img src="img/ventas/prueba 01.jpg" alt="">
                            </a>
                          </li>
                          <li>
                            <a href="#slide2">
                              <img src="img/ventas/prueba 02.jpg"  alt="">
                            </a>
                          </li>
                          <li>
                            <a href="#slide3">
                              <img src="img/ventas/prueba 03.jpg" alt="">
                            </a>
                          </li>                          
                        </ul>
                    </div>
                    <!-- Informacion de Libro -->
                    <div class="col-lg-8">
                        <h5 class="">Nombre:</h5>
                        <h6>Fisica Universitaria Se 11 edicion</h6>
                        <h5 class="">Precio:</h5>
                        <h6 class="text-success">LPS.- 10000</h6>
                        <h5 class="">Disponible para intercambio:</h5>
                        <h6 class="text-danger">NO</h6>
                        <h5 class="">Observaciones:</h5>
                        <h6>La tapa frontal esta dañada</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- VENTANAS MODALES -->
    <!-- MODAL AGREGAR LIBRO -->
    <div class="modal fade" id="frmAgregarLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ventana_registro">
                <!-- Cabecera donde esta el titulo -->
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title" id="exampleModalLabel">INGRESAR NUEVO LIBRO</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Contenedor de contenido (formularios y demas) -->
                <div class="modal-body was-validated">
                     <!-- input de nombre -->
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control mx-auto" type="text" placeholder="TITULO DE LIBRO" id="nombre_libro" maxlength="40" minlength="6" required>   
                    </div>
                    <!-- input de no_edicion -->
                    <div class="row mx-auto mt-2">
                        <h6 class="col-10 mx-auto" min="1">NO_EDICION:</h6>
                    </div>    
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control  mx-auto" type="number" value="1" id="no_edicion" required>
                    </div>
                    <!-- Precio del libro -->
                    <div class="row mx-auto mt-2">
                        <h6 class="col-10 mx-auto " min="1">PRECIO:</h6>
                    </div>                    
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control mx-auto" min="1" type="number" id="precio" value="1.0" required step="0.01">                    
                    </div>
                    <!-- Disponible para intercambio -->
                    <div class="row mx-auto mt-2">
                        <h6 class="col-10 mx-auto ">SE INTERCAMBIA:</h6>
                    </div>
                     <div class="row input-group mx-auto">                       
                        <select  class="col-10 form-control mx-auto" id="intercambio">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>                    
                    </div>
                    <!-- Fotos Libro -->
                    <div class="row mx-auto mt-2">
                        <h6 class="col-10 mx-auto ">FOTOS DEL LIBRO:</h6>
                    </div>

                    <div class="row input-group mx-auto mt-2 custom-file">                     
                        <input class="col-10 mx-auto custom-file-input" type="file" id="archivo_01" accept="image/*" required> 
                        <label class="custom-file-label col-10 mx-auto" for="archivo_01">Seleccione una imagen...</label>
                        <div class="col-10 mx-auto invalid-feedback">Agregue una imagen</div>
                    </div>

                    <div class="row input-group mx-auto mt-2 custom-file">                    
                        <input class="col-10 mx-auto custom-file-input" type="file" id="archivo_02" accept="image/*" required> 
                        <label class="custom-file-label col-10 mx-auto" for="archivo_02">Seleccione una imagen...</label>
                        <div class="col-10 mx-auto invalid-feedback">Agregue una imagen</div> 
                    </div>

                     <div class="row input-group mx-auto mt-2 custom-file">                
                        <input class="col-10 mx-auto custom-file-input" type="file" id="archivo_03" accept="image/*" required> 
                        <label class="custom-file-label col-10 mx-auto" for="archivo_03">Seleccione una imagen...</label>
                        <div class="col-10 mx-auto invalid-feedback">Agregue una imagen</div>
                    </div>
                    <div class="row input-group mx-auto">                        
                        <input class="col-10 form-control mx-auto" type="text" placeholder="OBSERVACIONES" id="observaciones" maxlength="40" minlength="2">   
                    </div>

                </div>
                <!-- Botones de guradado y cierre -->
                <div class="modal-footer bg-dark text-light">
                    <button type="button" class="btn " data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-success">GUARDAR DATOS</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ELIMINAR LIBRO -->
    <div class="modal fade" id="frmEliminarLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ventana_registro">
                <!-- Cabecera donde esta el titulo -->
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title  " id="exampleModalLabel">ELIMINAR LIBRO</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Contenedor de contenido (formularios y demas) -->
                <div class="modal-body was-validated">
                     
                    <!-- input de edicion -->
                    <div class="row mx-auto mt-2">
                        <h6 class="col-10 mx-auto text-danger" min="1">DESEA ELIMINAR EL LIBRO SELECCIONADO...?</h6>
                    </div>  

                </div>
                <!-- Botones de guradado y cierre -->
                <div class="modal-footer bg-dark text-light">
                    <button type="button" class="btn " data-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn  btn-danger" data-dismiss="modal">ELIMINAR</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'php_moldes_html/librerias_js.php'; ?>

    <script type="text/javascript">
        //para el visor de imagenes
        jQuery('#out-of-the-box-demo').slippry();

        //para que se muestre el nombre del archivo subido:
        $('#archivo_01').change(function (e) {
            var files = [];
            for (var i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name);
            }
            $(this).next('.custom-file-label').html(files.join(', '));
        });

        $('#archivo_02').change(function (e) {
            var files = [];
            for (var i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name);
            }
            $(this).next('.custom-file-label').html(files.join(', '));
        });

        $('#archivo_03').change(function (e) {
            var files = [];
            for (var i = 0; i < $(this)[0].files.length; i++) {
                files.push($(this)[0].files[i].name);
            }
            $(this).next('.custom-file-label').html(files.join(', '));
        });

       
    </script>    
</body>

</html>