<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio19</title>
</head>
<body>
    <?php

    $var1=15.3;
    $var2=20.7;
    $var3=16;

    echo "Los numeros a ordenar son: $var1, $var2, $var3 <br>";

    if(($var1<$var2) && ($var2<$var3)){
        echo "El orden es: $var1, $var2, $var3";
    } else if (($var1<$var3) && ($var3<$var2)){
        echo "El orden es: $var1, $var3, $var2";
    } else if (($var2<$var1) && ($var1<$var3)){
        echo "El orden es: $var2, $var1, $var3";
    } else if (($var2<$var3) && ($var3<$var1)){
        echo "El orden es: $var2, $var3, $var1";
    } else if (($var3<$var2) && ($var2<$var1)){
        echo "El orden es: $var3, $var2, $var1";
    } else{
        echo "El orden es: $var3, $var1, $var2";
    }
    ?>
</body>
</html>