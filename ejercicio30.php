<?php
// sesiones xd
    session_start();
    
    $_SESSION['usuario'] = "Juan";
    $_SESSION['status'] = "logged";

    echo "Sesion inicida con exito <br>";
    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Status: " . $_SESSION['status'] . "<br>";
