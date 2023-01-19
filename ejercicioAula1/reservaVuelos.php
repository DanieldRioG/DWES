<?php
session_start();
if (!isset($_SESSION['array'])) {
    include 'array.php';
    $_SESSION['array'] = $array2;
} else {
    $array2 = $_SESSION['array'];
}
const A = 32;
const B = 16;
const C = 8;
const D = 4;
const E = 2;
const F = 1;
$asientos = ['A' => A, 'B' => B, 'C' => C, 'D' => D, 'E' => E, 'F' => F];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="mostrarOcupacion.php">Mostrar Ocupacion</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="reservaVuelos.php">Comprar Asiento</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post">
        <fieldset id="f2">
            <legend>Comprar Asientos</legend>
            <label>Seleccionar vuelo:</label>
            <select name="vuelo" id="vuelo">
                <option>Seleccionar vuelo</option>
                <option value="AK127">AK127 Madrid-Londres, 00:25</option>
                <option value="AM250">AM250 Madrid-Berlin, 01:10</option>
                <option value="AMK128">AK128 Londres-Madrid, 01:55</option>
            </select><br>
            <label>Fila en la que reservar:</label>
            <input type="text" name="numFila" id="numF" value="1"><br>
            <label>Asiento que reservar:</label>
            <select name="columna" id="columna">
                <option value="A" selected>A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select><br>
            <button type="submit" name="mandar" id="btn">Comprar/Cancelar</button>
        </fieldset>
    </form>
</body>

<?php
if (isset($_POST['mandar'])) :
    $vuelo = $_POST['vuelo'];
    $col = $_POST['numFila'];
    $asiento = $_POST['columna'];
    if (!($array2[$vuelo]['Ocupacion'][$col] & $asientos[$asiento])) {
        $array2[$vuelo]['Ocupacion'][$col] += $asientos[$asiento];
        $_SESSION['array'][$vuelo]['Ocupacion'][$col] += $asientos[$asiento];
    } else {
        echo '<p class="error">Asiento ya ocupado</p>';
    }
endif; ?>

</html>