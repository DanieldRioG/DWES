<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej20</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 100) {
        if (perteneceFibo($i)) {
            echo "El numero $i ", parImpar($i), ", ", esPrimo($i), " y ", perteneceFibo($i), "<br>";
        } else {
            echo "El numero $i ", parImpar($i), " y ", esPrimo($i), ".<br>";
        }
        $i++;
    }
    function parImpar($i)
    {
        if (($i % 2) == 0 || $i == 1) {
            return "es par";
        } else {
            return "es impar";
        }
    }
    function esPrimo($i)
    {
        for ($cont = 2; $cont < $i; $cont++) {
            if (($i % $cont) == 0) {
                return "no es primo";
            }
        }
        return "es primo";
    }
    function perteneceFibo($i)
    {
        $var1 = 0;
        $var2 = 1;

        for ($cont = 0; $cont < 20; $cont++) {
            $temporal = $var1;
            $var1 = $var2;
            $var2 = $temporal + $var1;

            if ($i == $var1) {
                if ($i != 1) {
                    return "pertenece a la serie fibonacci.";
                }
                return "pertenece a la serie fibonacci";
            }
        }
    }
    ?>
</body>

</html>