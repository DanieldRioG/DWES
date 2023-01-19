<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    <style>
        pre {
            font-family: 'Courier New', Courier, monospace;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <pre>
    <?php
    $bruto = 2836.25;
    $retencion = 15.75;
    $cuotaSS = 385.60;
    $neto;
    echo "<br>";
    echo "Sueldo bruto \t \t \t $bruto", "<br>";
    echo "Retención a cuenta del I.R.P.F. &nbsp &nbsp$retencion%", "<br>";
    echo "Cuota SS a cargo del trabajador &nbsp&nbsp<u>$cuotaSS</u>", "<br>";
    echo "Sueldo neto \t \t \t&nbsp", $neto = round($bruto - (($bruto * $retencion) / 100 + $cuotaSS), 2), "<br>";
    ?>   
    
    </pre>
</body>

</html>