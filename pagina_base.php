<?php
    error_reporting(0);
    include 'comprobador_usuario.php';    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Intercambios UNAH</title>
    <?php include 'php_moldes_html/librerias_head.php'; ?>
    <link rel="stylesheet" href="css/pagina_base.css">    
    <link rel = "icon" type = "image/png" href = "img/IconosPagina_Base/Icono2.png">
</head>

<body>
    <!-- Barra de navegacion -->
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Comprar Articulo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vender Articulo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cambiar Articulo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi Perfil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="logout.php">SALIR</a>
                    </li>
                </ul>
            </div>            
        </nav>
    </div>

    <div class="container cuerpo_pagina bg-light mt-3 border">

    </div>
    
    <?php include 'php_moldes_html/librerias_js.php'; ?>    
</body>

</html>