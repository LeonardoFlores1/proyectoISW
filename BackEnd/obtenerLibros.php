<?php
include 'coneccion.php';
session_start();
$id=$_SESSION['id_usuario'];
$query="Select * from libro where id_usuario= $id";
$resultado=mysqli_query($conection,$query);
if (!$resultado){
    die('Query ERROR '. mysqli_error($conection));
}
$json=array();
while($row=mysqli_fetch_array($resultado)){
    $json[]=array(
        'id'=>$row['id_libro'],
        'nombre'=>$row['nombre'],
        'edicion'=>$row['edicion'],
        'volumen'=>$row['volumen'],
        'autor'=>$row['autor'],
        'precio'=>$row['precio'],
        'intercambia'=>$row['se_intercambia'],
        'id_usuario'=>$row['id_usuario'],
        'id_estado'=>$row['id_estado']
    );
}

$jsonstring=json_encode($json);
echo $jsonstring
?>