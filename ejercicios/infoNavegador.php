<?php
$navegador=getenv("HTTP_REFERER");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Código embebido para conocer el navegador cliente</title>
  </head>
  <body>
    <p>Estás utilizando un navegador <?php echo $navegador ?>.</p>
  </body>
</html>

