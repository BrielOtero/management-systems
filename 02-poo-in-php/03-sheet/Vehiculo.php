<?php
abstract class Vehiculo
{
    private $color;
    private $peso;

    const SALTO_DE_LINEA = '<br />';
    static protected $numero_cambio_color = 0;

    public function __construct($color, $peso)
    {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        self::$numero_cambio_color = self::$numero_cambio_color + 1;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        if ($peso > 2100) {
            $this->peso = 2100;
        } else {
            $this->peso = $peso;
        }
    }

    public function rouler()
    {
        echo "El vehículo circula.<br />";
    }
    public static function ver_atributo($objeto)
    {
        if (method_exists($objeto, 'getColor')) {
            echo "El color es: ";
            echo $objeto->getColor() . self::SALTO_DE_LINEA;
        }

        if (method_exists($objeto, 'getPeso')) {
            echo "El peso es: ";
            echo $objeto->getPeso() . self::SALTO_DE_LINEA;
        }

        if (method_exists($objeto, 'getCilindrada')) {
            echo "La cilindrada es: ";
            echo $objeto->getCilindrada() . self::SALTO_DE_LINEA;
        }

        if (method_exists($objeto, 'getPuerta')) {
            echo "El número de puertas es: ";
            echo $objeto->getNumeroPuertas() . self::SALTO_DE_LINEA;
        }

        if (method_exists($objeto, 'getLongitud')) {
            echo "La longitud es: ";
            echo $objeto->getLongitud() . self::SALTO_DE_LINEA;
        }

        if (method_exists($objeto, 'getNumeroNeumaticoNieve')) {
            echo "El número de cadenas para la nieve es: ";
            echo $objeto->getNumeroNeumaticoNieve() . self::SALTO_DE_LINEA;
        }

        echo "El color se ha cambiado ";
        echo self::$numero_cambio_color . " vez. ";
    }

    abstract public function añadir_persona($peso_persona);
}
?>