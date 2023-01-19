<?php
    session_start();
    $var = "Hola, mundo";
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer ejemplo PHP</title>
</head>
<body>
    <p <?=isset($_SESSION['vez2'])?'style="color:red;"':''?>>
  <?php
  echo $var;
  $_SESSION['vez2']=true;
  ?>
</body>
</html>