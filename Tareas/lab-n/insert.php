<?php
include('conexion.php'); 

if (isset($_POST["nombres"]) && isset($_POST["apellidos"]) && isset($_POST["cu"]) && isset($_POST["sexo"]) && isset($_POST["carreras"])) {
    $nombres = json_decode($_POST["nombres"]);
    $apellidos = json_decode($_POST["apellidos"]);
    $cu = json_decode($_POST["cu"]);
    $sexo = json_decode($_POST["sexo"]);
    $carreras = json_decode($_POST["carreras"]);
    
    foreach ($nombres as $key => $valor) {
        echo $apellidos[$key];
        $s = true;
        if($sexo[$key] == 'H') {
            $s = true;
        } else {
            $s = false;
        }

        $sql = "INSERT INTO estudiante(nombre, apellido, sexo, cu, idcarrera) VALUES('$valor','$apellidos[$key]','$s', '$cu[$key]', '$carreras[$key]')";
        mysqli_query($con, $sql);
    }
    echo 'datos insertado correctamente';
    mysqli_close($con);
}else{
    echo 'Los parametros necesarios no se enviaron correctamente!';
}
?>