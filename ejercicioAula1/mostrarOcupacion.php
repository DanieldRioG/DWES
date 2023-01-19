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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/index.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="mostrarOcupacion.php">Mostrar Ocupacion</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="reservaVuelos.php">Comprar Asiento</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="POST">
        <fieldset id="f1">
            <legend>Mostrado de Ocupación</legend>
            <label>Seleccionar vuelo:</label>
            <select name="vuelo" id="vuelo">
                <option value="AK127" selected>AK127 Madrid-Londres, 00:25</option>
                <option value="AM250">AM250 Madrid-Berlin, 01:10</option>
                <option value="AMK128">AK128 Londres-Madrid, 01:55</option>
            </select><br>
            <button type="submit" name="mandar" id="btn">Mostrar Ocupacion</button>

            <select name="tipo" id="tipo">
                <option value="vertical">vertical</option>
                <option value="horizontal">horizontal</option>
            </select><br>

            <!-- <input type="radio" name="forma" value="vertical" checked>
            <label for="a" checked>Vertical</label>
            <input type="radio" name="forma" value="horizontal">
            <label for="a">Horizontal</label> -->
        </fieldset>
    </form>


    <?php if (isset($_POST['mandar'])) {
        $orientacion = $_POST['tipo'];
        if ($orientacion === 'vertical') {
            $vuelo = $array2[$_POST['vuelo']] ?>
            <table>
                <tr>
                    <th>Nº Fila</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>E</th>
                    <th>F</th>
                </tr>
                <?php
                foreach ($vuelo as $key => $value) {
                    if (is_array($value)) {
                        foreach ($value as $key2 => $value2) { ?>
                            <tr>
                                <th><?= 'Fila ' . $key2 ?></th>
                                <td><?= $value2 & 32 ? 'ocupado' : 'libre' ?></td>
                                <td><?= $value2 & 16 ? 'ocupado' : 'libre' ?></td>
                                <td><?= $value2 & 8 ? 'ocupado' : 'libre' ?></td>
                                <td><?= $value2 & 4 ? 'ocupado' : 'libre' ?></td>
                                <td><?= $value2 & 2 ? 'ocupado' : 'libre' ?></td>
                                <td><?= $value2 & 1 ? 'ocupado' : 'libre' ?></td>
                            </tr><?php
                                }
                            }
                        } ?>
            </table>
        <?php } else { ?>
            <table>
                <?php $vuelo = $array2[$_POST['vuelo']] ?>
                <tr>
                    <th>Filas</th>
                    <th>Fila 1</th>
                    <th>Fila 2</th>
                    <th>Fila 3</th>
                    <th>Fila 4</th>
                    <th>Fila 5</th>
                    <th>Fila 6</th>
                    <th>Fila 7</th>
                    <th>Fila 8</th>
                    <th>Fila 9</th>
                    <th>Fila 10</th>
                    <th>Fila 11</th>
                    <th>Fila 12</th>
                    <th>Fila 13</th>
                    <th>Fila 14</th>
                    <th>Fila 15</th>
                    <th>Fila 16</th>
                    <th>Fila 17</th>
                    <th>Fila 18</th>
                    <th>Fila 19</th>
                    <th>Fila 20</th>
                </tr>
                <?php
                $bit = 32;
                $arrayLetras = ['', 'A', 'B', 'C', 'D', 'E', 'F'] ?>
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <tr>
                        <th><?= $arrayLetras[$i] ?></th>
                        <?php foreach ($array2[$_POST['vuelo']]['Ocupacion'] as $key2 => $value) : ?>
                            <td><?= $value & $bit ? 'ocupado' : 'libre' ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php $bit = $bit / 2; ?>
                <?php endfor; ?>
            </table>
        <?php } ?>
    <?php } ?>

</html>
</body>