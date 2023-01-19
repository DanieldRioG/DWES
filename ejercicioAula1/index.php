<?php
session_start();
if (!isset($_SESSION['array'])) {
    include 'array.php';
    $_SESSION['array'] = $array2;
} else {
    $array2 = $_SESSION['array'];
}
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'array.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>index</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav 1">
                <li class="nav-item active ">
                    <a class="nav-link 10rem" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarOcupacion.php">Mostrar Ocupacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservaVuelos.php">Comprar Asiento</a>
                </li>
            </ul>
        </div>
    </nav>

    <p>Informacion de Vuelos, Destinos, Horario y Ocupación</p>
    <div class="container">
        <?php foreach ($array2 as $key => $value) : ?>
            <table>
                <?= $key ?>
                <?php foreach ($value as $key2 => $value2) : ?>
                    <?php if (is_array($value2)) : ?>
                        <?php foreach ($value2 as $key3 => $value3) : ?>
                            <br><?= 'fila ' . $key3 . ', asientos ' . sprintf("%06d", decbin($value3)) ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <?= $value2 ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        <?php endforeach; ?>
    </div>
</body>

</html>