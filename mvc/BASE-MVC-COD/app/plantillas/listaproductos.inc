 <?php
    //$contenido = '<table><tr><th>Nombre</th><th>Color</th><th>Precio</th><th>Tamaño</th><th>Peso</th></tr>';

    //foreach ($productos as $p) {
    //    $contenido .= "<tr><td>$p[Nombre]</td><td>$p[Color]</td><td>$p[Precio]</td><td>$p[Tamaño]</td><td>$p[Weight]</td></tr>";
    //};
    //$contenido .= "</table>"
    ob_start();
    ?>


 <?php if (isset($error)) : ?>
     <p class="error"><?= $error ?></p>
 <?php else :
        $cabs = array_keys($productos[0]);
    ?>
     <table>
         <thead>
             <tr>
                 <?php foreach ($cabs as $value) : ?>
                     <th><?= $value ?></th>
                 <?php endforeach; ?>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($productos as $key => $value) : ?>
                 <tr>
                     <?php foreach ($value as $valor) : ?>
                         <td><?= $valor ?></td>
                     <?php endforeach; ?>
                 </tr>
             <?php endforeach; ?>
         </tbody>
     </table>
 <?php endif; ?>

 <?php $contenido = ob_get_clean(); ?>
 <?php include 'base.php' ?>