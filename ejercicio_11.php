<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $blancos = "";
    echo "<pre>";
    echo "*<br>";
    echo "**<br>";

    for ($i=1;$i<=6;$i++){
        $blancos=$blancos."&nbsp"; //encadena espacios en blanco
        echo "*".$blancos."* <br/>";
    

    };
    echo "********* <br>";
    echo "</pre>";

    echo "----------------De OTRA FORMA----------------|<br>";
    echo "<pre>";
    for($linea=1;$linea<=9;$linea++){
        for($asterisco=1;$asterisco<=$linea;$asterisco++){
            if($asterisco == 1 || $asterisco == $linea || $linea == 9){
                echo "*";
            }else{
                echo "&nbsp";

            }
            
        };
            echo "<br>";
    };
 



    ?>
 
    </pre>

</body>
</html>