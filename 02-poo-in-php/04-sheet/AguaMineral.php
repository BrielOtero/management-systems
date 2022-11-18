<?php
class AguaMineral extends Bebidas{
private $origen;

public function __construct($origen,$identificador, $cantidadLitros,$precio,$marca)
{
    $this->origen=$origen;
    parent::__construct($identificador, $cantidadLitros,$precio,$marca);
}
}
?>