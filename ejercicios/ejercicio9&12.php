<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    $var1 = 5230;
    echo "La variable $var1 es de tipo  ipoDatosVariable y su valor es ", $var1 . '<br>';
    $var2 = 0;
    echo "La variable $var2 es de tipo  ipoDatosVariable y su valor es ", $var2 . '<br>';
    $var3 = -45;
    echo "La variable $var3 es de tipo  ipoDatosVariable y su valor es ", $var3 .    '<br>';
    $var4 = true;
    echo "La variable $var4 es de tipo  ipoDatosVariable y su valor es ", $var4 .    '<br>';
    $var5 = false;
    echo "La variable $var5 es de tipo  ipoDatosVariable y su valor es ", $var5 .    '<br>';
    $var6 = 5230.23;
    echo "La variable $var6 es de tipo  ipoDatosVariable y su valor es ", $var6 . '<br>';
    $var7 = -45.23;
    echo "La variable $var7 es de tipo  ipoDatosVariable y su valor es ", $var7 . '<br>';
    $var8 = 0.0;
    echo "La variable $var8 es de tipo  ipoDatosVariable y su valor es ", $var8 .    '<br>';
    $var9 = "Lola la de las flores";
    echo "La variable $var9 es de tipo  ipoDatosVariable y su valor es ", $var9 . '<br>';
    $var10 = "825";
    echo "La variable $var10 es de tipo tipoDatosVariable y su valor es ", $var10 . '<br>';
    $var11 = "0825";
    echo "La variable $var11 es de tipo tipoDatosVariable y su valor es ", $var11 . '<br>';
    $var12 = "450 loros";
    echo "La variable $var12 es de tipo tipoDatosVariable y su valor es ", $var12 . '<br>';
    $var13 = "Loros a 45.9";
    echo "La variable $var13 es de tipo tipoDatosVariable y su valor es ", $var13 . '<br>';
    $var14 = "48E4";
    echo "La variable $var14 es de tipo tipoDatosVariable y su valor es ", $var14 . '<br>';
    $var15 = "45.9";
    echo "La variable $var15 es de tipo tipoDatosVariable y su valor es ", $var15 . '<br>';
    $var16 = 0.6;
    echo "La variable $var16 es de tipo tipoDatosVariable y su valor es ", $var16 . '<br>';
    $var17 = 0.3;
    echo "La variable $var17 es de tipo tipoDatosVariable y su valor es ", $var17 . '<br>';
    $var18 = 10;
    echo "La variable $var18 es de tipo tipoDatosVariable y su valor es ", $var18 . '<br>';

    echo "</br>";
    echo "El resultado de $var1 + $var3 es ", $resultado = $var1 + $var3, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var3 + $var5 es ", $resultado = $var3 + $var5, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var10 * $var1 es ", $resultado = $var10 * $var1, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var1 / $var10 es ", $resultado = $var1 / $var10, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var11 + $var3 es ", $resultado = $var11 + $var3, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var9 - $var3 es ", $resultado = $var9 - $var3, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var3 + $var12 es ", $resultado = $var3 + $var12, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var13 + $var8 es ", $resultado = $var13 + $var8, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var3 * $var14 es ", $resultado = $var3 * $var14, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var18 + $var15 es ", $resultado = $var18 + $var15, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var10 ++ es ", $resultado = $var10++, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de --$var11 es ", $resultado = --$var11, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var1 && $var9 es ", $resultado = $var1 && $var9, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var8 || $var12 es ", $resultado = $var8 || $var12, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de !$var11 es ", $resultado = !$var11, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de !$var10 es ", $resultado = !$var10, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de !$var13 es ", $resultado = !$var13, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var13 && $var8 es ", $resultado = $var13 && $var8, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var13 || $var8 es ", $resultado = $var13 || $var8, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var4 . $var5 es ", $resultado = $var4 . $var5, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var4 . $var1 es ", $resultado = $var4 . $var1, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var10 . $var13 es ", $resultado = $var10 . $var13, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var14 . $var16 es ", $resultado = $var14 . $var16, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var1 . $var9 es ", $resultado = $var1 . $var9, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    echo "El resultado de $var1 . $var3 es ", $resultado = $var1 . $var3, " y el tipo de datos del resultado es ", gettype($resultado), "<br>";
    ?>
</body>

</html>