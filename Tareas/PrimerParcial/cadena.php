<?php
if (isset($_POST['text'])) {
    $text = strtolower($_POST['text']);
    //Hola esta es la text que contiene SCRIPT
    $cadena = 'script';
    $position = strpos($text, $cadena);
    if( $position === false ) {
        echo $text;
    } else {
        $newText = str_replace($cadena, '', $text);
        echo "Tiene la palabra script el text <b>" . $newText . "</b>";
    }
}else{
    echo 'No se envio el text!';
}
?>