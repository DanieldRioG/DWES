<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio18</title>
</head>

<body>
    <?php

    $var1 = 7;
    echo "var1= ", var_dump($var1), "<br>";
    $var2 = 4;
    echo "var2= ", var_dump($var2), "<br>";
    $var3 = 13;
    echo "var3= ", var_dump($var3), "<br>";

    if ($var1 == max($var1, $var2, $var3)) {
        echo "La mayor valor de entre todas las variables es la variable 1: $var1 <br>";
    } else if ($var2 == max($var1, $var2, $var3)) {
        echo "La mayor valor de entre todas las variables es la variable 2: $var2 <br>";
    } else if ($var3 == max($var1, $var2, $var3)) {
        echo "La mayor valor de entre todas las variables es la variable 3: $var3 <br>";
    }

    if ($var1 == min($var1, $var2, $var3)) {
        echo "El menor valor de entre todas las variables es la variable 1: $var1 <br>";
    } else if ($var2 == min($var1, $var2, $var3)) {
        echo "El menor valor de entre todas las variables es la variable 2: $var2 <br>";
    } else if ($var3 == min($var1, $var2, $var3)) {
        echo "El mayor valor de entre todas las variables es la variable 3: $var3 <br>";
    }


    ?>
</body>

</html>