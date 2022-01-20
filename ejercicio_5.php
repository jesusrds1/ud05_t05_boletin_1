<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_5</title>
</head>
<body>
<?php
    $x = '144';
    $y = '999';
    
    $resultado = $x + $y;
    echo "Valor x = $x ";
    echo "Valor y = $y ";
    echo "<br/> Suma de X e Y= ($x + $y) = $resultado ";
    $resultado = $x - $y;
    echo "<br/> Resta de X e Y= ($x - $y) = $resultado ";
    $resultado = $x * $y;
    echo "<br/> Multiplicacion de X e Y= ($x * $y) = $resultado ";
    $resultado = $x % $y;
    echo "<br/> Division de X e Y= ($x % $y) = $resultado ";

    ?>
</body>
</html>