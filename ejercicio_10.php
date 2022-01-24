<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10!!</title>
</head>
<body>
    <?php
    $linea = " ";
    for ($i=1;$i<=9;$i++){
        $linea = $linea.'x';
        echo $linea.'<br/>';

    

     };
    echo "----------------OUTRA MANEIRA DE FACELO----------------|<br>";
    for($linea=1;$linea<=9;$linea++){
        for($asterisco=1;$asterisco<=$linea;$asterisco++){
            echo "*";
        };
            echo "<br>";
    };
 
    ?>
</body>
</html>