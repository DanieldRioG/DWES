<?php

$sql = 'SELECT name, LocationID, CostRate FROM Production.Location';
try {
    $con = new PDO('sqlsrv:server=(local); database=AdventureWorks2019', "", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stn = $con->prepare($sql);
    $stn->execute();
    $filas = $stn->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
    $error = $er->getMessage();
} finally {
    if (isset($con))
        unset($con);
}
//var_dump($filas);
?>


<?php

$sql = 'SELECT name, LocationID, CostRate FROM Production.Location';
try {
    $con = new PDO('sqlsrv:server=(local); database=AdventureWorks2019', "", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stn = $con->prepare($sql);
    $stn->execute();
    while ($filas = $stn->fetch(PDO::FETCH_ASSOC)) {
        print_r(($filas));
    }
} catch (PDOException $ex) {
    $error = $ex->getMessage();
} finally {
    if (isset($con))
        unset($con);
}
//var_dump($filas);
?>

<?php

$sql = 'SELECT name, LocationID, CostRate FROM Production.Location WHERE CostRate > :ratio';
try {
    $con = new PDO('sqlsrv:server=(local); database=AdventureWorks2019', "", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stn = $con->prepare($sql);
    $stn->bindValue(':ratio', '0');
    $stn->execute();
    while ($filas = $stn->fetch(PDO::FETCH_ASSOC)) {
        print_r(($filas));
    }
} catch (PDOException $ex) {
    $error = $ex->getMessage();
} finally {
    if (isset($con))
        unset($con);
}
//var_dump($filas);
?>

<?php
$sql = 'INSERT INTO Production.Location (Name, CostRate, Availability, ModifiedDate) VALUES (:nombre, :ratio, :disponibilidad, :fecha)';
$sql = 'SELECT name, LocationID, CostRate FROM Production.Location WHERE CostRate > :ratio';
try {
    $con = new PDO('sqlsrv:server=(local); database=AdventureWorks2019', "", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stn = $con->prepare($sql);
    $stn->bindValue(':ratio', '0');
    $stn->bindValue(':nombre', 'Albert Hammon');
    $stn->bindValue(':disponibilidad', '115.0');
    $stn->bindValue('fecha:', '21-11-2022');
    $stn->execute();
    echo $con->lastInsertId();
    $stn = $con->prepare($sql);
    $stn->bindValue(':ratio', '0');
    $stn->execute();
    $filas = $stn->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
    die(var_dump($ex->getMessage()));
} finally {
    if (isset($con))
        unset($con);
}
//var_dump($filas);
?>

<?php
class Usuario extends Exception
{
    private array $error = [];
    public function __construct(array $error, string $message = '')
    {
        if (!empty($mensaje));
        $this->$error = $error;
    }
    public function getError(): array
    {
        return $this->error;
    }
}
