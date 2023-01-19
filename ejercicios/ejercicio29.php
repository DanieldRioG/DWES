<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio29</title>
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
        "domingo",];

    unset($diasSemana[array_search('jueves', $diasSemana)]);
    $diasSemana = array_values($diasSemana);

    foreach ($diasSemana as $clave => $valor) {
        echo "$clave => $valor <br>";
    }
    
    ?>
</body>
</html>