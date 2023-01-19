<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio25</title>
</head>

<body>
    <?php

    $diasSemana = [
        "lunes",
        "martes",
        "miércoles",
        "jueves",
        "viernes",
        "sábado",
        "domingo",
    ];


    $orden = [
        "primer",
        "segundo",
        "tercer",
        "cuarto",
        "quinto",
        "sexto",
        "séptimo",
        "octavo",
        "noveno",
        "décimo",
        "undécimo",
        "duodécimo",
        "decimotercero",
    ];

    $ordenDias = array_combine(array_intersect_key($orden, $diasSemana), array_intersect_key($diasSemana, $orden));
    print_r($ordenDias);
    echo "<br>";

    foreach ($ordenDias as $key => $valor) {
        echo "El $valor es el $key dia de la semana <br>";
    }
    ?>
</body>

</html>