<?php include 'includes/header.php';?>

<?php
require_once 'clases/claseCamion.php';

$bicicleta = new Vehiculo("Bicicleta",2,"Roja");
$arrayVehiculo = $bicicleta -> getDatos();

echo "<pre>";
print_r($arrayVehiculo);
echo "</pre>";

$auto = new Auto("Sentra",4 ,"Azul Rey", 4, "2.0");
$arrayAuto = $auto -> getDatos();

echo "<pre>";
print_r($arrayAuto);
echo "</pre>";

$camion = new Camion("Volvo 9800", 10, "Plata", 1, "D 13", 50);
$camion -> setPantallas(25);
$arrayCamion = $camion -> getDatos();

echo "<pre>";
print_r($arrayCamion);
echo "</pre>";

include 'includes/footer.php';?>