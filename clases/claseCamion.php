

<?php
require_once("claseAuto.php");

final class Camion extends Auto{
    private $iPantallas = "";
    public $sAsientos;
    public $sStock = "En Stock";

    public function __construct(string $nombre, int $ruedas, string $color, int $puertas, string $motor, string $asientos)
    {
        parent::__construct($nombre, $ruedas, $color, $puertas, $motor);
    
        $this-> sAsientos = $asientos;
    }

    public function setPantallas(int $pantallas)
    {
        $this-> iPantallas = $pantallas;

    }

    public function getDatos()
    {
        $arrayVehiculo = array(
            'Producto' => $this-> sNombre,
            'Ruedas' => $this-> iRuedas,
            'Color' => $this-> sColor,
            'Estado' => $this-> sStock,
            'Purtas' => $this-> iPuertas,
            'Motor' => $this-> sMotor,
            'Asientos' => $this -> sAsientos,
            'Pantallas' => $this -> iPantallas
        );
        return $arrayVehiculo;
    }
}


?>