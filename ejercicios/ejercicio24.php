<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio24</title>
</head>
<body>
    <?php
    $diasSemana = ["lunes",
            "martes",
            "1" => "miércoles",
            1.7 => "jueves",
            "01" => "viernes",
            True => "sábado",
            "domingo",];

            foreach ($diasSemana as $dias) {
                echo ($dias),"<br>";
            };
    ?>    
</body>
</html>