<?php
    class UnaClase {

        public static function unMetodo() {
            echo "Esto es un metodo estatico";
        }

    }


    $obj = new UnaClase();
    $obj->unMetodo();
    echo "<br>";
    UnaClase::unMetodo();