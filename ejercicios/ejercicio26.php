<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio26</title>
</head>

<body>
    <?php
    $valores = array(
        5230,
        0,
        -45,
        true,
        false,
        5230.23,
        -45.23,
        0.0,
        "Lola la de las flores",
        "825",
        "0825",
        "450 loros",
        "Loros a 45.9",
        "48E4",
        "45.9",
        0.6,
        0.3,
        10,
    );



    for ($i = 0; $i < count($valores); $i++) {
        echo "El elemento ", key($valores), " del array es de tipo ", gettype($valores[$i]), " y su valor es $valores[$i] <br>";
        next($valores);
    }
    ?>
</body>

</html>