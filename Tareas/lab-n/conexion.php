<?php
$con = new mysqli("localhost","root","","parcial1");
if($con->connect_error)
{
    die("Conexion fallida ".$con->connect_error);

}
?>