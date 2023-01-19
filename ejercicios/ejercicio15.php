<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio15</title>
    <style>
    body{
        background-color: lightblue;
    }
    h2{
        font-family: arial;
        font-size: 18px;
        text-align: center;
    }
    </style>
</head>

<body>
    <h2>
    <?php define('pi2', '3.1415926535897932384626433832795');
    
    const e = 2.7182818284590452353602874713527;
    const pi = 3.1415926535897932384626433832795;
    $radio = 102.75;
    $logaritmo = 1.6094379124341;
    $perimetro = 2 * pi * $radio;
    $loaritmo = e;
    echo "El perímetro de la circunferencia con un \t radio de $radio centímetros es de $perimetro metros", "<br>";
    echo "El número que representa el logaritmo neperiano $logaritmo es ", pow(e, $logaritmo); 

     ?>
    </h2>
</body>
</html>