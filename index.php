<?php include 'includes/header.php';?>

<?php
require_once("vendor/autoload.php");
require_once("clases/claseCamion.php");


$bicicleta = new Vehiculo("Bicicleta",2,"Roja");
$arrayVehiculo = $bicicleta -> getDatos();

d($arrayVehiculo);

$auto = new Auto("Sentra",4 ,"Azul Rey", 4, "2.0");
$arrayAuto = $auto -> getDatos();


d($arrayAuto);


$camion = new Camion("Volvo 9800", 10, "Plata", 1, "D 13", 50);
$camion -> setPantallas(25);
$arrayCamion = $camion -> getDatos();


d($arrayCamion);


include 'includes/footer.php';?>