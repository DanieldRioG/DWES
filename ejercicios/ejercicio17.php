<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio17</title>
</head>

<body>
    <?php

    $var1 = 5230;
    $var2 = 0;
    $var3 = null;

    $resultado;
    if ($var2 === 0 || $var1 === 0) {
        $resultado = "División por 0, resultado infinito";
    } else {
        $resultado = $var1 / $var2;
    }

    $var3 = $var3 ?? 1;
    if (is_null($var3)) {
        $var3 = 1;
        $resultado2 = $var1 * $var3;
    }
    if (is_null($var1)) {
        $var1 = 1;
    }
    if (is_null($var2)) {
        $var2 = 2;
    }

    echo "El resultado de $var1 / $var2 es: ", $resultado, ". y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var1 * $var3 es: ", $resultado2, ". y el tipo de datos del resultado es ", gettype($resultado2), "<br>";

    ?>
</body>

</html>