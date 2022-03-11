<?php

    $nombreArchivo = "archivo.txt";
    $contenido = "Este es el contenido del archivo escrito desde PHP";
    
    $crearArchivo = fopen($nombreArchivo, "w");

    fwrite($crearArchivo, $contenido);
    fclose($crearArchivo);
    