<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio27</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }

        td,
        th {
            border: 2px solid #dddddd;
            text-align: left;
            border-color: black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <?php
    $peliculas = [
        'enero' => [
            25 => ['La vida de Brian', 'El discreto encanto de la burguesía',],
            28 => ['Los caballeros de la mesa cuadrada', 'El ángel exterminador',],
        ],
        'marzo' => [
            3 => ['El sentido de la vida', 'El desprecio',],
            4 => ['Al final de la escapada', 'Marnie la ladrona'],
            18 => ['Topaz', 'Bienvenido Mister Marshall', 'Una banda aparte',],
            25 => ['El verdugo'],
            26 => ['Calabuch', 'Vértigo',],
        ],
        'abril' => [1 => ['Pierrot el loco',],],
    ];
    ?>
    <table>
        <tr>
            <th>Mes</th>
            <th>Dia</th>
            <th>Película</th>
        </tr>

        <?php foreach ($peliculas as $key => $valor) {
            foreach ($valor as $key2 => $valor2) {
                foreach ($valor2 as $valor3) {
                    echo "<tr><th>$key</th> <th>$key2</th> <th>$valor3</th>";
                }
            }
        }

        ?>
    </table>
    <?= "<br>" ?>


    <?php


    foreach ($peliculas as $key => $valor) {
        foreach ($valor as $key2 => $valor2) {
            $str = implode(" , ", $valor2);
            if (count($valor2) > 1) {
                $str = substr_replace($str, ' y', strrpos($str, ','), 1);
            }
            echo "En $key, el dia $key2 vi las peliculas: ", $str,  ". <br>";
        }
    }

    ?>
</body>

</html>