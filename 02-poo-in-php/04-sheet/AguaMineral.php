<?php
class AguaMineral extends Bebidas
{
    private $origen;

    public function __construct($origen, $litros, $precio, $marca)
    {
        parent::__construct($litros, $precio, $marca);
        self::setOrigen($origen);
    }


    public function getOrigen()
    {
        return $this->origen;
    }

    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    public function getId()
    {
        return parent::getId();
    }

    public function visualizar()
    {
        parent::visualizar();
        print('origen: ' . self::getOrigen() . '<br>');
    }
}
?>