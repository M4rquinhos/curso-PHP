<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        echo "Usuario: " . $_SESSION['usuario'] . "<br>";
        echo "Status: " . $_SESSION['status'] . "<br>";
    }
    else {
        echo "No hay sesion iniciada";
    }
    
