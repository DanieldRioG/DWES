<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio22</title>
</head>

<body>
    <?php

    $meses = array(
        0 => "enero",
        1 => "febrero",
        2 => "marzo",
        3 => "abril",
        4 => "mayo",
        5 => "junio",
        6 => "julio",
        7 => "agosto",
        8 => "septiembre",
        9 => "octubre",
        10 => "noviembre",
        11 => "diciembre",
    );

    for ($cont = 0; $cont <= 11; $cont++) {
        echo ($meses[$cont]), "<br>";
    }

    echo "<br>";

    $meses2 = array(
        1 => "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviembre",
        "diciembre",
    );

    $cont2 = 1;
    $num = count($meses2);
    while ($num >= $cont2) {
        echo $meses2[$cont2], "<br>";

        $cont2++;
    }

    ?>
</body>

</html>