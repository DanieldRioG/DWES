<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio</title>
</head>

<body>
    <?php

    $peliculas = [
        'enero' => [
            25 => ['La vida de Brian', 'El discreto encanto de la burguesía',],
            28 => ['Los caballeros de la mesa cuadrada', 'El ángel exterminador',],
        ],
        'febrero' => 0,
        'marzo' => [
            3 => ['El sentido de la vida', 'El desprecio',],
            4 => ['Al final de la escapada', 'Marnie, la ladrona'],
            18 => ['Topaz', 'Bienvenido Mister Marshall', 'Una banda aparte',],
            25 => ['El verdugo'],
            26 => ['Calabuch', 'Vértigo',],
        ],
        'abril' => 0,
        'mayo' => [1 => ['Pierrot el loco',],],
    ];
    $peliculas['febrero'] = [2 => ['La muerte en directo', 'La hija d d dArtagnan',], 8 => ['Capitan Conan'],];

    foreach ($peliculas as $key => $valor) {
        if (is_array($valor)) {
            foreach ($valor as $key2 => $valor2) {
                foreach ($valor2 as $key3) {
                }
                echo "En $key, el día $key2 vi las películas: ", implode(" , ", $valor2), " <br>";
            }
        } else {
            echo "En $key, no vi ninguna pelicula. <br>";
        }
    }
    ?>
</body>

</html>