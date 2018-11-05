<?php
    error_reporting(0);
    include 'coneccion.php';
    session_start();
    $_SESSION['id_usuario']=-1;
    if (isset($_POST['btn_login'])) {   //comprobamos que se envieran datos con el formulario que contiene boton "btn_login"                    
        if (isset($_POST['txt_user']) && isset($_POST['txt_pass'])) {
            if ($_POST['txt_user']!=''&& $_POST['txt_pass']!='') {
                $sql = 'CALL login("'.$_POST['txt_user'].'" , "'.$_POST['txt_pass'].'")'; //procedimiento almacenado
                $consulta= mysqli_query($conection,$sql);
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
                mysqli_close($conection);
                if ($_SESSION['id_usuario'] != -1) {
                    header('location: ..\pagina_base.php');
                }else{
                    echo '<div class="row col-11 alert alert-danger mt-1 mb-0 mx-auto" role="alert">
                        <strong>Ojo!</strong> Usuario o Password incorrecto.
                    </div>';
                }
            }
        }
        //mysqli_close($conection);
    }                            
?>