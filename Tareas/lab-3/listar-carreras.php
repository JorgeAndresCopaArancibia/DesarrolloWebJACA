<?php
include('conexion.php'); 
$sql = "SELECT * FROM carreras";
$consulta = mysqli_query($con, $sql);
$respuesta = array();
while ($fila = mysqli_fetch_array($consulta)) {
    $carrera = array(
        'id' => $fila['id'],
        'nombre' => $fila['nombre'],
        'descripcion' => $fila['descripcion'],
    );
    array_push ($respuesta , $carrera);
} 
echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
mysqli_close($con);
?>