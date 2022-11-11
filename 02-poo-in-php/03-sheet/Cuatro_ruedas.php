<?php
class Cuatro_ruedas extends Vehiculo
{
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas){
        $this->setColor($color);
        $this->setPeso($peso);
        $this->numero_puertas = $numero_puertas;
    }

    public function getNumeroPuertas()
    {
        return $this->numero_puertas;
    }

    public function setNumeroPuertas($numero_puertas)
    {
        $this->numero_puertas = $numero_puertas;
    }

    public function repintar($color)
    {
        $this->setColor($color);
    }
    
    public function añadir_persona($peso_persona)
    {
        $this->setPeso($this->getPeso() + $peso_persona);
    }
}
?>