

<?php 

class Vehiculo{
    public $sNombre;
    public $iRuedas;
    public $sColor;
    protected $sStock = "En Stock";

    public function __construct(string $nombre, int $ruedas, string $color)
    {
        $this-> sNombre = $nombre;
        $this-> iRuedas = $ruedas;
        $this-> sColor = $color;
    }

    public function getDatos(){
        $arrayVehiculo = array(
            'Producto' => $this-> sNombre,
            'Ruedas' => $this-> iRuedas,
            'Color' => $this-> sColor,
            'Estado' => $this-> sStock
        );
        return $arrayVehiculo;
    }
}


?>