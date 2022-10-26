<?php 
include("clase.php"); 
$operaciones = new Operaciones("JORGE");
echo $operaciones->aumentarespacio(2);
echo '<br>';
echo $operaciones->invertir();
   
?>