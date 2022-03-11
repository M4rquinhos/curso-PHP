<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "album";

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();
        // print_r($resultado);

        foreach($resultado as $foto) {
            echo $foto['Nombre']. "<br>";
        }

        echo "<br>";
        echo "Conexion establecida con exito";

    } 
    catch(PDOException $e) {
        echo "Conexion fallida $e";
    }
