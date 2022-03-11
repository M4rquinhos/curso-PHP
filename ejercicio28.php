<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "album";

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion establecida con exito";

        $sql = "INSERT INTO `fotos` (`id`, `Nombre`, `ruta`) VALUES (NULL, 'jugando con sql', 'foto2.jpg');";
        $conexion->exec($sql);

    } 
    catch(PDOException $e) {
        echo "Conexion fallida $e";
    }
