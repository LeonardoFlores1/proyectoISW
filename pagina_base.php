<!DOCTYPE html>
<html lang="es">

<head>
    <title>Intercambios UNAH</title>
    <?php include 'php_moldes_html/librerias_head.php'; ?>     
</head>

<body>
    <!-- Barra de navegacion -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
            <a class="navbar-brand" href="">INTERCAMBIOS UNAH</a>            
            <!-- menu que se comprimira notar que el contenedor tiene el mismo id que el boton (togler) anterior -->
            <div class="collapse navbar-collapse float-right" id="navbarNav">
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
                        <a class="nav-link" href="#">SALIR</a>
                    </li>
                </ul>
            </div>
            <!-- boton togler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <?php include 'php_moldes_html/librerias_js.php'; ?>    
</body>

</html>