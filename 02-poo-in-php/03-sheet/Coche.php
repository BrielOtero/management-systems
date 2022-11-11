<?php
class Coche extends Cuatro_ruedas
{
    private $numero_cadenas_nieve = 0;

    public function getNumeroCadenasNieve()
    {
        return $this->numero_cadenas_nieve;
    }

    public function setNumeroCadenasNieve($numero_cadenas_nieve)
    {
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($numero)
    {
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve + $numero;
    }
    
    public function quitar_cadenas_nieve($numero)
    {
        if ($this->numero_cadenas_nieve - $numero < 0) {
            $this->numero_cadenas_nieve = 0;
        } else {
            $this->numero_cadenas_nieve = $this->numero_cadenas_nieve - $numero;
        }
    }

    public function añadir_persona($peso_persona)
    {
        parent::añadir_persona($peso_persona);
        if (
            $this->getPeso() >= 1500 &&
            $this->numero_cadenas_nieve <= 2
        ) {
            echo "WARNING, ponga 4 cadenas para la nieve.";
            echo "<br />";
        }
    }
}
?>