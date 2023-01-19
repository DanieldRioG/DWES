<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio23</title>
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

    foreach ($meses2 as $mes) {
        echo ($mes), "<br>";
    }

    echo "<br>";

    $diasMes = array(
        "Enero" => 31,
        "Febrero" => 28,
        "Marzo" => 31,
        "Abril" => 30,
        "Mayo" => 31,
        "Junio" => 30,
        "Julio" => 31,
        "Agosto" => 31,
        "Septiembre" => 30,
        "Ooctubre" => 31,
        "Noviembre" => 30,
        "Diciembre" => 31,
    )
    ?>

    <table>
        <tr>
            <th>Nombre del Mes</th>
            <th>Días</th>
            <th>Mensaje</th>
        </tr>

        <?php foreach ($diasMes as $nombre => $valor) {
            echo "<tr><th>$nombre</th> <th>$valor</th> <th>El mes de ", lcfirst($nombre), " tiene $valor días</th><tr> <br>";
        } ?>




</body>

</html>