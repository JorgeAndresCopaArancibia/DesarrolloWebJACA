<?php
class Operaciones {
    public $cadena;
    function __construct($cad) {
        $this->cadena = $cad;
    }
    function aumentarespacio ($num) {
        $array = str_split($this->cadena);
        $espacio = '&nbsp;';
        $espacios = '';
        for( $i = 0; $i < $num; $i++ ) {
            $espacios = $espacios . $espacio;
        }
        $res = '';
        for( $i = 0; $i <= count($array)-1; $i++ ) {
            $res = $res . $array[$i] . $espacios;
        }
        return $res;
    }
    function invertir() {
        $array = str_split($this->cadena);
        // print_r($array);
        $res = '';
        for( $i = count($array)-1; $i >= 0; $i-- ) {
            $res = $res . $array[$i];
        }
        return $res;
    }
}

?>