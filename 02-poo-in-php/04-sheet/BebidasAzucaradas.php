<?php
class BebidasAzucaradas extends Bebidas
{
    private $azucar;
    private $promocion;

    public function __construct($azucar, $promocion, $identificador, $cantidadLitros, $precio, $marca)
    {
        if ($promocion) {
            $precio = $precio-($precio * 0.1);
        }

        $this->azucar = $azucar;
        $this->promocion = $promocion;

        parent::__construct($identificador, $cantidadLitros, $precio, $marca);
    }
}

?>