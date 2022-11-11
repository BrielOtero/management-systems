<?php
class Dos_ruedas extends Vehiculo
{
    private $cilindrada;

    public function getCilindrada()
    {
        return $this->cilindrada;
    }
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($numerolitros)
    {
        $this->setPeso($this->getPeso() + $numerolitros);
    }
    
    public function añadir_persona($peso_persona)
    {
        $this->setPeso($this->getPeso() + $peso_persona + 2);
    }
}
?>