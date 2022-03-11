<?php

    $jsonContenido = '[ 
        {"nombre":"Juan", "apellido":"Perez", "edad":30},
        {"nombre":"Pedro", "apellido":"Gonzalez", "edad":25},
        {"nombre":"Ana", "apellido":"Lopez", "edad":28},
        {"nombre":"Maria", "apellido":"Martinez", "edad":22},
        {"nombre":"Carlos", "apellido":"Gomez", "edad":35}
     ]';

    $resultado = json_decode($jsonContenido);
    // print_r($resultado);

    foreach($resultado as $persona) {
        print_r($persona->nombre . " " . $persona->apellido . " " . $persona->edad . "<br>");
    }
