<?php
    if ($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if ($valorA > $valorB) {
            echo "El valor de A es mayor a del valor B";
        }
        else if ($valorA < $valorB){
            echo "el valor de B es mayor al valor de A";
        }

    }

        switch($valorA) {
            case $valorA > $valorB:
                echo "El valor de A es mayor a del valor B";
                break;
            case $valorA < $valorB:
                echo "el valor de B es mayor al valor de A";
                break;
            default:
                echo "Los valores son iguales";
                break;
        
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionales</title>
</head>
<body>
    
    <form action="ejercicio9.php" method="POST">
        Valor A: 
        <input type="text" name="valorA" id="valorA">
        <br>
        Valor B:
        <input type="text" name="valorB" id="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>