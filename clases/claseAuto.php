

<?php
require_once("claseVehiculo.php");
class Auto extends Vehiculo{

    public $iPuertas;
    public $sMotor;
    public $sStock = "Sin Stock";

    public function __construct(string $nombre, int $ruedas, string $color, int $puertas, string $motor)
    {
        parent::__construct($nombre, $ruedas, $color);

        $this-> iPuertas = $puertas;
        $this-> sMotor = $motor;
    }

    public function getDatos()
    {
        $arrayVehiculo = array(
            'Producto' => $this-> sNombre,
            'Ruedas' => $this-> iRuedas,
            'Color' => $this-> sColor,
            'Estado' => $this-> sStock,
            'Purtas' => $this-> iPuertas,
            'Motor' => $this-> sMotor
        );
        return $arrayVehiculo;
    }
}

?>