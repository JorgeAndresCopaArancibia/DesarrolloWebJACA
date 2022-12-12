<?php
include('conexion.php'); 
session_start();

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $consulta = mysqli_query($con, $sql);
    $respuesta = array();
    while ($fila = mysqli_fetch_array($consulta)) {
        $libro = array(
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'usuario' => $fila['usuario'],
            'password' => $fila['password'],
        );
        array_push ($respuesta , $libro);
    }
    $_SESSION['usuario_app'] = $respuesta;
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    mysqli_close($con);
}else{
    echo 'No se enviaron los datos del usuario!';
}

?>