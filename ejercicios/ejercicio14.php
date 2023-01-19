<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio14</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  border-color: black;
  padding: 8px;
}

</style>
</head>
<body>
<table>
  <tr>
    <th>Expresión</th>
    <th>Tipos de datos de la expresion</th>
    <th>Tiene un valor</th>
    <th>Tiene un valor NULL</th>
    <th>Está definida</th>
  </tr>
  <tr>
    <th><?php echo "var1: ";echo $var1=5230?></th>
    <th><?php echo gettype($var1) ?></th>
    <th><?php echo var_dump(empty($var1)) ?></th>
    <th><?php echo var_dump(is_null($var1))?></th>
    <th><?php var_dump(isset($var1)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var2: ';echo $var2=0?></th>
    <th><?php echo gettype($var2) ?></th>
    <th><?php echo var_dump(empty($var2)) ?></th>
    <th><?php echo var_dump(is_null($var2)) ?></th>
    <th><?php var_dump(isset($var2)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var3: ';echo $var3?></th>
    <th><?php echo gettype($var3) ?></th>
    <th><?php echo var_dump(empty($var3)) ?></th>
    <th><?php echo var_dump(is_null($var3)) ?></th>
    <th><?php var_dump(isset($var3)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var4: ';echo $var4=true?></th>
    <th><?php echo gettype($var4) ?></th>
    <th><?php echo var_dump(empty($var4)) ?></th>
    <th><?php echo var_dump(is_null($var4)) ?></th>
    <th><?php var_dump(isset($var4)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var5: ';echo $var5=false?></th>
    <th><?php echo gettype($var5) ?></th>
    <th><?php echo var_dump(empty($var5)) ?></th>
    <th><?php echo var_dump(is_null($var5)) ?></th>
    <th><?php var_dump(isset($var5)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var6: ';echo $var6=''?></th>
    <th><?php echo gettype($var6) ?></th>
    <th><?php echo var_dump(empty($var6)) ?></th>
    <th><?php echo var_dump(is_null($var6)) ?></th>
    <th><?php var_dump(isset($var6)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var7: ';echo $var7=" Lola la de las flores"?></th>
    <th><?php echo gettype($var7) ?></th>
    <th><?php echo var_dump(empty($var7)) ?></th>
    <th><?php var_dump(is_null($var7)) ?></th>
    <th><?php var_dump(isset($var7)) ?></th>
  </tr>
  <tr>
    <th><?php echo 'var8: ';echo $var8=null ?></th>
    <th><?php echo gettype($var8) ?></th>
    <th><?php var_dump(empty($var8))?></th>
    <th><?php var_dump(is_null($var8)) ?></th>
    <th><?php var_dump(isset($var8)) ?></th>
  </tr>
</table>
</body>
</html>