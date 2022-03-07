<?php
    $arreglo = ["Juan", "Pedro", "Maria", "Juan", "Pedro", "Maria"];

    foreach ($arreglo as $nombre) {
        echo "El nombre es: $nombre <br>";
    }

    echo "<br>";

    for ($i=0; $i < count($arreglo); $i++) { 
        echo "El nombre es: $arreglo[$i] <br>"; 
    }

    print_r($arreglo);
?>
